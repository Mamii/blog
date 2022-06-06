<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create one user
        UserFactory::createOne(['email' => 'swiitjaden@gmail.com', 'firstName' => 'Mamy', 'lastName' => 'Christian']);
        UserFactory::createMany(10);

        $manager->flush();
    }
}
