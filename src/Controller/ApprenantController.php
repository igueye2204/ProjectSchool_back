<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApprenantController extends AbstractController
{
    /**
     * method = "get"
     * @Route("/apprenant", name="apprenant")
     */
    public function index()
    {
        return $this->render('apprenant/index.html.twig', [
            'controller_name' => 'ApprenantController',
        ]);
    }
}
