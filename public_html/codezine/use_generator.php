<?php
function yieldValues()
{
	$num = 8;
	$ans = $num * 3;
	yield $ans;
	$ans = $num * 5;
	yield $ans;
	$ans = $num * 7;
	yield $ans;
}
 
$values = yieldValues();
foreach($values as $value) {
    print($value."<br>");
}
var_dump($values);
echo "<br>";

$array = [1, 3, 5, 7];
// foreach($array as $value) {
// 	$ans = $value * 8;
// 	print($ans."<br>");
// }

function yieldArrayElement()
{
	$array = [1, 3, 5, 7];
	foreach($array as $element) {
		yield $element;
	}
}
 
// foreach(yieldArrayElement() as $value) {
// 	$ans = $value * 8;
// 	print($ans."<br>");
// }


// 全部の値が格納された配列を用意する必要がある
function createRandArray(int $count): array
{
	$array = [];
	for($i = 1; $i <= $count; $i++) {
		$array[] = rand(1, 10);
	}
	return $array;
}
 
// $sum = 0;
// foreach(createRandArray(10) as $value) {
// 	print("現在の乱数: ".$value."<br>");
// 	$sum += $value;
// }
// print("乱数の合計: ".$sum);


// 全部の値が格納された配列を用意する必要がなくなりメモリの節約となる
function randGenerator($count)
{
	for($i = 1; $i <= $count; $i++) {
		yield rand(1, 10);
	}
}
 
// $sum = 0;
// foreach(randGenerator(10) as $value) {
// 	print("現在の乱数: ".$value."<br>");
// 	$sum += $value;
// }
// print("乱数の合計: ".$sum);


function randGenerator2($count)
{
	for($i = 1; $i <= $count; $i++) {
		yield $i => rand(1, 10);
	}
}
 
// $sum = 0;
// foreach(randGenerator2(10) as $num => $value) {
// 	print($num."個目の乱数: ".$value."<br>");
// 	$sum += $value;
// }
// print("乱数の合計: ".$sum);


function categoryGenerator()
{
	yield "性別";
	yield from genderGenerator();
	yield "職業";
	yield from jobGenerator();
}
 
function genderGenerator()
{
	yield "男";
	yield "女";
}
 
function jobGenerator()
{
	yield "会社員";
	yield "自営業";
	yield "無職";
}
 
foreach(categoryGenerator() as $value) {
	print($value."<br>");
}