<?php 
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use PublicHtml\tyozetu_sw\part5\ocp\NumberConvarter;
use PublicHtml\tyozetu_sw\part5\ocp\CyclicNumberRule;
use PublicHtml\tyozetu_sw\part5\ocp\PassThroughRule;

$fizzBuzz = new NumberConvarter([
  new CyclicNumberRule(3, "Fizz"),
  new CyclicNumberRule(5, "Buzz"),
  new CyclicNumberRule(15, "FizzBuzz"),
  new PassThroughRule(),
]);

for($i = 1; $i <= 100; $i++) {
  echo $fizzBuzz->convert($i);
  echo "<br>";
}