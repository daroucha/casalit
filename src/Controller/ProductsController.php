<?php

namespace App\Controller;

use App\Entity\ProductType;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
  /**
   * @Route("/products", name="products")
   */
  public function index()
  {
    $repository = $this->getDoctrine()->getRepository(ProductType::class);
    $productType = $repository->findAll();

    if (!$productType) {
      throw $this->createNotFoundException('No product type found');
    }

    return $this->render('products/index.html.twig', [
      'controller_name' => 'ProductsController',
      'types' => $productType
    ]);
  }

  /**
   * @Route("/products/{id}", name="product_type")
   */
  public function type($id)
  {
    $repository = $this->getDoctrine()->getRepository(ProductType::class);
    $type = $repository->find($id);

    if (!$type) {
      throw $this->createNotFoundException('Categoria inexistente');
    }
    
    $products = $type->getProducts();

    if (!$products) {
      throw $this->createNotFoundException('Nenhum produto encontrado');
    }

    return $this->render('products/type.html.twig', [
      'title' => $type->getTitle(),
      'products' => $products
    ]);
  }

  /**
   * @Route("/product/{id}", name="product_page")
   */
  public function product($id)
  {
    $repository = $this->getDoctrine()->getRepository(Product::class);
    $product = $repository->find($id);

    return $this->render('products/product.html.twig', [
      'product' => $product
    ]);
  }
}
