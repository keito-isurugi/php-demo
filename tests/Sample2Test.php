<?php
use PHPUnit\Framework\TestCase;
use App\phpunitdemo\Sample2;

class Sample2Test extends TestCase
{
	public function testHello()
	{
		$sample = new Sample2();
		
		$result = $sample->hello();
		
		$this->assertEquals("Hello2", $result);
	}
}