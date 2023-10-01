<?php
namespace PublicHtml\demo\CleanArchitecture\Domain;

class Todo
{
  private int $id;
  private string $title;
  private string $content;

  public function __construct(int $id, string $title, string $content)
  {
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;
  }

  // ゲッターとセッターを追加することができます
}