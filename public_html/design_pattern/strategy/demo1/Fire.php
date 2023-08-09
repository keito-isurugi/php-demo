<?php
require_once "IMagic.php";
require_once "Member.php";

class Fire implements IMagic {
  public Member $member;

  function __construct(Member $member)
  {
    $this->member = $member;
  }

  public function name(): string
  {
    return "ファイヤ";
  }

  public function costMagicPoint(): int
  {
    return 2;
  }

  public function attackPower(): int
  {
    return 5 + (int)$this->member->getLevel() * 0.5;
  }

  public function costTechnicalPoint(): int
  {
    return 0;
  }
}