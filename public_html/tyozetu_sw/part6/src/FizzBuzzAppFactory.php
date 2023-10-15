<?php
namespace PublicHtml\tyozetu_sw\part6\src;

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use PublicHtml\tyozetu_sw\part6\src\App\FizzBuzzSequencePrinter;
use PublicHtml\tyozetu_sw\part6\src\App\OutputInterface;
use PublicHtml\tyozetu_sw\part6\src\Core\ReplaceRuleInterface;
use PublicHtml\tyozetu_sw\part6\src\Core\NumberConverter;
use PublicHtml\tyozetu_sw\part6\src\Spec\CyclicNumberRule;
use PublicHtml\tyozetu_sw\part6\src\Spec\PassThroughRule;

class FizzBuzzAppFactory
{
  public function create(): FizzBuzzSequencePrinter
  {
    return new FizzBuzzSequencePrinter(
      $this->createFizzBuzz(),
      $this->createOutput()
    );
  }

  protected function createFizzBuzz(): NumberConverter
  {
    return new NumberConverter([
      $this->createFizzRule(),
      $this->createBuzzRule(),
      $this->createPassThroughtRule()
    ]);
  }

  protected function createFizzRule(): ReplaceRuleInterface
  {
    return new CyclicNumberRule(3, "Fizz");
  }

  protected function createBuzzRule(): ReplaceRuleInterface
  {
    return new CyclicNumberRule(5, "Buzz");
  }

  protected function createPassThroughtRule(): ReplaceRuleInterface
  {
    return new PassThroughRule();
  }
  
  protected function createOutput(): OutputInterface
  {
    return new ConsoleOutput();
  }

}

class ConsoleOutput implements OutputInterface
{
  public function write(string $data): void
  {
    echo $data;
  }
}