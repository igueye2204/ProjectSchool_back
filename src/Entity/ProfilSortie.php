<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProfilSortieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProfilSortieRepository::class)
 * @ApiResource(
 *     attributes = {
 *      "security" = "is_granted('ROLE_ADMIN')",
 *      "security_message" = "Accès refusé!"
 *  },
 *     routePrefix="/admin",
 *      normalizationContext={
 *      "groups"={
 *          "ProfilSortie:read"
 *      }
 *  },
 *     collectionOperations = {
 *
 *          "get_profilsortie_deleted" = {
 *                     "method" = "get",
 *                   "deserialize" = false
 *          },
 *
 *          "add_profil" = {
 *                  "method" = "post",
 *                  "path" = "/profilsorties",
 *                  "deserialize" = false
 *          }
 * },
 * itemOperations = {
 *
 *           "get" = {
 *                  "path" = "/profilsortie/{id}",
 *                   "deserialize" = false
 *          },
 *          "put" = {
 *                  "path" = "/profilsortie/{id}"
 *          },
*           "get_profilsortie" = {
*                       "method" = "get",
*                          "path" = "/profilsorties",
*                   "deserialize" = false
*          },
 *
 *     "desarchive_profilsortie" = {
 *            "method" = "delete",
 *       "deserialize" = false
 *          },
 *
 *    "delete_profilsortie" = {
*            "method" = "delete",
 *      "deserialize" = false
 *     }
 * }
 * )
 */
class ProfilSortie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"ProfilSortie:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique= true)
     * @Groups({"ProfilSortie:read"})
     * @Assert\NotBlank(
     *     message="Veuillez ajouter un profil SVP!"
     * )
     *
     */
    private $libelle;

    /**
     * @ORM\Column(type = "boolean")
     */
    private $archive;

    /**
     * @ORM\ManyToMany(targetEntity=Apprenant::class, mappedBy="profilSortie")
     */
    private $apprenants;

    public function __construct()
    {
        $this->apprenants = new ArrayCollection();
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
     * @return Collection|Apprenant[]
     */
    public function getApprenants(): Collection
    {
        return $this->apprenants;
    }

    public function addApprenant(Apprenant $apprenant): self
    {
        if (!$this->apprenants->contains($apprenant)) {
            $this->apprenants[] = $apprenant;
            $apprenant->addProfilSortie($this);
        }

        return $this;
    }

    public function removeApprenant(Apprenant $apprenant): self
    {
        if ($this->apprenants->contains($apprenant)) {
            $this->apprenants->removeElement($apprenant);
            $apprenant->removeProfilSortie($this);
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
