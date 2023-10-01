<?php
namespace PublicHtml\demo\CleanArchitecture\Infrastructure\Db;

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use PDO;

class DbClient
{
  public function getDbConnect() : PDO {
    $dsn = 'mysql:dbname=php-demo; host=db; charaset=utf8';
    $usr = 'test';
    $passwd = 'testtest';

    try {
      $db = new PDO($dsn, $usr, $passwd);
      return $db;
    } catch (PDOException $e) {
        throw new Exception("Database connection failed: " . $e->getMessage());
    }
  }
}