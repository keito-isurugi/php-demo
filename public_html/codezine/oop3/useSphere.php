<?php
require_once("Circle.php");
require_once("Sphere.php");
 
$sphere = new Sphere(5);
$surface = $sphere->getSurfaceArea();
print("球の表面積: ".$surface);