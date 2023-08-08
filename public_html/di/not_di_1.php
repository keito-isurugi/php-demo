<?php
class Database {
  public function connect() {
      // データベースに接続するコード
  }
}

class Logger {
  public function log($message) {
      // ログを出力するコード
  }
}

class TodoRepository {
  private $database;
  private $logger;

  public function __construct() {
      $this->database = new Database();
      $this->logger = new Logger();
  }

  public function getAllTodos() {
      // $this->database を使用して全てのTodoを取得するコード
      $this->database->connect('全てのTodoを取得しました。');
      // 取得したTodoの配列を返す
      $this->logger->log('hogehoge');
    }
    
    public function saveTodo($todo) {
      // $this->database を使用してTodoを保存するコード
      $this->database->connect('Todoを保存しました。');
      $this->logger->log('foo');
  }
}

class TodoController {
  private $todoRepository;

  public function __construct() {
      $this->todoRepository = new TodoRepository();
  }

  public function index() {
      // $this->todoRepository を使用してTodo一覧を表示するコード
      $this->todoRepository->getAllTodos();
    }
    
    public function create($todo) {
      // $this->todoRepository を使用して新しいTodoを作成するコード
      $this->todoRepository->saveTodo($todo);
  }
}
