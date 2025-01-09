<?php

class Formule1 {
    private int $speed = 0;

    // public function __construct($speed)
    // {
    //     $this -> speed = $speed;
        
    // }

    public function drive(): string
    {
        return "Vroom vroom à " . $this->speed . "km/h <br>";
        
    }
    public function shiftGear(): self
    {
        $this->speed += 10;
        return $this;
    }
}

?>