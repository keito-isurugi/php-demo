<?php
require_once('./Fruits/Fruit.php');
require_once('./Fruits/Orange.php');
require_once('./Fruits/Apple.php');
require_once('./Fruits/Grape.php');
require_once('./Fruits/NoneFruit.php');
use Fruits\Fruit;

$fruitClassMapping = [
    'orange' => 'Fruits\Orange',
    'apple' => 'Fruits\Apple',
    'grape' => 'Fruits\Grape',
    'none' => 'Fruits\NoneFruit',
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