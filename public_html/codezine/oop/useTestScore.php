<?php
require_once("TestScore.php");

// function printScore(TestScore $student): void
// {
// 	$sum = $student->math + $student->english + $student->japanese;
// 	$avg = $sum / 3;
// 	print($student->name."さんの合計: ".$sum." 平均: ".$avg."<br>");
// }

$taro = new TestScore("たろう", 87, 92, 74);
// $taro->name = "たろう";
// $taro->math = 87;
// $taro->english = 92;
// $taro->japanese = 74;
// printScore($taro);
// $taro->setData("たろう", 87, 92, 74);
$taro->printScore();

$hanako = new TestScore("はなこ", 95, 79, 83);
// $hanako->name = "はなこ";
// $hanako->math = 95;
// $hanako->english = 79;
// $hanako->japanese = 83;
// printScore($hanako);
// $hanako->setData("はなこ", 95, 79, 83);
$hanako->printScore();

$taroSum = $taro->calcSum();
//はなこさんの合計点を取得。
$hanakoSum = $hanako->calcSum();
//2人の合計の平均点を計算し、表示。
$ave2 = ($taroSum + $hanakoSum) / 2;
print("2人の合計の平均: ".$ave2);

//たろうさんの平均点を取得。
$taroAve = $taro->calcAve();
//はなこさんの平均点を取得。
$hanakoAve = $hanako->calcAve();
//2人の平均の平均点を計算し、表示。
$aveAve = ($taroAve + $hanakoAve) / 2;
print("<br>2人の平均の平均: ".$aveAve);