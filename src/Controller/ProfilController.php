<?php

namespace App\Controller;

use App\Entity\Profil;
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
     * @Route(
     *  "/api/admin/profils",
     *  name="add_profil",
     *  methods = {"POST"},
     *  defaults={
     *      "_api_resource_class" = Profil::class,
     *      "_api_collection_operation_name" = "add_profil"
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
}
