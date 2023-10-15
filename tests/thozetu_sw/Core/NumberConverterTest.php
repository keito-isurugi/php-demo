<?php

use  PHPUnit\Framework\TestCase;
use  PublicHtml\tyozetu_sw\part6\src\Core\NumberConverter;
use  PublicHtml\tyozetu_sw\part6\src\Core\ReplaceRuleInterface;

class NumberConverterTest extends TestCase
{
  public function testConvertWithEmptyRules()
  {
    $fizzBuzz = new NumberConverter([]);
    $this->assertEquals("", $fizzBuzz->convert(1));
  }

  public function testConvertWithSingleRule()
  {
    $fizzBuzz = new NumberConverter([
      $this->createMockRule(
        expectedCarry: "",
        expectedNumber: 1,
        matchResult: true,
        replacement: "Replaced"
      ),
    ]);
    $this->assertEquals("Replaced", $fizzBuzz->convert(1));
  }

  public function testConvertCompositingRuleResults()
  {
    $fizzBuzz = new NumberConverter([
      $this->createMockRule(
        expectedCarry: "",
        expectedNumber: 1,
        matchResult: true,
        replacement: "Fizz"
      ),
      $this->createMockRule(
        expectedCarry: "Fizz",
        expectedNumber: 1,
        matchResult: true,
        replacement: "FizzBuzz"
      ),
    ]);
    $this->assertEquals("FizzBuzz", $fizzBuzz->convert(1));
  }

  public function testConvertSkippingUnmatchedRules()
  {
    $fizzBuzz = new NumberConverter([
      $this->createMockRule(
        expectedCarry: "",
        expectedNumber: 1,
        matchResult: false,
        replacement: "Fizz"
      ),
      $this->createMockRule(
        expectedCarry: "",
        expectedNumber: 1,
        matchResult: false,
        replacement: "Buzz"
      ),
      $this->createMockRule(
        expectedCarry: "",
        expectedNumber: 1,
        matchResult: true,
        replacement: "1"
      ),
    ]);
    $this->assertEquals("1", $fizzBuzz->convert(1));
  }

  private function createMockRule(
    string $expectedCarry,
    int $expectedNumber,
    bool $matchResult,
    string $replacement
  ): ReplaceRuleInterface {
    $rule = $this->createMock(ReplaceRuleInterface::class);

    $rule->expects($this->any())
      ->method('apply')
      ->with($expectedCarry, $expectedNumber)
      ->willReturn($replacement);

    $rule->expects($this->atLeastOnce())
      ->method('match')
      ->with($expectedCarry, $expectedNumber)
      ->willReturn($matchResult);

    return $rule;
  }
}

