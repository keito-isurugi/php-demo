<?php 
  require_once 'MagicType.php';
  require_once 'Magic.php';
  require_once 'Member.php';
  require_once 'Fire.php';
  require_once 'Siden.php';

  echo "ストラテジパターンで条件分岐";
  echo "<br>";

  $magics = [];
  $member = new Member(50);
  
  $file = new Fire($member);
  $siden = new Siden($member);
  
  $magics[MagicType::FIRE->name] = $file;

  function magicAttack(array $magics, MagicType $magic_type)
  {
    $usingMagic = $magics[$magic_type->name];
    return $usingMagic->attackPower();
  }

  echo magicAttack($magics, MagicType::FIRE);

  // $magics[MagicType::SIDEN] = $siden;
  
  // echo MagicType::FIRE;

  // enum MagicType {
  //   case FIRE;
  //   case SIDEN;
  //   case HELLFILE;
  // }
var_dump($magics); // enum(AccountStatus::FIRE)
// var_dump(MagicType::FIRE->name); // string(6) "Active"
// var_dump(MagicType::cases());
