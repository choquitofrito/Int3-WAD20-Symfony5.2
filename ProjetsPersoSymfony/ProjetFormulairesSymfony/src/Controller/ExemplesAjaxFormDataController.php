<?php

namespace App\Controller;

use App\Entity\Aeroport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

class ExemplesAjaxFormDataController extends AbstractController
{

    // 1. exemple de renvoi de HTML pur (mauvaise pratique)
    #[Route("/exemples/formulaires/exemple1/affichage")]
    public function exemple1Affichage(): Response
    {
        return $this->render('exemples_ajax_form_data/exemple1_affichage.html.twig');
    }

    #[Route("/exemples/formulaires/exemple1/traitement", name: "exemple1_traitement")]
    public function exemple1Traitement(Request $req): Response
    {
        $nom = $req->get('nom');
        return new Response("<h1>coucou </h1>".$nom);
    }


    // 2. exemple de renvoi du JSON pour l'afficher dans le DOM
    #[Route("/exemples/formulaires/exemple2/affichage")]
    public function exemple2Affichage(): Response
    {
        return $this->render('exemples_ajax_form_data/exemple2_affichage.html.twig');
    }

    #[Route("/exemples/formulaires/exemple2/traitement", name: "exemple2_traitement")]
    public function exemple2Traitement(Request $req): Response
    {
        $nom = $req->get('nom');
        $arrJson = ['nom' => $nom];
        return new JsonResponse($arrJson);
    }

    // 3. exemple de recherche dans la BD. Un aeroport par code (SELECT). On renvoie le nom et le code
    // On renvoie du JSON
    #[Route("/exemples/formulaires/exemple3/affichage")]
    public function exemple3Affichage(): Response
    {
        return $this->render('exemples_ajax_form_data/exemple3_affichage.html.twig');
    }

    #[Route("/exemples/formulaires/exemple3/traitement", name: "exemple3_traitement")]
    public function exemple3Traitement(Request $req, SerializerInterface $serializer): Response
    {
        $code = $req->get('code');
        // dump ($code);

        $em = $this->getDoctrine()->getManager();

        $rep = $em->getRepository(Aeroport::class);
        // objet aeroport (pas array) reçu de la BD, ou null si on ne trouve rien
        $aeroport = $rep->findOneBy(['code'=>$code]);
        
        // dd ($aeroport);

        // dump ($aeroport);

        // chaîne de characters JSON
        $aeroportJSON = $serializer->serialize($aeroport,'json');
        // dump ($aeroportJSON);
        $arrJson = ['aeroport' => $aeroportJSON]; // ne fonctionne pas, un objet PHP ne peut pas être transformé directement

        return new JsonResponse($arrJson);
    }

    
}
