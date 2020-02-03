<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/products", name="app_products")
     */
    public function index()
    {
      return $this->render('app/app.html.twig', [
        'title'  => 'Casalit',
        'slogan' => 'É Casalit? Tá em casa!'
      ]);
    }

    /**
     * @Route("/#/{vueRouting}", name="app_products_index")
     * @return Response
     */
    public function vueRouting(): Response
    {
      return $this->render('app/app.html.twig', []);
    }
}
