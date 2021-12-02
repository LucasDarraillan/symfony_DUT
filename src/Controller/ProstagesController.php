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
        return $this->render('prostages/index.html.twig', [
            'controller_name' => 'ProstagesController',
        ]);
    }

    /**
     * @Route("/entreprises", name="entreprises")
     */
    public function entreprises(): Response
    {
        return $this->render('prostages/entreprises.html.twig', [
            'controller_name' => 'ProstagesController',
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
     * @Route("/stages/{id}", name="stages")
     */
    public function stages($id): Response
    {
        return $this->render('prostages/stages.html.twig', [
            'controller_name' => 'ProstagesController',
            'id' => $id,
        ]);
    }
}