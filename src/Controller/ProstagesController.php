<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstagesController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('prostages/index.html.twig');
    }

    /**
     * @Route("/entreprises/{idEntreprise}", name="entreprises")
     */
    public function entreprises($idEntreprise): Response
    {
        return $this->render('prostages/entreprises.html.twig', [
            'controller_name' => 'ProstagesController',
            'idEntreprise' => $idEntreprise,
        ]);
    }

    /**
     * @Route("/formations", name="formations")
     */
    public function formations(): Response
    {
        return $this->render('prostages/formations.html.twig', [
            'controller_name' => 'ProstagesController',
        ]);
    }

    /**
     * @Route("/stages/{idStage}", name="stages")
     */
    public function stages($idStage): Response
    {
        return $this->render('prostages/stages.html.twig', [
            'controller_name' => 'ProstagesController',
            'idStage' => $idStage,
        ]);
    }
}
