<?php
namespace ValueObject;

class FruitColor {
  private string $fruitColor;

  private function __construct(string $fruitColor)
  {
    $this->fruitColor = $fruitColor;
  }

  public function getFruitColor()
  {
    return $this->fruitColor;
  }
}