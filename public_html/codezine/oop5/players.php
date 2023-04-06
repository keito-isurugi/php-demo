<?php
require_once("HitTrait.php");
require_once("ThrowTrait.php");
require_once("SportsPlayer.php");
require_once("TennisPlayer.php");
require_once("HandballPlayer.php");
require_once("BaseballPlayer.php");
 
$nakano = new TennisPlayer("中野大輔");
$nakano->hit();
$nakatani = new HandballPlayer("中谷秀樹");
$nakatani->throw();
$nakagami = new BaseballPlayer("中上隆");
$nakagami->hit();
$nakagami->throw();