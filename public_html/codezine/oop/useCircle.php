<?php
require_once("Circle.php");
 
//Circleインスタンスを生成。半径として11を渡す。
$circle = new Circle(11);
//Circleインスタンスのメソッドを使って円周と円の面積を取得。
$circuit = $circle->getCircuit();
$area = $circle->getArea();
//取得した円周と円の面積を表示。
print("半径11の円周は".$circuit."で円の面積は".$area."です<br>");
//Circleクラスの定数を表示。
print("円周率は".Circle::PI."で計算しています");  //（1）