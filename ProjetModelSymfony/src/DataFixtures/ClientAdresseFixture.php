<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Client;
use App\Entity\Adresse;
use Faker;

class ClientAdresseFixture extends Fixture
{
    // on peux complexifier la création des fixtures mais on va le faire très simple ici
    public function load(ObjectManager $manager)
    {

        $faker = Faker\Factory::create('fr_FR');

        // créer quelques objets Adresse, stocker dans la BD
        for ($i = 0; $i < 4; $i++) {
            $adresse = new Adresse([
                'rue' => $faker->streetAddress,
                'numero' => $faker->buildingNumber,
                'codePostal' => $faker->postcode,
                'ville' => $faker->city,
                'pays' => $faker->country
            ]);
            $manager->persist($adresse);
        }
        $manager->flush();

        // obtenir les adresses et les mettre dans un array, tout dans une ligne
        // on les obtient pour pouvoir fixer le client pour chaque adresse
        $adresses = $manager->getRepository(Adresse::class)->findAll();
        // pour debug: dump ($adresses); // array d'objets adresses

        // créer des objet Client 
        for ($i = 0; $i < 10; $i++) {
            $client = new Client([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'email' => $faker->email
            ]);
            // choisir une adresse random
            $client->setAdresse($adresses[array_rand($adresses)]);

            // vous pouvez faire dump ici et on les verra en console
            // dump ($client);
            $manager->persist($client);
        }

        $manager->flush();
    }
}
