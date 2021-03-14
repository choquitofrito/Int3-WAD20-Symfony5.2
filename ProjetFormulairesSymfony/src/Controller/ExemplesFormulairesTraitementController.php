<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

// entité Livre
use App\Entity\Livre;
// classe du formulaire
use App\Form\LivreType;

use Symfony\Component\HttpFoundation\Request;


class ExemplesFormulairesTraitementController extends AbstractController {

    // dans la même action on réalise le rendu et la réception 
    #[Route ("/exemples/formulaires/traitement/exemple/livre",name:"exemple_livre")]
    public function exempleLivre (Request $req){
        // 1. Création d'une entité vide
        $livre = new Livre();

        // 2. Création du formulaire du type souhaité (pas 'affichage'!)
        // pour héberger les données de l'entité
        $formulaireLivre = $this->createForm (LivreType::class, $livre,
                ['action'=> $this->generateUrl ("exemple_livre"),
                    'method'=>'POST']);
        
        
        // 3. Analyse de l'objet Request du navigateur
        $formulaireLivre->handleRequest($req);
        
        // 4. Vérification: handleRequest indique qu'on vient d'un submit ou pas? Si on vient d'un submit, handleRequest remplira les données de l'entité avec les données du $_POST (ou $_GET, selon le type de form)
        
        // si submit et données valides, on entre dans l'if
        if ($formulaireLivre->isSubmitted() && $formulaireLivre->isValid()){
            // Ici, les données de l'entité seront 'magiquement' remplies

            // on peut toujours accèder aux données du form à la main
            // (utile quand le form contient plus ou moins de champs que l'entité)
            // $data = $formulaireLivre->getData(); 
            
            // Rendu d'une vue où on affiche les données
            // Normalement on fera CRUD ici, ou une autre opération...
            
            return $this->render ('/exemples_formulaires_traitement/traitement_formulaire_livre.html.twig',
                                ['livre'=> $livre]);
        }
        // si non, on doit juste faire le rendu du formulaire
        else {
            return $this->render ('/exemples_formulaires_traitement/affichage_formulaire_livre.html.twig',
                                ['formulaireLivre'=> $formulaireLivre->createView()]);
        }
    }
}