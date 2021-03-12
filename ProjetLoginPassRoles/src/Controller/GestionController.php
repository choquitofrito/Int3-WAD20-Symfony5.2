<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionController extends AbstractController
{
    // ces routes sont accessibles uniquement pour certains roles
    // car on l'a fixé dans security.yaml. 
    #[Route("/gestion/action1")]
    public function action1()
    {
        return $this->render('gestion/action1.html.twig');
    }
    #[Route("/gestion/action2")]
    public function action2()
    {
        return $this->render('gestion/action2.html.twig');
    }
}
