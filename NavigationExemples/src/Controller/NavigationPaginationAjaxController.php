<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Data\SearchData;
use App\Form\SearchType;
use Symfony\Component\HttpFoundation\Request;



// En cours
class NavigationPaginationAjaxController extends AbstractController
{


    // lancez cette route pour commencer. Elle contient une nav
    #[Route('/navigation/pagination/ajax', name: 'navigation_pagination_ajax')]
    public function index(): Response
    {

        return $this->render('navigation_pagination_ajax/index.html.twig');
    }

    #[Route('/contenu/base/ajax', name: 'contenu_base_ajax')] // on peut injecter un repo si on le veut
    public function contenuBaseAjax(FilmRepository $rep, Request $req): Response
    {
        $data = new SearchData(); // c'est une classe qui représente le form, pas une entité
        // on aurait pu utiliser un form indépendant aussi au lieu d'une classe
        $form = $this->createForm(
            SearchType::class,
            $data,
            ['method' => 'POST'] // traiter le form comme un post, ajax envoie un post
        );

        $vars = [
            'form' => $form->createView()
        ];

        return $this->render('navigation_pagination_ajax/contenu_base.html.twig', $vars);
    }




    #[Route('/contenu/base/ajax/traitement', name: 'contenu_base_ajax_traitement')] // on peut injecter un repo si on le veut
    public function contenuBaseAjaxTraitement(FilmRepository $rep, Request $req): Response
    {
        $data = new SearchData(); // c'est une classe qui représente le form, pas une entité
        // on aurait pu utiliser un form indépendant aussi au lieu d'une classe
        $form = $this->createForm(
            SearchType::class,
            $data,
            ['method' => 'POST']// traiter le form comme un post, ajax envoie un post. Indispensable pour handleRequest
        );

        $data->numeroPage = $req->get('page', 1); // c'est le paginator qui rajoute page=X dans l'URL. Notre proprieté dans SearchData peut s'appeler comment on veut...
        // on met la valeur 1 par défaut

        // traiter le form
        $form->handleRequest($req);


        // voici l'avantage de la classe: on peut envoyer à la méthode du Repo 
        // un objet au lieu d'un tas de string...
        // Le repo fera la pagination à l'interieur (voir code). On aura pu juste recevoir un array
        // d'objets et paginer ici (ex. des notes). Question de choix (simplifier ou pas le controller)
        dd ($data);
        $filmsFiltres = $rep->obtenirResultatsFiltres($data);


        $vars = [
            'filmsFiltres' => $filmsFiltres,
            'form' => $form->createView()
        ];

        // maintenant il faut renvoyer un contenu, pas rendre une page
        return new Response($this->renderView('navigation_pagination_ajax/contenu_base_ajax_traitement.html.twig', $vars));
    }
}
