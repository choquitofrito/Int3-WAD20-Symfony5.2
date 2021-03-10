<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Livre;
use Symfony\Component\HttpFoundation\Request;

class ExemplesDqlRepositoriesController extends AbstractController
{
    
    #[Route ("/exemples/dql/repositories/utilise/repo/livres/entre/deux/prix/{prixMin}/{prixMax}")]
    function utiliseRepoLivresEntreDeuxPrix (Request $req){
    
        $prixMin = $req->get("prixMin");
        $prixMax = $req->get("prixMax");
        
        $em = $this->getDoctrine()->getManager();
        $livresRepo = $em->getRepository(Livre::class);
        $livres = $livresRepo->livresEntreDeuxPrixDQL($prixMin, $prixMax);
        dump ($livres);
        die();
        
        // return new Response .....
    }

    
}
