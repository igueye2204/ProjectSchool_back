<?php

namespace App\Controller;

use App\Entity\Competence;
use App\Entity\Niveau;
use App\Repository\GroupeCompetenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class CompetenceController extends AbstractController
{
    /**
     * @Route(
     *  "/api/admin/competences",
     *  name="addcompetences",
     *  methods = {"POST"},
     *  defaults={
     *      "_api_resource_class" = Competence::class,
     *      "_api_collection_operation_name" = "addcompetences"
     *  }
     * )
     */
    public function addCompetence(Request $request, SerializerInterface $serializer, EntityManagerInterface $manager, GroupeCompetenceRepository $repo)
    {
        $competenceTab = json_decode($request->getContent(), true);
        $grpCompetences = $repo->findOneBy(['libelle' => $competenceTab["GroupeCompetence"]]);
        unset($competenceTab["GroupeCompetence"]);
        $competence = $serializer->denormalize($competenceTab, Competence::class);

        if (isset($grpCompetences)){
                if(count($competenceTab['niveaux']) === 3){

                    //foreach ($competenceTab['niveaux'] as $level => $niveau) {
                    foreach ($competenceTab['niveaux'] as $level => $niveau) {
                        $niveau['niveau'] = $level + 1;
                        $niveaux[] = $serializer->denormalize($niveau, Niveau::class);
                        $competence->addNiveau($niveaux[$level]);

                        $manager->persist($niveaux[$level]);
                    }
                    $competence->addGroupeCompetence($grpCompetences);

                    $manager->persist($competence);
                    $manager->persist($grpCompetences);
                    $manager->flush();
                    return new JsonResponse("success", Response::HTTP_CREATED, [], true);

                }else{
                    return new BadRequestHttpException("les niveaux doit obligatoirement égal à 3");
                }

        }else{
            return new BadRequestHttpException("Ce Groupe de competence n'existe pas!");
        }

    }
}
