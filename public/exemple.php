
<?php

require_once('../utils/autoloader.php');

// Classe
// Un objet doit rester pur, pas de check d'erreurs





// Instance

$dog1 = new Dog(16, "world", "!");
$dog2 = new Dog(12123, "world", "!");


var_dump($dog1);
$dog1->setVar1(23441);
var_dump($dog1);
var_dump($dog2);


?>


<!--  -->