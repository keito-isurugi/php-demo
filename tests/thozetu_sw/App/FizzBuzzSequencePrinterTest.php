<?php 

use PHPUnit\Framework\TestCase;
use  PublicHtml\tyozetu_sw\part6\src\Core\NumberConverter;
use  PublicHtml\tyozetu_sw\part6\src\App\FizzBuzzSequencePrinter;
use  PublicHtml\tyozetu_sw\part6\src\App\OutputInterface;

class FizzBuzzSequencePrinterTest extends TestCase
{
  public function TestPrintNone(): void
  {
    $converter = $this->createMock(NumberConverter::class);
    $converter->expects($this->never())->method('convert');

    $output = $this->createMock(OutputInterface::class);
    $output->expects($this->never())->method('write');

    $printer = new FizzBuzzSequencePrinter($converter, $output);
    $printer->printRange(0, -1);
  }

  public function TestPrint1To3(): void
  {
    $converter = $this->createMock(NumberConverter::class);
    $converter->expects($this->exactly(3))->method('convert')
      ->will($this->returnValueMap([1, "1"], [2, "2"], [3, "Fizz"]));

    $output = $this->createMock(OutputInterface::class);
    $output->expects($this->never())->method('write')
      ->willConsecutive([1, "1\n"], [2, "2\n"], [3, "Fizz\n"]);

    $printer = new FizzBuzzSequencePrinter($converter, $output);
    $printer->printRange(1, 3);
  }
}