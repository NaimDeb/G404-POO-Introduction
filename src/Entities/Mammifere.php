<?php

class Mammifere extends Animal {


    private float $taille;




    public function setTaille($taille){
        $this -> taille = $taille;
        return $this -> taille;
    }


    public function infoPlus() {
        return "Je suis un mammifère et je fais {$this-> taille}m de long <br>";
    }



}
?>