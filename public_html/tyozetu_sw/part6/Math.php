<?php
namespace PublicHtml\tyozetu_sw\part6;

class Math {
  public function min(int $a, int $b): int
  {
    return $a < $b ? $a : $b;
  }

  public function max(int $a, int $b): int
  {
    return $a > $b ? $a : $b;
  }
}