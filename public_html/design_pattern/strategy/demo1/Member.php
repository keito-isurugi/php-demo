<?php 
class Member {
  private int $level;

  function __construct(int $level)
  {
    $this->level = $level;
  }

  function getLevel():int
  {
    return $this->level;
  }
}