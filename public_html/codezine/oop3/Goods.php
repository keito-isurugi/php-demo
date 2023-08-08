<?php
class Goods
{
	private $name = "";
	private $price = 0;

	public function __construct(string $name, int $price)
	{
		$this->name = $name;
		$this->price = $price;
	}
	
	public function printPrice(): void
	{
		print($this->name."の価格: ￥".$this->price."<br>");
	}
	public function getName(): string
	{
		return $this->name;
	}
	public function getPrice(): int
	{
		return $this->price;
	}
	
}