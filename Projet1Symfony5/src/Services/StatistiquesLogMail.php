<?php

// src/Services/StatistiquesLogMail.php
namespace App\Services;

use Psr\Log\LoggerInterface;
use Swift_Mailer;

class StatistiquesLogMail {
   
    private $logger;
    private $mailer;
    private $adresse;
    
    function __construct (LoggerInterface $logger, Swift_Mailer $mailer, $adresse){
        $this->logger = $logger;
        $this->mailer = $mailer;
        $this->adresse = $adresse;
    }
        
    function permutations($items, $perms = array( )) {
        if (empty($items)) {
            $res = array($perms);
        }  else {
            $res = array();
            for ($i = count($items) - 1; $i >= 0; --$i) {
                 $newitems = $items;
                 $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
                 array_unshift($newperms, $foo);
                 $res = array_merge($res, $this->permutations($newitems, $newperms));
             }
        }
        // on utilise le service de log
        $this->logger->info ("De permutations ont été calculées");
        // on envoie un mail
        $message = (new \Swift_Message)
                ->setTo ($this->adresse);
        // on doit envoyer ici le mail après avoir configuré le service
        // https://symfony.com/doc/current/email.html#configuration
        // dump ($message);
        // die();
        return $res;
    }
}
