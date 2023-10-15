<?php
namespace PublicHtml\tyozetu_sw\part6\src;

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use PublicHtml\tyozetu_sw\part6\src\FizzBuzzAppFactory;

class App
{
  public static function main(): void
  {
    $factory = new FizzBuzzAppFactory();
    $printer = $factory->create();
    $printer->printRange(1, 100);
  }
}
App::main();