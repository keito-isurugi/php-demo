<?php
require_once("AbstractAnimal.php");
require_once("Dog.php");
require_once("Cat.php");
 
$pet = new Dog();
$pet->setName("ぽち");
print($pet->getName()."の鳴き声は".$pet->call());

$pet2 = new Cat();
$pet2->setName("tama");
print($pet2->getName()."の鳴き声は".$pet2->call());
// $animal = new AbstractAnimal();