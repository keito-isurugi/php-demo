<?php
class InvokeController
{
	private $num = 1;

	public function __construct(int $num)
	{
		$this->num = $num;
	}

	public function __invoke(int $item): void
	{
		$ans = $item * $this->num;
		print($this->num."倍した値: ".$ans."<br>");
	}
}