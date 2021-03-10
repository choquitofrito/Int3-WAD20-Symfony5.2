<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Traversable;

class ExemplesTwigController extends AbstractController
{
    #[Route('/exemples/twig', name: 'exemples_twig')]
    public function index(): Response
    {
        return $this->render('exemples_twig/index.html.twig', [
            'controller_name' => 'ExemplesTwigController',
        ]);
    }

    #[Route('/exemple1')]
    public function exemple1(): Response
    {
        return $this->render('exemples_twig/exemple_1.html.twig');
    }

    #[Route('/exemple/twig/affiche/ville')]
    public function exempleTwigAfficheVille(): Response
    {
        $vars = [
            'nom' => 'Rome',
            'population' => 7000000,
            'pays' => 'Italie'
        ];

        return $this->render('exemples_twig/exemple_twig_affiche_ville.html.twig', $vars);
    }

    #[Route('/exemple/twig/affiche/villes')]
    public function exempleTwigAfficheVilles(): Response
    {
        $vars = [
            'ville1' => [
                'nom' => 'Rome',
                'population' => 7000000,
                'pays' => 'Italie'
            ],
            'ville2' => [
                'nom' => 'Bruxelles',
                'population' => 4000000,
                'pays' => 'Belgique'
            ]
        ];


        $lesStagiaires = ['Lucie','Salima','Doris'];
        
        return $this->render('exemples_twig/exemple_twig_affiche_villes.html.twig', $vars);
    }

    #[Route('/exemple/twig/affiche/personne')]
    public function exempleTwigAffichePersonne(): Response
    {
        $p = new Personne();
        $p->nom = "Dupont";
        $p->prenom = "Zuli";

        $vars = ['unePersonne' => $p]; 

        return $this->render('exemples_twig/exemple_twig_affiche_personne.html.twig', $vars);
    }

    #[Route('/exemple/twig/exemple/if')]
    public function exempleIf ()
    {
        $age = 20;
        $vars = ['age'=>$age]; 
        return $this->render ('exemples_twig/exemple_if.html.twig', $vars);

    }


    #[Route('/exemple/twig/exemple/boucle')]
    public function exempleBoucle()
    {
        $tab = [
            'nom'=>'Lola',
            'adresse'=>'Rue de la Paix',
            'gsm'=>'045345345345'
        ];
        $vars = ['personne'=>$tab];
        return $this->render ('exemples_twig/exemple_boucle.html.twig', $vars);
        
    }
    
    
    #[Route('/exemple/twig/exemple/boucle/objet')]
    public function exempleBoucleObjet()
    {
        $p = new Personne();
        $p->nom = "Dupont";
        $p->prenom = "Camille";
        // la conversion est necessaire
        $vars = ['personne'=> (array)$p];
        return $this->render ('exemples_twig/exemple_boucle_objet.html.twig', $vars);
    }    

    // exercice
    #[Route('/exemple/twig/exercice/array/films')]
    public function exerciceArrayFilms()
    {
        $f1 = new Film ("Eyes Wide Shut","Kubrick");
        $f2 = new Film ("2001","Kubrick");

        $films = [(array)$f1, (array)$f2];
        
        $vars = ['films' => $films ];
        return $this->render ('exemples_twig/exercice_array_films.html.twig', $vars);
    }    


    #[Route('/exemple/twig/exercice/filtres/{nom}')]
    public function exerciceFiltres (Request $req){

        $nom = $req->get("nom");
        $vars = ['nom'=> $nom];
        return $this->render ('exemples_twig/exercice_twig_exercice_filtres.html.twig', $vars);
    }



}

// la classe ne serait jamais ici!
class Personne {
    public $nom;
    public $prenom;
}


// une classe ne devra jamais être ici, c'est juste pour l'exemple!!
class Film 
{
    public $titre;
    public $auteur;

    function __construct($titre, $auteur) {
        $this->titre = $titre;
        $this->auteur = $auteur;
    }
}