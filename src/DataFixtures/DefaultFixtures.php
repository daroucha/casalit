<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DefaultFixtures extends Fixture
{
  public function load(ObjectManager $manager)
  {
    $user = new User();

    $user->setUsername('admin');
    $user->setPassword('casalit_1234');

    $manager->persist($user);

    $manager->flush();
  }
}
