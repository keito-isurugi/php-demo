<?php
namespace PublicHtml\tyozetu_sw\part5\ocp;

use PublicHtml\tyozetu_sw\part5\ocp\ReplaceRuleInterface;

/**
 * 変換条件に該当しない場合のルール
 */
class PassThroughRule implements ReplaceRuleInterface
{
  public function match(string $carry, int $n): bool
  {
    return $carry = "";
  }

  public function apply(string $carry, int $n): string
  {
    return (string)$n;
  }
}