<?php

namespace App\DataFixtures;

use App\Entity\ProductType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductTypeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $productType = new ProductType();
        
        $productType->setTitle('Telhas');
        $productType->setCreatedAt(new \DateTime('now'));

        $manager->persist($product);
        $manager->flush();
    }
}
