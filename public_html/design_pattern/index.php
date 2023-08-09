<?php 
class HogePoint {
  private $value;

  public function __construct($value) {
      $this->value = $value;
  }

  public function getValue() {
      return $this->value;
  }
}

interface Hoge {
  public function constHogePoint(): HogePoint;
}

class HogeUser implements Hoge {
  public function constHogePoint(): HogePoint {
      $hogeValue = 42; // 例として値を指定
      return new HogePoint($hogeValue);
  }
}

$hogeUser = new HogeUser();
$hogePoint = $hogeUser->constHogePoint();

echo "Hoge Point Value: " . $hogePoint->getValue() . "\n";
echo "<br>";
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="http://localhost:7005/public_html/design_pattern/strategy/demo1">ストラテジパターン DEMO1</a>
  <br>
  <a href="http://localhost:7005/public_html/design_pattern/strategy/demo2">ストラテジパターン DEMO2</a>
  <br>
</body>
</html>