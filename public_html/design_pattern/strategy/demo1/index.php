<?php 
  require_once 'MagicType.php';
  require_once 'Magic.php';
  require_once 'Member.php';

  echo "switchで条件分岐";
  echo "<br>";

  $menber = new Member(50);

  $file_type_atack = new Magic(MagicType::FIRE, $menber);
  echo "属性：".$file_type_atack->getMagicName()."<br>";
  echo "魔法ポイント消費量：".$file_type_atack->getMagicCostMagicPoint()."<br>";
  echo "攻撃力：".$file_type_atack->getMagicAttackPower()."<br>";
  echo "スキルポイント消費量：".$file_type_atack->getMagicCostTechnicalPoint()."<br>";

  echo "====================<br>";

  $siden_type_atack = new Magic(MagicType::SIDEN, $menber);
  echo "属性：".$siden_type_atack->getMagicName()."<br>";
  echo "魔法ポイント消費量：".$siden_type_atack->getMagicCostMagicPoint()."<br>";
  echo "攻撃力：".$siden_type_atack->getMagicAttackPower()."<br>";
  echo "スキルポイント消費量：".$siden_type_atack->getMagicCostTechnicalPoint()."<br>";

  echo "====================<br>";

  $hell_file_type_atack = new Magic(MagicType::HELLFILE, $menber);
  echo "属性：".$hell_file_type_atack->getMagicName()."<br>";
  echo "魔法ポイント消費量：".$hell_file_type_atack->getMagicCostMagicPoint()."<br>";
  echo "攻撃力：".$hell_file_type_atack->getMagicAttackPower()."<br>";
  echo "スキルポイント消費量：".$hell_file_type_atack->getMagicCostTechnicalPoint()."<br>";