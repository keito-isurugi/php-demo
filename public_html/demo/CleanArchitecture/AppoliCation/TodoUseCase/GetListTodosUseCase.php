<?php
namespace PublicHtml\demo\CleanArchitecture\AppoliCation\TodoUseCase;

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';


use PublicHtml\demo\CleanArchitecture\Domain\Todo;
use PublicHtml\demo\CleanArchitecture\Domain\TodoRepository;

class GetListTodosUseCase
{
  private TodoRepository $todoRepository;

  public function __construct(TodoRepository $todoRepository)
  {
    $this->todoRepository = $todoRepository;
  }

  public function execute()
  {
    return $this->todoRepository->getListTodos();
  }
}
