<?php
require_once("AnimalInterface.php");
require_once("Pig.php");
require_once("Tiger.php");
 
function invokeAnimal(AnimalInterface $animal) {
    print($animal->getName()."の鳴き声は".$animal->call()."<br>");
}
 
$pig = new Pig();
$tiger = new Tiger();
 
invokeAnimal($pig);
invokeAnimal($tiger);