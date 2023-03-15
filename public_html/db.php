<?php
function getDb() : PDO {
  $dsn = 'mysql:dbname=php-demo; host=db; charaset=utf8';
  $usr = 'test';
  $passwd = 'testtest';

  $db = new PDO($dsn, $usr, $passwd);
  return $db;
}

try {
  print '接続に成功しました';
} catch (PDOException $e) {
  die("接続エラー： {$e->getMessage()} ");
} finally {
  $db = null;
}
