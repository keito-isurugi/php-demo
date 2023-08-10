<?php	
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
use PublicHtml\design_pattern\strategy\demo2\fruits\Fruit;

$fruitClassMapping = [
    'orange' => 'PublicHtml\design_pattern\strategy\demo2\fruits\Orange',
    'apple' => 'PublicHtml\design_pattern\strategy\demo2\fruits\Apple',
    'grape' => 'PublicHtml\design_pattern\strategy\demo2\fruits\Grape',
    'none' => 'PublicHtml\design_pattern\strategy\demo2\fruits\NoneFruit',
];

function getFruitNameByUrlPath(){
    if(!isset($_GET['fruit'])) return 'none';
    return $_GET['fruit'];
}

function getFruitData($fruitClass){
    $fruitInstance = new $fruitClass;
    $fruitContext = new Fruit($fruitInstance);
    return $fruitContext->execute();
}

$fruitName = getFruitNameByUrlPath();
$fruitClass = $fruitClassMapping[$fruitName];
$fruitData = getFruitData($fruitClass);

?>

<?php
echo "<table border = '1'>";
echo "   <tr>";
echo "        <th>名前</th>";
echo "        <th>色</th>";
echo "        <th>好き or 嫌い</th>";
echo "        <th>人気順位</th>";
echo "        <th>カロリー</th>";
echo "    </tr>";
echo "    <tr>";
echo "        <th>$fruitData[name]</th>";
echo "        <th>$fruitData[color]</th>";
echo "        <th>$fruitData[has_like]</th>";
echo "        <th>$fruitData[order_of_popularity]</th>";
echo "        <th>$fruitData[calorie]</th>";
echo "    </tr>";
echo "</table>";
?>