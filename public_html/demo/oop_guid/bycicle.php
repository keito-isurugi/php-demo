<?php 

class Gear {
  private $chainring;
  private $cog;
  private $wheel;

  function __construct($chainring, $cog, Wheel $wheel)
  {
    $this->setChainring($chainring);
    $this->setCog($cog);
    $this->setWheel($wheel);
  }

  public function getChainring()
  {
    return $this->chainring;
  }
  
  public function getCog()
  {
    return $this->cog;
  }

  public function setChainring($chainring)
  {
    $this->chainring = $chainring;
  }

  public function setCog($cog)
  {
    $this->cog = $cog;
  }

  public function getWheel()
  {
    return $this->wheel;
  }
  
  public function setWheel($wheel)
  {
    $this->wheel = $wheel;
  }

  

  public function raito()
  {
    return $this->getChainring() / $this->getCog();
  }

  public function diameter() 
  {
    return $this->getWheel()->diameter();
  }

  public function gearInches()
  {
    return $this->raito() * $this->diameter();
  }

}

class Wheel {
  private $rim;
  private $tire;

  function __construct($rim, $tire)
  {
    $this->setRim($rim);
    $this->setTire($tire);
  }

  public function getRim()
  {
    return $this->rim;
  }
  
  public function getTire()
  {
    return $this->tire;
  }

  public function setRim($rim)
  {
    $this->rim = $rim;
  }

  public function setTire($tire)
  {
    $this->tire = $tire;
  }

  public function diameter()
  {
    return $this->getRim() * ($this->getTire() * 2);
  }
}


$gear1 = new Gear(52, 11, new Wheel(26, 1.5));
echo $gear1->gearInches();
// echo "<br>";
// $gear2 = new Gear(30, 27);
// echo $gear2->raito();
