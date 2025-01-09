<?php

class Animal {

    private int $age;


    public function __construct($age)
    {
        $this-> age = $age;

    }

    public function info(){
        echo "Je suis un animal";
        return $this;
    }

};






?>