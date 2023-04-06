<?php 
function concatenate(string ...$name): string
{
	$concatenatedName = "";
	// echo "<pre>";
	// var_dump($name);
	// echo "</pre>";
	for($i = 0; $i < count($name); $i++) {
		$concatenatedName .= $name[$i];
		if($i != count($name) - 1) {
			$concatenatedName .= "・";
		}
	}
	return $concatenatedName;
}
 
// $lName = "齊藤";
// $fName = "新三";
// $name1 = concatenate($fName, $lName);
// print("結合結果: ".$name1);
// $picasso = concatenate("パブロ", "ディエゴ", "ホセ", "フランシスコ", "デ", "パウラ", "ファン", "ネポムセーノ", "マリア", "デ", "ロス", "レメディオス", "シプリアノ", "デ", "ラ", "サンティシマ", "トリニダード", "ルイス", "ピカソ");
// print("<br>ピカソの本名: ".$picasso);

function concatenateSpace(string $firstName, string $lastName): string
{
  return $lastName." ".$firstName;
}
 
function concatenateDot(string $firstName, string $lastName): string
{
  return $lastName."・".$firstName;
}

$lName = "齊藤";
$fName = "新三";
$funcNameList = ["concatenateSpace", "concatenateDot"];
// foreach($funcNameList as $funcName) {
//     $name = $funcName($fName, $lName);
//     print($funcName."関数での結合結果: ".$name."<br>");
// }

$hoge = "concatenateSpace";
// $name = $hoge($fName, $lName);
// print($hoge."関数での結合結果: ".$name."<br>");

// function useConcatenate(array $name, callable $func)
// {
// 	$concatName = $func(...$name);
// 	print($func."関数での結合結果: ".$concatName."<br>");
// }
 
$nameParam = ["新三", "齊藤"];
// useConcatenate($nameParam, "concatenateSpace");
// useConcatenate($nameParam, $hoge);


function useConcatenate(array $name, callable $func)
{
    $concatName = $func(...$name);
    print("無名関数での結合結果: ".$concatName."<br>");
}
// useConcatenate($nameParam, function(string $firstName, string $lastName): string
// 	{
// 			return $lastName." ".$firstName;
// 	}
// );

$concat1 = function(string $firstName, string $lastName): string
{
  return $lastName." ".$firstName;
};

useConcatenate($nameParam, $concat1);

$concat2 = function() use ($fName, $lName): string
{
  return $lName." ".$fName;
};
$concatName2 = $concat2();
print("無名関数とuseを使っての結合結果: ".$concatName2."<br>");