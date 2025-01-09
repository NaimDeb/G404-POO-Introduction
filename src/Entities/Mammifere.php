<?php

class Mammifere extends Animal {


    private int $taille;


    public function __construct($taille)
    {
        $this-> taille = $taille;

    }


    public function infoPlus() {
        echo "Je suis un mammifère mgl";
        return $this;
    }



}
?>