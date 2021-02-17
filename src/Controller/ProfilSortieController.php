<?php

namespace App\Controller;

use App\Entity\ProfilSortie;
use App\Main;
use App\Repository\ProfilSortieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ProfilSortieController extends AbstractController
{
    /**
     * @Route(
     *  "/api/admin/profilsorties",
     *  name="add_profil",
     *  methods = {"POST"},
     *  defaults={
     *      "_api_resource_class" = ProfilSortie::class,
     *      "_api_collection_operation_name" = "add_profil"
     *  }
     * )
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse|Response
     */
    public function addProfilSortie( EntityManagerInterface $manager, ValidatorInterface $validator, Request $request, SerializerInterface $serializer)
    {
        $newProfil = $request->request->all();

        $profil = $serializer->denormalize($newProfil, ProfilSortie::class, true);
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
     * "/api/admin/profilsorties/{id}",
     *  name="delete_profilsortie",
     *  methods={"DELETE"},
     *  defaults={
     *      "_api_resource_class" = ProfilSortie::class,
     *      "_api_item_operation_name" = "delete_profilsortie"
     *      }
     *    )
     */
    public function deleteProfilSortie(Request $request, EntityManagerInterface $manager)
    {
        $ref = $request->attributes->get('data');
        $ref->setArchive(true);
        $manager->persist($ref);
        $manager->flush();
        return new JsonResponse("success", Response::HTTP_CREATED, [], true);
    }

    /**
     * @Route(
     * "/api/admin/profilsorties/desarchive/{id}",
     *  name="desarchive_profilsortie",
     *  methods={"DELETE"},
     *  defaults={
     *      "_api_resource_class" = ProfilSortie::class,
     *      "_api_item_operation_name" = "desarchive_profilsortie"
     *      }
     *    )
     */
    public function DeleteProfilSort(Request $request, EntityManagerInterface $manager)
    {
        $ref = $request->attributes->get('data');
        $ref->setArchive(false);
        $manager->persist($ref);
        $manager->flush();
        return new JsonResponse("success", Response::HTTP_CREATED, [], true);
    }

    /**
     * @Route(
     * "/api/admin/profilsorties",
     *  name="get_profilsortie",
     *  methods={"GET"},
     *  defaults={
     *      "_api_resource_class" = ProfilSortie::class,
     *      "_api_collection_operation_name" = "get_profilsortie"
     *      }
     *    )
     */
    public function getProfil(ProfilSortieRepository $repo, Main $method){


        return ($method->getAllProfilSortie($repo));

    }

    /**
     * @Route(
     * "/api/admin/profilsortiedeleted",
     *  name="get_profilsortie_deleted",
     *  methods={"GET"},
     *  defaults={
     *      "_api_resource_class" = ProfilSortie::class,
     *      "_api_collection_operation_name" = "get_profilsortie_deleted"
     *      }
     *    )
     */
    public function getDeletedUsers(ProfilSortieRepository $repo, Main $method){


        return ($method->getProfilSortieDeleted($repo));

    }
}
