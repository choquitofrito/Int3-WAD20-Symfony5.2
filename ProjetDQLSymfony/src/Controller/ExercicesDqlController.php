<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\HttpCache\ResponseCacheStrategyInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;


use App\Entity\Adresse;

class ExercicesDqlController extends AbstractController
{

    #[Route("/exercices/dql/exercice1")]
    public function exercice1()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT client FROM App\Entity\Client client');

        $resultat = $query->getResult();
        dump($resultat); // on fera pas de template pour simplifier le code
        die();
        return new Response();
    }


    #[Route("/exercices/dql/exercice2")]
    public function exercice2()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT emprunt FROM App\Entity\Emprunt emprunt');

        $resultat = $query->getResult();
        dump($resultat); // on fera pas de template pour simplifier le code
        die();
        return new Response();
    }


    #[Route("/exercices/dql/exercice3")]
    public function exercice3()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT client.nom,emprunt.dateRetour FROM App\Entity\Emprunt emprunt '
            . 'JOIN emprunt.clientEmprunteur client');

        $resultat = $query->getResult();
        dump($resultat); // on fera pas de template pour simplifier le code
        die();
        return new Response();
    }







    #[Route("/exercices/dql/exercice4")]
    function exercice4()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT client.nom, client.prenom,exemplaire.etat FROM App\Entity\Client client '
            . 'JOIN client.emprunts emprunt '
            . 'JOIN emprunt.exemplaireEmprunte exemplaire ');

        $resultat = $query->getResult();
        dd($resultat); // on fera pas de template pour simplifier le code
    }



    #[Route("/exercices/dql/exercice5")]
    public function exercice5()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT client.nom,client.prenom,livre.titre FROM App\Entity\Client client '
            . 'JOIN client.emprunts emprunt '
            . 'JOIN emprunt.exemplaireEmprunte exemplaire '
            . 'JOIN exemplaire.livre livre ');


        $resultat = $query->getResult();
        dd($resultat); // on fera pas de template pour simplifier le code
    }

    #[Route("/exercices/dql/exercice6")]
    public function exercice6()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT client.nom,client.prenom,livre.titre FROM App\Entity\Client client '
            . 'JOIN client.emprunts emprunt '
            . 'JOIN emprunt.exemplaireEmprunte exemplaire '
            . 'JOIN exemplaire.livre livre '
            . 'WHERE client.nom = \'Lipowska\' AND client.prenom = \'Joanna\'');


        $resultat = $query->getResult();
        dd($resultat); // on fera pas de template pour simplifier le code
   
    }


    #[Route("/exercices/dql/exercice7/{prix}")]
    public function exercice7(Request $req)
    {
        $prix = $req->get("prix");
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT livre FROM App\Entity\Livre livre WHERE livre.prix > :prix');
        $query->setParameter('prix', $prix);

        $resultat = $query->getResult();
        dd($resultat); // on fera pas de template pour simplifier le code
    }

    #[Route("/exercices/dql/exercice8/{texte}")]
    public function exercice8(Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $texte = $req->get('texte');
        $query = $em->createQuery('SELECT livre FROM App\Entity\Livre livre WHERE livre.titre LIKE :texte');
        $query->setParameter(':texte', '%' . $texte . '%');

        $resultat = $query->getResult();
        dd($resultat); 
    }

    #[Route("/exercices/dql/exercice9")]
    public function exercice9()
    {
        $em = $this->getDoctrine()->getManager();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT client.nom,client.prenom,livre.titre,emprunt.dateEmprunt FROM App\Entity\Client client '
            . 'JOIN client.emprunts emprunt '
            . 'JOIN emprunt.exemplaireEmprunte exemplaire '
            . 'JOIN exemplaire.livre livre '
            . 'WHERE MONTH(emprunt.dateEmprunt)<16 AND MONTH(emprunt.dateEmprunt)=2');


        $resultat = $query->getResult();
        dump($resultat); // on fera pas de template pour simplifier le code
        die();
        return new Response();
    }

    // Exercices avec de repositories

    // Exercice 1) Rajouter de clients et des adresses
    #[Route("/exercices/dql/exercice1Repo")]
    public function exercice1Repo()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Adresse::class);

        $rep->insererClientsAdresses();
        return new Response("Insert ok des clients et des adresses");
    }


    // Exercice 2) Rajouter un client à une adresse existante
    #[Route("/exercices/dql/exercice2Repo")]
    public function exercice2Repo()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Adresse::class);

        $rep->rajouterClientAdresse();
        return new Response("Insert ok d'un client pour un adresse");
    }
}
