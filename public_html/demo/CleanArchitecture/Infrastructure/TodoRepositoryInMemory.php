<?php
namespace PublicHtml\demo\CleanArchitecture\Infrastructure;

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use PDO;
use PublicHtml\demo\CleanArchitecture\Domain\Todo;
use PublicHtml\demo\CleanArchitecture\Domain\TodoRepository;
use PublicHtml\demo\CleanArchitecture\Infrastructure\Db\DbClient;

class TodoRepositoryInMemory implements TodoRepository
{
  private $dbConnection;
  private $todos = [];

  public function __construct(DbClient $dbConnection)
  {
      $this->dbConnection = $dbConnection->getDbConnect();
  }

  public function getListTodos()
  {
    $stmt = $this->dbConnection->prepare('SELECT * FROM todos');
    $res = $stmt->execute();

    if($res) {
      $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $todos;
  }
}
