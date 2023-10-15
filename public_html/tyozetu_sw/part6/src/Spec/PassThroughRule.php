<?php 
namespace PublicHtml\tyozetu_sw\part6\src\Spec;

use PublicHtml\tyozetu_sw\part6\src\Core\ReplaceRuleInterface;
 
class PassThroughRule implements ReplaceRuleInterface
{
  public function apply(string $carry, int $n): string
  {
    return (string)$n;
  }

  public function match(string $carry, int $n): bool
  {
    return $carry == "";
  }
}