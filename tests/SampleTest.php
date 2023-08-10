<?php
use PHPUnit\Framework\TestCase;
use App\src\Sample;

class SampleTest extends TestCase
{
	public function testHello()
	{
		$sample = new Sample();
		
		$result = $sample->hello();
		
		$this->assertEquals("Hello", $result);
	}
}