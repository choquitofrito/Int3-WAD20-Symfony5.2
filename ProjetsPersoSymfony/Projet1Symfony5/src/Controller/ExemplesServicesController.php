<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\ServiceBonjour;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use App\Services\ServiceBonjourMultiLangue;

class ExemplesServicesController extends AbstractController
{
    private $objServiceBonjour;
    private $objLogger;

    public function __construct (ServiceBonjour $s, LoggerInterface $l, ServiceBonjourMultiLangue $ml){
        $this->objServiceBonjour = $s;
        $this->objLogger = $l;
        $this->objServiceBonjourMultiLangue = $ml;
        
    }

    #[Route('/exemples/services/exemple1')]
    public function exemple1(): Response
    {
        $this->objLogger->info ("Je suis dans exemple 1 dans le controller ExemplesServiceController");
        $vars = ['message' => $this->objServiceBonjour->obtenirMessage()];
        return $this->render('exemples_services/exemple1.html.twig', $vars);
    }


    #[Route('/exemples/services/exemple2')]
    public function exemple2(): Response
    {
        $vars = ['message' => $this->objServiceBonjourMultiLangue->obtenirMessage()];
        return $this->render('exemples_services/exemple2.html.twig', $vars);
    }

    #[Route('/exemples/services/exemple3')]
    public function exemple3(): Response
    {
        $vars = ['message' => $this->objServiceBonjour->obtenirMessage()];
        return $this->render('exemples_services/exemple3.html.twig', $vars);
    }


}
