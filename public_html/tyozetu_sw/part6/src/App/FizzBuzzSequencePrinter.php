<?php
namespace PublicHtml\tyozetu_sw\part6\src\App;

use PublicHtml\tyozetu_sw\part6\src\App\OutputInterface;
use PublicHtml\tyozetu_sw\part6\src\Core\NumberConverter;
use PublicHtml\tyozetu_sw\part6\src\Spec\CyclicNumberRule;
use PublicHtml\tyozetu_sw\part6\src\Spec\PassThroughRule;

class FizzBuzzSequencePrinter
{
  public function __construct(
    protected NumberConverter $fizzBuzz,
    protected OutputInterface $output
  ){}

  public function printRange(int $begin, int $end): void
  {
    $fizzBuzz = new NumberConverter([
      new CyclicNumberRule(3, "Fizz"),
      new CyclicNumberRule(5, "Buzz"),
      new PassThroughRule(),
    ]);

    for ($i = 0; $i <= $end; $i++) {
      printf("%d %s\n", $i, $fizzBuzz->convert($i));
      echo "<br>";
    }
  }
}