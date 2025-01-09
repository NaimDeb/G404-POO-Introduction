<?php

class Dog {
    // Propriété

    // public = accessible partout
    public $var1;
    // private = Pas le droit de changer, comme une constante. Mais on peut pas les afficher non plus (cannot access private property), on utilise les getters et setters pour ça
    private $var2;
    public $var3;

    // Méthode magique commence par __ 

    // __construct C'est comme les paramètres d'une fonction
    public function __construct(int $var1 ,string $var2,string $var3)
    {
        // Future instance de l'objet aura
        $this -> var1 = $var1 * 2;
        $this -> var2 = $var2;
        $this -> var3 = $var3;
    }


    // Méthodes Getters et Setters (on ne les prépare pas en avance)

    public function getVar1(){
        return $this -> var1;
    }

    public function setVar1($var){
        $this -> var1 = $var;
        return $this -> var1;
    }



    // Méthodes custom
    public function function() {}


}


 ?>