<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ApprenantRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=ApprenantRepository::class)
 * @ApiResource(
 *  collectionOperations = {
 *      "getapprenant" = {
 *          "method"="get",
 *          "path" = "/apprenants"
 *      }
 *  },
 *  itemOperations = {
 *      "get" = {
 *          "path" = "/apprenants/{id}"
 *      },
 *     "put" = {
 *          "path" = "/apprenants/{id}"
 *      }
 *  }
 * )
 */
class Apprenant extends User
{
    /**
     * @ORM\ManyToMany(targetEntity=ProfilSortie::class, inversedBy="apprenants")
     */
    private $profilSortie;

    public function __construct()
    {
        $this->profilSortie = new ArrayCollection();
    }

    /**
     * @return Collection|profilSortie[]
     */
    public function getProfilSortie(): Collection
    {
        return $this->profilSortie;
    }

    public function addProfilSortie(profilSortie $profilSortie): self
    {
        if (!$this->profilSortie->contains($profilSortie)) {
            $this->profilSortie[] = $profilSortie;
        }

        return $this;
    }

    public function removeProfilSortie(profilSortie $profilSortie): self
    {
        if ($this->profilSortie->contains($profilSortie)) {
            $this->profilSortie->removeElement($profilSortie);
        }

        return $this;
    }
}
