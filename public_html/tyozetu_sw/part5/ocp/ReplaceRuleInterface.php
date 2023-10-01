<?php
namespace PublicHtml\tyozetu_sw\part5\ocp;

interface ReplaceRuleInterface
{
  public function match(string $carry, int $n): bool;
  public function apply(string $carry, int $n): string;
}