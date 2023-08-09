<?php
require_once "IMagic.php";
require_once "Member.php";

class Siden implements IMagic {
  public Member $member;

  function __construct(Member $member)
  {
    $this->member = $member;
  }

  public function name(): string
  {
    return "紫電";
  }

  public function costMagicPoint(): int
  {
    return 10;
  }

  public function attackPower(): int
  {
    return 100 + (int)$this->member->getLevel() * 0.8;
  }

  public function costTechnicalPoint(): int
  {
    return 2;
  }
}