<?php

namespace App\Controller;



use App\Main;
use App\Entity\User;
use App\Entity\Profil;
use App\Repository\UserRepository;
use App\Service\MyService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class USerController extends AbstractController
{


    /**
     * @Route(
     *  "/api/admin/users",
     *  name="post_user",
     *  methods = {"POST"},
     *  defaults={
     *      "_api_resource_class" = User::class,
     *      "_api_collection_operation_name" = "post_user"
     *  }
     * )
     * @param MyService $serve
     * @param DenormalizerInterface $denormalizer
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param SerializerInterface $serializer
     * @return Response|JsonResponse|BadRequestHttpException
     */
    public function addUser(Myservice $serve, DenormalizerInterface $denormalizer, EntityManagerInterface $manager, ValidatorInterface $validator, Request $request, UserPasswordEncoderInterface $encoder)
    {
        //$newUser = json_decode($request->getContent(), true);
        $newUser = $request->request->all();
        $uploadedFile = $request->files->get('avatar');

        $newUser['avatar'] = $serve->upload($uploadedFile);
        $newUser['avatarType'] = $serve->type($uploadedFile);
        $profil = ucfirst(strtolower($newUser['profil']));
        $profilName = "App\\Entity\\$profil";
        if(class_exists($profilName)){
            $profilObject = $manager->getRepository(Profil::class)->findOneBy(['libelle' => $profil]);
                unset($newUser['profil']);
            $user = $denormalizer->denormalize($newUser, $profilName);

            $user->setProfil($profilObject);
            $user->setPassword($encoder->encodePassword($user, $newUser['password']));
            $errors = $validator->validate($newUser);

            if (count($errors) > 0) {
                $errorsString = $errors;

                return new Response($errorsString);

            }
            $manager->persist($user);
            $manager->flush();

            return new JsonResponse("success", Response::HTTP_CREATED, [], true);

        }else{

            return new BadRequestHttpException("Ce profil n'éxiste pas");
        }

    }

    /**
     * @Route(
     * "/api/admin/users/{id}",
     *  name="update_user",
     *  methods={"PUT"},
     *  defaults={
     *      "_api_resource_class" = User::class,
     *      "_api_item_operation_name" = "update_user"
     *      }
     *    )
     */
    public function updateUser(MyService $serve, DenormalizerInterface $denormalizer, Request $request, UserRepository $repo, EntityManagerInterface $manager){

        //Récuperation de l'objet dans la base de données
        $userData = $request->attributes->get('data');
        $userId = $request->attributes->get("id");

        $data = $serve->putData($request, 'avatar');
        $user = $repo->find($userId);
        if (!$user) {
            new Response("l'utilisateurs non trouvée avec l’id " . $userId);
        }else{

            foreach ($data as $k => $v) {
                $setter = 'set' . ucfirst($k);

                        if (!method_exists($userData, $setter)) {
                        return new Response("La méthode $setter() n'éxiste pas dans l'entité User");

                }
                $userData->$setter($v);
            }
            $manager->persist($userData);
            $manager->flush();

            return new JsonResponse("success", Response::HTTP_CREATED, [], true);

        }
    }

    /**
     * @Route(
     * "/api/admin/users/{id}",
     *  name="delete_user",
     *  methods={"DELETE"},
     *  defaults={
     *      "_api_resource_class" = User::class,
     *      "_api_item_operation_name" = "delete_user"
     *      }
     *    )
     */
    public function delUser(Request $request, EntityManagerInterface $manager)
    {
        $ref = $request->attributes->get('data');
        $ref->setArchive(true);
        $manager->persist($ref);
        $manager->flush();
        return new JsonResponse("success", Response::HTTP_CREATED, [], true);
    }

    /**
     * @Route(
     * "/api/admin/users/desarchive/{id}",
     *  name="desarchive_user",
     *  methods={"DELETE"},
     *  defaults={
     *      "_api_resource_class" = User::class,
     *      "_api_item_operation_name" = "desarchive_user"
     *      }
     *    )
     */
    public function desarchiveUser(Request $request, EntityManagerInterface $manager)
    {
        $ref = $request->attributes->get('data');
        $ref->setArchive(false);
        $manager->persist($ref);
        $manager->flush();
        return new JsonResponse("success", Response::HTTP_CREATED, [], true);
    }

    /**
     * @Route(
     * "/api/admin/users",
     *  name="get_users",
     *  methods={"GET"},
     *  defaults={
     *      "_api_resource_class" = User::class,
     *      "_api_collection_operation_nam" = "get_users"
     *      }
     *    )
     */
    public function getUsers(UserRepository $repo, Main $method){


        return ($method->getAllUser($repo));

    }

    /**
     * @Route(
     * "/api/admin/usersdeleted",
     *  name="get_users_deleted",
     *  methods={"GET"},
     *  defaults={
     *      "_api_resource_class" = User::class,
     *      "_api_collection_operation_nam" = "get_users_deleted"
     *      }
     *    )
     */
    public function getDeletedUsers(UserRepository $repo, Main $method){


        return ($method->getDeleted($repo));

    }


}
