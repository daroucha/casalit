<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
  /**
   * @Route("/products", name="products")
   */
  public function index()
  {
    return $this->render('products/index.html.twig', [
      'controller_name' => 'ProductsController',
    ]);
  }

  /**
   * @Route("/products/{type}", name="product_type")
   */
  public function type($type)
  {
    return $this->render('products/type.html.twig', [
      'type' => $type,
    ]);
  }
}
