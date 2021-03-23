<?php

namespace App\Services;

class ServiceBonjourMultiLangue {

    private string $langue;

    public function __construct (string $langue){
        $this->langue = $langue;
    }

    public function obtenirMessage (){
        $messages = ["fr" => "Les Wads sont vivantes!",
                    "en" => "Wads are alive!"];

        return $messages[$this->langue];
    }

}

