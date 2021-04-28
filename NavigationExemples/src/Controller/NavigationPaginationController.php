<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Data\SearchData;
use App\Form\SearchType;
use Symfony\Component\HttpFoundation\Request;




class NavigationPaginationController extends AbstractController
{


    // lancez cette route pour commencer. Elle contient une nav
    #[Route('/navigation/pagination', name: 'navigation_pagination')]
    public function index(): Response
    {
   
        return $this->render('navigation_pagination/index.html.twig');
    }

    // lancez cette route pour commencer. Elle contient une nav
    #[Route('/contenu/base', name: 'contenu_base')] // on peut injecter un repo si on le veut
    public function contenuBase(FilmRepository $rep, Request $req): Response
    {
        $data = new SearchData(); // c'est une classe qui représente le form, pas une entité
                                    // on aurait pu utiliser un form indépendant aussi au lieu d'une classe
        $form = $this->createForm(SearchType::class,$data);
        $data->numeroPage = $req->get ('page',1); // c'est le paginator qui rajoute page=X dans l'URL. Notre proprieté dans SearchData peut s'appeler comment on veut...
                                                // on met la valeur 1 par défaut

        // traiter le form
        $form->handleRequest($req);
        
        // if ($form->isSubmitted()){
        //     dump ($data);
        //     dd($req);
        // }    

        // voici l'avantage de la classe: on peut envoyer à la méthode du Repo 
        // un objet au lieu d'un tas de string...
        // Le repo fera la pagination à l'interieur (voir code). On aura pu juste recevoir un array
        // d'objets et paginer ici (ex. des notes). Question de choix (simplifier ou pas le controller)
        $filmsFiltres = $rep->obtenirResultatsFiltres($data);


        $vars = ['filmsFiltres' => $filmsFiltres,
                'form' => $form->createView()];

        return $this->render('navigation_pagination/contenu_base.html.twig', $vars);
    }

}
