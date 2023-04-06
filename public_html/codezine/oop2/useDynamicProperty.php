<?php
require_once("DynamicProperty.php");
 
$dm = new DynamicProperty();
$dm->name = "田中";
$dm->english = 88;
$dm->math = 91;
$dm->japanese = 85;
 
$total = $dm->english + $dm->math + $dm->japanese;
print($dm->name."さんの3教科合計: ".$total);
print("<br>理科: ".$dm->science);