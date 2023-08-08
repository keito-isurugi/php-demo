<?php
abstract class AbstractAnimal
{
	private $name = "";
	
	public function getName(): string
	{
		return $this->name;
	}
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	abstract public function call(): string;
}