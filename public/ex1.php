<?php 
require_once("../utils/autoloader.php");


$myFormule1 = new Formule1();

// echo $myFormule1->drive();
// $myFormule1->shiftGear();
// echo $myFormule1->drive(); 

echo $myFormule1->drive();
$myFormule1->shiftGear();
echo $myFormule1->drive();


require_once("../utils/btnExos.php")

?>

