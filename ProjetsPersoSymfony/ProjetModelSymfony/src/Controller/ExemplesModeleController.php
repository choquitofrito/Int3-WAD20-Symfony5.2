<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Livre;
use App\Entity\Client;

use Faker;

class ExemplesModeleController extends AbstractController
{
    #[Route('/exemples/modele', name: 'exemples_modele')]
    public function index(): Response
    {
        return $this->render('exemples_modele/index.html.twig', [
            'controller_name' => 'ExemplesModeleController',
        ]);
    }

    #[Route('/exemples/modele/find/one/by')]
    public function exempleFindOneBy()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Livre::class);

        $unLivre = $rep->findOneBy([
            'titre' => 'Moby Dick',
            'prix' => 20
        ]);

        // dump and die!
        // dd($unLivre);
        return $this->render('', $vars);
    }

    #[Route('/exemples/modele/find/by')]
    public function exempleFindBy()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Livre::class);

        $arrLivres = $rep->findBy([
            'titre' => 'Moby Dick',
            'prix' => 20
        ]);
        // dump and die!
        dd($arrLivres);
    }

    #[Route('/exemples/modele/find')]
    public function exempleFind()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Livre::class);

        $unLivre = $rep->find(13);
        // dump and die!
        dd($unLivre);
    }


    #[Route('/exemples/modele/find/all')]
    public function exempleFindAll()
    {

        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Livre::class);

        $arrLivres = $rep->findAll();
        // dump and die!
        dd($arrLivres);
    }




    #[Route('/exemples/modele/exercice1')]
    public function exercice1()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Livre::class);

        $livre = $rep->findOneBy([
            'titre' => 'Moby Dick',
            'prix' => 20
        ]);
        // SELECT * FROM Livre WHERE titre = "Moby Dick" AND prix = 20

        $vars = [
            'livre' => $livre
        ];
        return $this->render('exemples_modele/exercice_1.html.twig', $vars);
    }


    #[Route('/exemples/modele/exercice2')]
    public function exercice2()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Client::class);

        $arrClients = $rep->findAll();
        $vars = ['arrClients' => $arrClients];
        return $this->render('exemples_modele/exercice_2.html.twig', $vars);
    }


    #[Route('/exemples/modele/insert')]
    public function exempleInsert()
    {

        // avec un constructeur sans param??tres
        // $livre = new Livre();
        // $livre->setTitre("Loulou");
        // $livre->setPrix(30);

        // avec un constructeur contenant de param??tres
        // $livre = new Livre ('Loulou',30,new \DateTime());

        $em = $this->getDoctrine()->getManager();

        // avec constructeur + Hydrate
        $livre1 = new Livre([
            'titre' => 'Gloria3',
            'prix' => 30,
            'datePublication' => new \DateTime(),
            'description' => 'le livre',
            'isbn' => '32423423423'
        ]);

        $em->persist($livre1);

        $livre2 = new Livre([
            'titre' => 'Gloria4',
            'prix' => 30,
            'datePublication' => new \DateTime(),
            'description' => 'le livre',
            'isbn' => '32423423423'
        ]);
        $em->persist($livre2);

        $em->flush();

        $livre2->setTitre("Miiii");

        // $em->flush();

        die();
    }

    // test faker 
    #[Route('/exemples/modele/test/faker')]
    public function testFaker(){
        $faker = Faker\Factory::create();
        dump ($faker->name);
        dd ("tout ok");
    }

    
    #[Route('/exemples/modele/exercice1/delete')]
    public function exercice1Delete()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Client::class);

        $client = $rep->findOneBy(['nom' => 'Scaccia']);
        $em->remove($client);
        $em->flush();
        dd($client);
    }


    #[Route('/exemples/modele/exercice2/insert/livres')]
    public function exercice2InsertLivres()
    {
        $em = $this->getDoctrine()->getManager();
        $l1 = new Livre(['titre' => 'Lolo', 'prix' => 40, 'isbn' => '123412342314']);
        $l2 = new Livre(['titre' => 'Pepe', 'prix' => 40, 'isbn' => '234234234234']);
        $em->persist($l1);
        $em->persist($l2);
        $em->flush();
        dd('Livre dans la BD, v??rifiez!');
        // return new Response("insert fait, v??rifiez la BD");
        // return new $this->render (.........)

    }



}
