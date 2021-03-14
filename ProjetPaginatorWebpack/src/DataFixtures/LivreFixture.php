<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class LivreFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);


        for ($i = 0; $i<50 ; $i++){
            $livre = new Livre ();        
            $livre->setTitre ("Le livre de " . $i);
            $livre->setDatePublication(new DateTime());
            $livre->setDescription("Blablablabla ".$i);
            $livre->setIsbn( rand (0,10));
            $livre->setPrix(rand (10,30));
            $manager->persist ($livre);

        }

        $manager->flush();
    }
}
