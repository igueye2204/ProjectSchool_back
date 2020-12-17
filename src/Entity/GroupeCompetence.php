<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\GroupeCompetenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=GroupeCompetenceRepository::class)
 * @ApiResource(
 *     routePrefix="/admin",
 *     collectionOperations = {
 *      "get" = {
 *          "path" = "/grpcompetences"
 *      },
 *      "add_grp_competences" = {
 *          "method" = "post",
 *          "path" = "/grpcompetences",
 *          "deserialize" = false
 *      }
 *  },
 *  itemOperations = {
 *      "get" = {
 *          "path" = "/grpcompetences/{id}"
 *      },
 *      "put" = {
 *          "path" = "/grpcompetences/{id}"
 *      }
 *  }
 * )
 */
class GroupeCompetence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity=Competence::class, mappedBy="GroupeCompetence")
     * @Assert\NotBlank()
     */
    private $competences;

    public function __construct()
    {
        $this->competences = new ArrayCollection();
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
     * @return Collection|Competence[]
     */
    public function getCompetences(): Collection
    {
        return $this->competences;
    }

    public function addCompetence(Competence $competence): self
    {
        if (!$this->competences->contains($competence)) {
            $this->competences[] = $competence;
            $competence->addGroupeCompetence($this);
        }

        return $this;
    }

    public function removeCompetence(Competence $competence): self
    {
        if ($this->competences->contains($competence)) {
            $this->competences->removeElement($competence);
            $competence->removeGroupeCompetence($this);
        }

        return $this;
    }
}
