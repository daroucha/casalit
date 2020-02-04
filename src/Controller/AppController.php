<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AppController extends AbstractController
{
    /**
     * @Route("/products/", name="app_products")
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

    /**
     * @Route("/products/search", name="app_products_search")
     */
    public function searchRoute(Request $request)
    {
      $term = $request->request->get('search');

      $repository = $this->getDoctrine()->getRepository(Product::class);
      $product = $repository->findByName($term);

      return $this->render('products/search.html.twig', [
        'term' => $term,
        'results' => $product
      ]);
    }
}
