<?php

use PHPUnit\Framework\TestCase;
use  PublicHtml\tyozetu_sw\part6\Math;
use  PublicHtml\tyozetu_sw\part6\MathUtil;

class MathUtilTest extends TestCase {
  public function testSaturate(): void
  {
    $math = $this->createMock(Math::class);
    $mathUtil = new MathUtil($math);

    // 少なくとも1回maxが引数2, 1で呼ばれて、2を返す
    $math->expects($this->atLeastOnce())
      ->method('max')
      ->with($this->equalTo(2), $this->equalTo(1))
      ->willReturn(2);

    // 少なくとも1回minが引数2, 3で呼ばれて、2を返す
    $math->expects($this->atLeastOnce())
      ->method('min')
      ->with($this->equalTo(2), $this->equalTo(3))
      ->willReturn(2);

    $result = $mathUtil->saturate(2, 1, 3);
    $this->assertEquals(2, $result);

  }
}