<?php

namespace App\Controller;


use App\Entity\Competence;
use App\Entity\GroupeCompetence;
use App\Entity\Niveau;
use App\Repository\CompetenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class GroupeCompetenceController extends AbstractController
{

    /**
     * @Route(
     *  "/api/admin/grpcompetences",
     *  name="add_grp_competences",
     *  methods = {"POST"},
     *  defaults={
     *      "_api_resource_class" = GroupeCompetence::class,
     *      "_api_collection_operation_name" = "add_grp_competences"
     *  }
     * )
     */
    public function addGrpCompetence(Request $request, SerializerInterface $serializer,CompetenceRepository $repo, EntityManagerInterface $manager)
    {

        $grpCompeTab = json_decode($request->getContent(), true);
        $competences = $repo->findBy(['libelle' => $grpCompeTab['competences']]);

        unset($grpCompeTab['competences']);
        $grpCompetences = $serializer->denormalize($grpCompeTab, GroupeCompetence::class);

        foreach ($competences as $competence) {

            $grpCompetences->addCompetence($competence);
            $manager->persist($competence);
        }
        $manager->persist($grpCompetences);
        $manager->flush();

        return new JsonResponse("success", Response::HTTP_CREATED, [], true);
    }
}
