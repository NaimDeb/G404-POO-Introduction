<?php

class Chien extends Mammifere {


    private string $race;


    public function __construct($race)
    {
        $this-> race = $race;

    }



    public function crie() {
        echo "J'aboie";
        return $this;
    }



}
?>