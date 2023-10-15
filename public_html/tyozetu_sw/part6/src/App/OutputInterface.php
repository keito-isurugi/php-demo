<?php
namespace PublicHtml\tyozetu_sw\part6\src\App;

interface OutputInterface
{
  public function write(string $data): void;
}