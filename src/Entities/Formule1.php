<?php

class Formule1 {
    private int $speed = 0;

    // public function __construct($speed)
    // {
    //     $this -> speed = $speed;
        
    // }

    public function drive(){
        echo "Vroom vroom à " . $this->speed . "km/h <br>";
        return $this;
    }
    public function shiftGear(){
        $this->speed += 10;
        return $this;
    }
}

?>