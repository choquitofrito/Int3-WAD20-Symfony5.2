<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('accueil/home.html.twig');
    }

    #[Route('/home/erreur', name: 'homeErreur')]
    public function homeErreur(): Response
    {
        return $this->render('accueil/home_erreur.html.twig');
    }

    #[Route('/test/user')]
    public function testUser()
    {
        $leUser = $this->getUser();
        $leUser->setEmail("tururu@gmail.com");
        // $leUser->getEmprunts ()...
        $em = $this->getDoctrine()->getManager();
        $em->persist($leUser);
        $em->flush();

        dd($leUser);
    }

}
