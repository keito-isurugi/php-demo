<?php 
  
  class Magic {
    private string $name;
    private int $costMagicPoint;
    private int $attackPower;
    private int $costTechnicalPoint;

    function __construct(MagicType $magicType, Member $member)
    {
      switch($magicType) {
        case MagicType::FIRE :
          $this->name = "ファイヤ";
          $this->costMagicPoint = 2;
          $this->attackPower = 5 + (int)$member->getLevel() * 0.5;
          $this->costTechnicalPoint = 0;
          break;
        case MagicType::SIDEN :
          $this->name = "紫電";
          $this->costMagicPoint = 10;
          $this->attackPower = 10 + (int)$member->getLevel() * 0.5;
          $this->costTechnicalPoint = 2;
          break;
        case MagicType::HELLFILE :
          $this->name = "地獄の業火";
          $this->costMagicPoint = 100;
          $this->attackPower = 100 + (int)$member->getLevel() * 0.8;
          $this->costTechnicalPoint = 10;
          break;
        default:
        throw new Exception("Invalid magic type");
      }
    }

    function getMagicName()
    {
      return $this->name;
    }

    function getMagicCostMagicPoint()
    {
      return $this->costMagicPoint;
    }

    function getMagicAttackPower()
    {
      return $this->attackPower;
    }

    function getMagicCostTechnicalPoint()
    {
      return $this->costTechnicalPoint;
    }

  }