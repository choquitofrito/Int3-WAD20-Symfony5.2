<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use App\Entity\Aeroport;

class AeroportFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {

        
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $aeroport = new Aeroport(['nom'=>$faker->city . " Airport",
                                    'code'=>$faker->postcode,
                                    'dateMiseEnService'=>$faker->dateTime,
                                    'heureMiseEnService'=>$faker->dateTime,
                                    'description'=>$faker->realText($faker->numberBetween(10,30))]);
            
            $manager->persist($aeroport);
        }
        $manager->flush();
    }
}