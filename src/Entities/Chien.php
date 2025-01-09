<?php

class Chien extends Mammifere {


    private string $race;



    public function __construct(string $race, float $taille, int $age)
    {
        $this-> race = $race;
        $this->setTaille($taille);
        $this->setAge($age);
        


    }



    public function crie(): string
    {
        return "Je suis un {$this->race} et j'aboie";
    }



}
?>