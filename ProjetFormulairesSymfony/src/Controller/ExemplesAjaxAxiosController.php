<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivreType;

// entité Livre
use App\Entity\Aeroport;
// classe du formulaire
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExemplesAjaxAxiosController extends AbstractController
{

    // exemple simple d'utilisation d'Ajax (Axios)

    #[Route ("/exemples/ajax/axios/exemple1/affichage" )]
    public function exemple1Affichage()
    {
        return $this->render("/exemples_ajax_axios/exemple1_affichage.html.twig");
    }

    #[Route ("/exemples/ajax/axios/exemple1/traitement",name:"exemple1_traitement" )]
    // action qui traite la commande AJAX, elle n'a pas une vue associée
    public function exemple1Traitement(Request $requeteAjax)
    {

        $valeurNom = $requeteAjax->get('nom');
        $arrayReponse = ['leMessage' => 'Bienvenu, ' . $valeurNom];
        return new JsonResponse($arrayReponse);
    }


    // exemple d'utilisation d'AJAX avec de blocs ("master page")

    #[Route ("/exemples/ajax/axios/exemple1/affichage/master/page")]
    public function exemple1AffichageMasterPage()
    {
        return $this->render("/exemples_ajax_axios/exemple1_affichage_master_page.html.twig");
    }

    #[Route ("/exemples/ajax/axios/exemple1/traitement/master/page")]
    // action qui traite la commande AJAX, elle n'a pas une vue associée
    public function exemple1TraitementMasterPage(Request $requeteAjax)
    {
        $valeurNom = $requeteAjax->get('nom');
        $arrayReponse = ['message' => 'Bienvenu, ' . $valeurNom];
        return new JsonResponse($arrayReponse);
    }



    // exemple d'utilisation d'AJAX avec de blocs ("master page")
    // et fichier JS externe (/public/assets/js/exemple1Ajax.js)

    #[Route ("/exemples/ajax/axios/exemple1/affichage/master/page/script/externe")]
    public function exemple1AffichageMasterPageScriptExterne()
    {
        return $this->render("/exemples_ajax_axios/exemple1_affichage_master_page_script_externe.html.twig");
    }

    /**
     * [Route ("/exemples/ajax/axios/exemple1/traitement/master/page/script/externe", options= {"expose":true}, name = "exemple1_traitement_externe")]
     */
    // action qui traite la commande AJAX, elle n'a pas une vue associée
    public function exemple1TraitementMasterPageScriptExterne(Request $requeteAjax)
    {
        $valeurNom = $requeteAjax->get('nom');
        $arrayReponse = ['leMessage' => 'Bienvenu, ' . $valeurNom];
        return new JsonResponse($arrayReponse);
    }

    #[Route("/exemples/ajax/axios/exemple/affichage/objets/repo")]
    public function exempleAffichageObjetsRepo()
    {
        return $this->render('/exemples_ajax_axios/exemple_affichage_objets_repo.html.twig');
    }

    
    #[Route("/exemples/ajax/axios/exemple/affichage/objets/dql")]
    public function exempleAffichageObjetsDql()
    {
        return $this->render('/exemples_ajax_axios/exemple_affichage_objets_dql.html.twig');
    }



    // 1. action de traitement du AJAX, on utilise les méthodes du repository (findBy, findAll, etc...)
    // nous devons serialiser le résultat (le transformer en json dans ce cas) et envoyer une Reponse normale

    #[Route("/exemples/ajax/axios/exemple/affichage/objets/traitement/repo", name:"exemple_objets_traitement_repo")]
    public function exempleAffichageObjetsTraitementRepo(Request $req)
    {

        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Aeroport::class);
        $code = $req->get('code');
        $aeroports = $rep->findBy(['code' => $code]); // renvoie un array même s'il y a un seul objet
        // Si on utilise les méthodes de base du Repository (find, findBy, findAll...)
        // nous devons serializer à la main en utilisant la méthode "serialize", puis 
        // envoyer une réponse normale. En DQL on peut utiliser getArrayResult, mais pas ici  
        $aeroports = $this->get('serializer')->serialize($aeroports, 'json');
        return new Response($aeroports);
    }


    // 2. action de traitement du AJAX, on utilise DQL
    // La méthode getArrayResult créera un array manipulable par JsonResponse
    // Dans ce cas on renvoie un JsonResponse au lieu d'une Response

    #[Route("/exemples/ajax/axios/exemple/affichage/objets/traitement/dql", name:"exemple_objets_traitement_dql")]
    public function exempleAffichageObjetsTraitementDql(Request $req)
    {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT aeroport FROM App\Entity\Aeroport aeroport WHERE aeroport.code LIKE :code");
        $code = $req->get('code');
        $query->setParameter("code", '%' . $code . '%');

        
        // avec getResult() on obtient un array contenant toutes les entités Livre 
        // qui contiennent dans son titre le texte saisi dans l'input

        // Chaque entité contient toutes ses propriétés et
        // les références à d'autres entités: JSON.parse ne pourra pas l'interpreter ...

        // ... mais si on change getResult par getArrayResult on recevra un array 
        // contenant (dans ce cas) la réprésentation d'array de chaque entité 
        // contenant uniquement les propriétés de base propres à l'objet 
        // (pas les "rélations" ni d'autres propriétés)
        $aeroports = $query->getArrayResult();

        // Pour mieux comprendre faites un dump ici et regardez la 
        // réponse du serveur. 

        // dd ($resultat);

        // Notez que JSON.parse n'arrivera à interpreter la réponse si vous faites dump ou 
        // echo ici, car votre réponse ne sera plus du pur JSON
        // dump ($objetLivre);

        return new JsonResponse($aeroports);

        // SELECT aeroport FROM App\Entity\Aeroport aeroport WHERE aeroport.code = 'CLR'
        // SELECT aeroport FROM App\Entity\Aeroport aeroport WHERE aeroport.code LIKE 'CLR%'
        // SELECT aeroport FROM App\Entity\Aeroport aeroport WHERE aeroport.code LIKE '%CLR%'
        // SELECT aeroport FROM App\Entity\Aeroport aeroport WHERE aeroport.code LIKE :code
        // SELECT aeroport FROM App\Entity\Aeroport aeroport WHERE aeroport.code LIKE %:code% // non!!!
        // SELECT aeroport FROM App\Entity\Aeroport aeroport WHERE aeroport.code LIKE %'CLR'% // non!!! le % ne vas pas avant les ""
        // Nous devons rajouter les % dans setParameter. Attention, il n'y a pas de ":" dans l'appel à cette fonction

    }

}
