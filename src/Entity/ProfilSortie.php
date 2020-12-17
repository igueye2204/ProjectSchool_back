<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProfilSortieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProfilSortieRepository::class)
 * @ApiResource(
 *     attributes = {
 *      "security" = "is_granted('ROLE_ADMIN')",
 *      "security_message" = "Accès refusé!",
 *     "pagination_enabled"=true,
 *     "pagination_items_per_page"=2
 *  },
 *     routePrefix="/admin",
 *     collectionOperations = {
 *          "get" = {
 *                  "path" = "/profilsorties",
 *          },
 *          "post" = {
 *                  "path" = "/profilsorties",
 *          },
 * },
 * itemOperations = {
 *           "get" = {
 *                  "path" = "/profilsortie/{id}"
 *          },
 *          "put" = {
 *                  "path" = "/profilsortie/{id}"
 *          },
 *     "delete" ={
 *                   "path" = "/profilsortie/{id}"
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
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique= true)
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
