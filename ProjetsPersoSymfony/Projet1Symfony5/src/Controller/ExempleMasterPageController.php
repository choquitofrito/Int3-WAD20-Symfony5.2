<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExempleMasterPageController extends AbstractController
{
    #[Route('/exemple/master/page/contenu1')]
    function exempleMasterPageContenu1(): Response
    {
        return $this->render("exemple_master_page/contenu_1.html.twig");
    }

    #[Route("/exemples/twig/heritage/contenu1/master/page2")]
    public function contenu1MasterPage2()
    {
        return $this->render('exemple_master_page/contenu_1_master_page_2.html.twig');
    }

    #[Route("/exemples/twig/heritage/contenu2/master/page2")]
    public function contenu2MasterPage2()
    {
        return $this->render('exemple_master_page/contenu_2_master_page_2.html.twig');
    }

}
