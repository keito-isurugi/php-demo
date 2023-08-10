<?php
// tests/FruitTest.php

use PublicHtml\design_pattern\strategy\demo2\fruits\Orange;
use PublicHtml\design_pattern\strategy\demo2\fruits\Fruit;
use PHPUnit\Framework\TestCase;

class FruitTest extends TestCase {
    public function testOrangeFruit() {
        $orange = new Orange();

        $this->assertEquals('みかん', $orange->getName());
        $this->assertEquals('orange', $orange->getColor());
        $this->assertEquals('好き', $orange->getHasLike());
        $this->assertEquals(1, $orange->getOrderOfPopularity());
        $this->assertEquals(100, $orange->getCalorie());
    }

    public function testFruitExecution() {
        $orange = new Orange();
        $fruitContext = new Fruit($orange);

        $expectedParams = [
            'name' => 'みかん',
            'color' => 'orange',
            'has_like' => '好き',
            'order_of_popularity' => 1,
            'calorie' => 100
        ];

        $this->assertEquals($expectedParams, $fruitContext->execute());
    }
}
