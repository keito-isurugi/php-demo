<?php
namespace PublicHtml\codezine\oop;

class HogeOop {
  private string $greet;

  function __construct($greet)
  {
    $this->greet = $greet;
  }

  function getGreet(): string
  {
    return $this->greet;
  }
}