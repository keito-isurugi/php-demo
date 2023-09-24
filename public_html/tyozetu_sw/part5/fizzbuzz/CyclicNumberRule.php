<?php
namespace PublicHtml\tyozetu_sw\part5\fizzbuzz;
use PublicHtml\tyozetu_sw\part5\fizzbuzz\ReplaceRuleInterface;

/**
 * 倍数に関するルール
 */
class CyclicNumberRule implements ReplaceRuleInterface
{
  public function __construct(
    protected int $base,
    protected string $replacement
  )
  {}

  public function match(string $carry, int $n): bool
  {
    return $n % $this->base == 0;
  }

  public function apply(string $carry, int $n): string
  {
    return $this->replacement;
  }
}
