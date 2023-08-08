<?php
require_once 'vendor/autoload.php';

use DI\Container;
use DI\ContainerBuilder;

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

    public function __construct(Database $database, Logger $logger) {
        $this->database = $database;
        $this->logger = $logger;
    }

    public function getAllTodos() {
        // $this->database を使用して全てのTodoを取得するコード
        $this->logger->log('全てのTodoを取得しました。');
        // 取得したTodoの配列を返す
    }

    public function saveTodo() {
        // $this->database を使用してTodoを保存するコード
        $this->logger->log('Todoを保存しました。');
    }
}

class TodoController {
    private $todoRepository;

    public function __construct(TodoRepository $todoRepository) {
        $this->todoRepository = $todoRepository;
    }

    public function index() {
        // $this->todoRepository を使用してTodo一覧を表示するコード
    }

    public function create($todo) {
        // $this->todoRepository を使用して新しいTodoを作成するコード
    }
}

$containerBuilder = new ContainerBuilder();
$container = $containerBuilder->build();

$container->set(Database::class, function () {
    return new Database();
});

$container->set(Logger::class, function () {
    return new Logger();
});

$container->set(TodoRepository::class, function (Container $container) {
    return new TodoRepository(
        $container->get(Database::class),
        $container->get(Logger::class)
    );
});

$container->set(TodoController::class, function (Container $container) {
    return new TodoController(
        $container->get(TodoRepository::class)
    );
});

$todoController = $container->get(TodoController::class);
