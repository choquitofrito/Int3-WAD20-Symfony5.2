<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Client;

class ClientFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 10; $i++) {
            $client = new Client();
            $client->setNom("Dupont " . $i);
            $client->setPrenom("Sarah " . $i);
            $client->setEmail("email " . $i);
            
            $manager->persist($client);
        }

        $manager->flush();
    }
}
