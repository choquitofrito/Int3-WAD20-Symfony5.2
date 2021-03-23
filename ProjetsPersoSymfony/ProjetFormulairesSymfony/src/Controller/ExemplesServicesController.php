<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ExemplesServicesController extends AbstractController
{
    #[Route('/exemples/services/exemple1')]
    public function exemples1(LoggerInterface $monLogger): Response
    {
        $monLogger->info("Coucou");
        $monLogger->error("Voici une erreur Coucou");
        
        return $this->render('exemples_services/exemple1.html.twig');
    }

    #[Route('/exemples/services/exemple/session/set')]
    public function exempleSessionSet(SessionInterface $s): Response
    {
        // enregistrer la valeur dans la session
        $s->set ('message',"Je suis un message dans la session");
        return $this->render('exemples_services/exemple_session_set.html.twig');
    }


    #[Route('/exemples/services/exemple/session/get')]
    public function exempleSessionGet(SessionInterface $s): Response
    {
        // obtenir de la session et afficher
        dd ("Valeur dans la session: " . $s->get ('message'));
        // return $this->render('exemples_services/exemple_session_set.html.twig');
    }

}
