<?php

namespace App\Controller;


use App\Entity\Competence;
use App\Entity\GroupeCompetence;
use App\Entity\Niveau;
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
    public function addGrpCompetence(Request $request, SerializerInterface $serializer, EntityManagerInterface $manager)
    {

        $grpCompeTab = json_decode($request->getContent(), true);
        $competencesTab = $grpCompeTab['competences'];
        $grpCompetences = $repo->findOneBy(['libelle' => $competenceTab["GroupeCompetence"]]);
        unset($competenceTab["GroupeCompetence"]);
        foreach ($competencesTab as $competence) {
            $cmpt = $serializer->denormalize($competence, Competence::class);
            $levels = $cmpt->getNiveaux();
            foreach ($competence['niveaux'] as $level => $niveau) {
                $niveau['niveau'] = $level + 1;
                $levels[$level] = $serializer->denormalize($niveau, Niveau::class);
                $levels[$level]->setCompetence($cmpt);
            }
            $competences[] = $cmpt;
        }

        $grpCompetences = $serializer->denormalize($grpCompeTab, GroupeCompetence::class);

        foreach ($competences as $competence) {
            $grpCompetences->addCompetence($competence);
            $competence->addGroupeCompetence($grpCompetences);
            $manager->persist($competence);
        }
        $manager->persist($grpCompetences);
        $manager->flush();

        return new JsonResponse("success", Response::HTTP_CREATED, [], true);
    }
}
