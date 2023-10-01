<?php
namespace PublicHtml\demo\CleanArchitecture\Domain;

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';


use PublicHtml\demo\CleanArchitecture\Domain\Todo;

interface TodoRepository
{
  public function getListTodos();
}