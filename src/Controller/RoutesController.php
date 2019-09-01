<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RoutesController extends AbstractController
{
    /**
     * @Route("/routes", name="routes")
     */
    public function index()
    {
        return $this->render('routes/index.html.twig', [
            'controller_name' => 'RoutesController',
        ]);
    }
}
