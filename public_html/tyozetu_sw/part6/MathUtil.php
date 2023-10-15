<?php
namespace PublicHtml\tyozetu_sw\part6;

use  PublicHtml\tyozetu_sw\part6\Math;

class MathUtil {
  public function __construct(protected Math $math){}

  public function saturate(int $value, int $minValue, int $maxValue): int
  {
    return $this->math->min($this->math->max($value, $minValue), $maxValue);
  }
}