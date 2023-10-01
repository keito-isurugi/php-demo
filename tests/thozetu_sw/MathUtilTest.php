<?php

use PHPUnit\Framework\TestCase;
use  PublicHtml\tyozetu_sw\part6\Math;
use  PublicHtml\tyozetu_sw\part6\MathUtil;

class MathUtilTest extends TestCase {
  public function testSaturate(): void
  {
    $mathUtil = new MathUtil();

    $this->assertEquals(2, $mathUtil->saturate(2, 1, 3));

    $this->assertEquals(1, $mathUtil->saturate(0, 1, 3));
    $this->assertEquals(3, $mathUtil->saturate(4, 1, 3));

    $this->assertEquals(1, $mathUtil->saturate(1, 1, 3));
    $this->assertEquals(3, $mathUtil->saturate(3, 1, 3));
  }
}