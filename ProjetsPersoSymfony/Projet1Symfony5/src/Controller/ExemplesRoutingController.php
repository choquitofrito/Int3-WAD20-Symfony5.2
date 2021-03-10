<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request; 

use Symfony\Component\Routing\Annotation\Route;


class ExemplesRoutingController extends AbstractController
{
    #[Route('/exemples/routing/accueil')]
    public function afficherMessageAccueil():Response
    {
        return new Response("<html><body>Coucou</body></html>");
    }

    #[Route('/exemples/routing/afficher/contact/{prenom}/{profession}')]
    public function afficherContact(Request $request):Response{
        $prenom = $request->get ('prenom');
        $profession = $request->get('profession');
        return new Response ($prenom . "," . $profession);
    }




    // exercices
    #[Route('/exemples/routing/mon/action1')]
    public function monAction1()
    {
        return new Response ("Ce controller est en charge du répertoire de l'application et je suis juste une action à l'intérieur");
    }

    #[Route('/exemples/routing/mon/action2')]
    public function monAction2()
    {   
        $strDate = (new \DateTime())->format("Y/M/D h:i:s");
        return new Response ($strDate);
    }

}
