<?php

namespace App\Entity;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping\InheritanceType;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "apprenant" = "Apprenant", "formateur" = "Formateur", "cm" = "CM"})
 * @ApiResource(
 *     routePrefix="/admin",
 *
 *  normalizationContext={"groups"={"user:read"}},
 *     attributes = {
 *
 *      "security" = "is_granted('ROLE_ADMIN')",
 *      "security_message" = "Accès refusé!"
 *  },
 *  collectionOperations = {
 *      "get" = {
 *          "path" = "/users",
 *          "deserialize" = false
 *      },
 *      "post_user" = {
 *          "method" = "post",
 *          "deserialize" = false
 *      }
 *  },
 *  itemOperations = {
 *      "get" = {
 *          "path" = "/users/{id}",
 *      },
 *      "update_user" = {
 *          "method" = "put",
 *          "deserialize" = false
 *      }
 *  }
 * )
 */
class User implements UserInterface, ContextAwareDataPersisterInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"user:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank(
     *  message = "Champ Requis"
     * )
     * @Groups({"user:read"})
     */
    private $username;


    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\Length(
     *      min = 8,
     *     minMessage="Saisir minimum 8 caractère"
     * )
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user:read"})
     * @Assert\NotBlank(
     *  message = "Champs Requis"
     * )
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups({"user:read"})
     * @Assert\NotBlank()
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     * @Groups({"user:read"})
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    private $avatarType;

    /**
     * @ORM\Column(type="blob", nullable=true)
     * @Assert\File()
     */
    private $avatar;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="users")
     * @Groups({"user:read", "profil:read"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $profil;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_' . $this->profil->getLibelle();

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAvatar()
    {
        if (empty($this->avatar)) {
            return null;
        }
        return base64_encode(stream_get_contents($this->avatar));
    }

    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get the value of avatarType
     *
     * @return  string|null
     */
    public function getAvatarType()
    {
        return $this->avatarType;
    }

    /**
     * Set the value of avatarType
     *
     * @param  string|null  $avatarType
     *
     * @return  self
     */
    public function setAvatarType($avatarType)
    {
        $this->avatarType = $avatarType;

        return $this;
    }
    public function supports($data, array $context = []): bool
    {
        return $this->decorated->supports($data, $context);
    }

    public function persist($data, array $context = [])
    {
        $result = $this->decorated->persist($data, $context);

        if (
            $data instanceof User && (
                ($context['collection_operation_name'] ?? null) === 'post' ||
                ($context['graphql_operation_name'] ?? null) === 'create'
            )
        ) {
            $this->sendWelcomeEmail($data);
        }

        return $result;
    }
    public function remove($data, array $context = [])
    {
        return $this->decorated->remove($data, $context);
    }
}