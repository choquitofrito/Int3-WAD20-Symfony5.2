<?php

namespace App\Services;

use Psr\Log\LoggerInterface;


class ServiceBonjour {

    private $logger;

    public function __construct (LoggerInterface $l){
        $this->logger = $l;
    }

    public function obtenirMessage (){
        
        $message = "Les Wads sont vivantes!";
        $this->logger->info("Les Wads sont carrement vivantes et sur le disque!");
        
        return $message;

    }

}

