<?php
require_once("GetNameTrait.php");
require_once("SportsPlayer.php");
require_once("DummyPlayer.php");
 
$namikawa = new DummyPlayer("波川茂雄");
$name = $namikawa->getName();  // (1)
print("お名前は? ".$name);