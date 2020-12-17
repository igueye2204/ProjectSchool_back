<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormateurRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=FormateurRepository::class)
 * @ApiResource(
 *     collectionOperations = {
 *      "get" = {
 *          "path" = "/formateurs/"
 *      }
 *     },
 * itemOperations = {
 *      "get" = {
 *          "path" = "/formateurs/{id}"
 *      },
 *     "put" = {
 *          "path" = "/formateurs/{id}"
 *      }
 *  }
 * )
 */
class Formateur extends User
{

}
