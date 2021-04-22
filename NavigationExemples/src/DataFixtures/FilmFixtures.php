<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0;$i<100;$i++){
            $film = new Film([
                'titre'=>'Film '.$i,
                'duree'=>rand(60,200)
            ]);
            $manager->persist($film);
        }

        $manager->flush();
    }
}
