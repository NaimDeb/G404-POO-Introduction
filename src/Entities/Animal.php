<?php

// Classe qui a pour seul but de faire de l'héritage     
abstract class Animal {

    private int $age;


    public function setAge($age){
        $this -> age = $age;
        return $this -> age;
    }

    public function info(): string{
        return "Je suis un animal de {$this->age} années <br>";
    }

};






?>