<?php 
require_once("StaticMembers.php");
 
// $staticA = new StaticMembers(); 
// $staticB = new StaticMembers(); 
 
// $staticA->countUp(10); 
// print("staticAのstNum: ".$staticA::$stNum." num: ".$staticA->num); 
// $staticB->countUp(5); 
// print("<br>staticBのstNum: ".$staticB::$stNum." num: ".$staticB->num); 
// print("<br>stNum: ".StaticMembers::$stNum); 

$ans = StaticMembers::getRandNum(20); 
print("1回目の結果: ".$ans."(プロパティの値".StaticMembers::$stNum.")"); 
$ans = StaticMembers::getRandNum(15); 
print("<br>2回目の結果: ".$ans."(プロパティの値".StaticMembers::$stNum.")"); 