<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Livre;
use Faker;


class LivreFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 15; $i ++){
            $livre = new Livre(['titre' => $faker->name, 
                                'prix' => 40, 
                                'isbn' => '123412342314']);
            $manager->persist ($livre);
        }
        $manager->flush();
    }
}
