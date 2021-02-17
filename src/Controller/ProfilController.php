<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Entity\User;
use App\Main;
use App\Repository\ProfilRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProfilController extends AbstractController
{
    /**
     * @var ArrayCollection
     */

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @Route(
     *  "/api/admin/profils",
     *  name="add_profil",
     *  methods = {"POST"},
     *  defaults={
     *      "_api_resource_class" = Profil::class,
     *      "_api_collection_operation_nam" = "add_profil"
     *  }
     * )
     */
    public function addProfil(EntityManagerInterface $manager, ValidatorInterface $validator, Request $request, SerializerInterface $serializer)
    {
        $newProfil = $request->request->all();

        $profil = $serializer->denormalize($newProfil, Profil::class, true);
        $errors = $validator->validate($newProfil);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            return new Response($errorsString);

        }
        $manager->persist($profil);
        $manager->flush();
        return new JsonResponse("success", Response::HTTP_CREATED, [], true);
        // echo "<img src='data:$type;base64,$avatar'>";


    }

    /**
     * @Route(
     * "/api/admin/profils/{id}",
     *  name="delete_profil",
     *  methods={"DELETE"},
     *  defaults={
     *      "_api_resource_class" = Profil::class,
     *      "_api_item_operation_name" = "delete_profil"
     *      }
     *    )
     */
    public function deleteProfil(Request $request, EntityManagerInterface $manager, ProfilRepository $repo)
    {
        $ref = $request->attributes->get('data');
       // $profil_id = $request->get('id');
       // $repo->findAll()
        $ref->setArchive(true);
        foreach ($ref->getUsers() as $users){
            $ref = $users->setUserArchive(true);
        }
        $manager->persist($ref);
        $manager->flush();
    }

    /**
     * @Route(
     * "/api/admin/profils/desarchive/{id}",
     *  name="desarchive_profil",
     *  methods={"DELETE"},
     *  defaults={
     *      "_api_resource_class" = Profil::class,
     *      "_api_item_operation_name" = "desarchive_profil"
     *      }
     *    )
     */
    public function DProfil(Request $request, EntityManagerInterface $manager)
    {
        $ref = $request->attributes->get('data');
        $ref->setArchive(false);
        $manager->persist($ref);
        $manager->flush();
        return new JsonResponse("success", Response::HTTP_CREATED, [], true);
    }

    /**
     * @Route(
     * "/api/admin/profils",
     *  name="get_profil",
     *  methods={"GET"},
     *  defaults={
     *      "_api_resource_class" = Profil::class,
     *      "_api_collection_operation_nam" = "get_profil"
     *      }
     *    )
     */
    public function getProfil(ProfilRepository $repo, Main $method){


        return ($method->getAllProfil($repo));

    }

    /**
     * @Route(
     * "/api/admin/profilsdeleted",
     *  name="get_profil_deleted",
     *  methods={"GET"},
     *  defaults={
     *      "_api_resource_class" = Profil::class,
     *      "_api_collection_operation_nam" = "get_profil_deleted"
     *      }
     *    )
     */
    public function getDeletedUsers(ProfilRepository $repo, Main $method){


        return ($method->getProfilDeleted($repo));

    }
}
