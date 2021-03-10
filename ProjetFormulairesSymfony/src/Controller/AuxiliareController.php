<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Genre;

class AuxiliareController extends AbstractController
{
    
    #[Route ("/auxiliaire/rajouter/genre/{nom}/{description}")]
    public function rajouterGenre (Request $req){
        $em = $this->getDoctrine()->getManager();
        $genre = new Genre();
        $genre->setNom ($req->get ("nom"));
        $genre->setDescription($req->get ("description"));
        
        $em->persist($genre);
        $em->flush();
        
        
        return new Response ("ok");
    }
    
    
  
    
    
    
}
