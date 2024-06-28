<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ControllerCatalogueController extends AbstractController
{
    /**
     * @Route("/", name="controller_catalogue")
     */
    public function index()
    {
        return $this->render('controller_catalogue/index.html.twig', [
            'controller_name' => 'ControllerCatalogueController',
        ]);
    }
}
