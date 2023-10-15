<?php

use  PHPUnit\Framework\TestCase;
use  PublicHtml\tyozetu_sw\part6\src\Core\NumberConverter;
use  PublicHtml\tyozetu_sw\part6\src\Spec\CyclicNumberRule;
use  PublicHtml\tyozetu_sw\part6\src\Spec\PassThroughRule;

class FizzBuzzTest extends TestCase
{
  public function testFizzBuzz()
  {
    $fizzBuzz = new NumberConverter([
      new CyclicNumberRule(3, "Fizz"),
      new CyclicNumberRule(5, "Buzz"),
      new PassThroughRule(),
    ]);
    $this->assertEquals("1", $fizzBuzz->convert(1));
    $this->assertEquals("2", $fizzBuzz->convert(2));
    $this->assertEquals("Fizz", $fizzBuzz->convert(3));
  }
}