<?php
require_once("Animal.php");
require_once("Dog.php");

$pet = new Dog();
$pet->setName("ぽち");
print($pet->getName()."の鳴き声は".$pet->call());