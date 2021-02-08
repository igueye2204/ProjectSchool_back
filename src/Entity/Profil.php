<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProfilRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 * @ApiResource(
 *  routePrefix="/admin",
 *  normalizationContext={
 *      "groups"={
 *          "profil:read"
 *      }
 *  },
 *  attributes = {
 *      "security" = "is_granted('ROLE_ADMIN')",
 *      "security_message" = "Vous n'avez pas accès à cette ressource"
 *  },
 *  collectionOperations = {
 *      "get" = {
 *          "path" = "/profils",
 *      },
 *      "add_profil" = {
 *          "method" = "post",
*      "deserialize" = false
 *      },
 *  },
 *  itemOperations = {
 *     "get_users_profil"={
 *          "method" = "get",
 *          "path"="/profils/{id}/users"
 *          },
 *      "get_profil" = {
 *          "method" = "get",
 *          "path" = "/profils/{id}"
 *      },
 *      "put" = {
 *          "path" = "/profils/{id}"
 *      },
 *      "delete" = {
 *     "method" = "delete",
 *          "path" = "/profils/{id}"
 *      }
 *  }
 * )
 */
class Profil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"profil:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, unique=true)
     * @Groups({"profil:read", "user:read"})
     * @Assert\NotBlank(
     *  message = "Champs Requis"
     * )
     */
    private $libelle;

    /**
     * @ORM\Column(type = "boolean")
     */
    private $archive;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="profil", orphanRemoval=true, cascade={"persist"})
     * @ApiSubresource
     */
    private $users;


    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->archive = 0;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setProfil($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getProfil() === $this) {
                $user->setProfil(null);
            }
        }

        return $this;
    }
    public function getArchive(): ?int
    {
        return $this->archive;
    }

    public function setArchive(int $archive): self
    {
        $this->archive = $archive;

        return $this;
    }
}
