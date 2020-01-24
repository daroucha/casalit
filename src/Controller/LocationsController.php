<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LocationsController extends AbstractController
{
    /**
     * @Route("/locations", name="locations")
     */
    public function index()
    {
        return $this->render('locations/index.html.twig', [
            'controller_name' => 'LocationsController',
        ]);
    }
}
