<?php
class Pig implements AnimalInterface
{
	public function getName(): string
	{
		return "とんちゃん";
	}

	public function call(): string
	{
		return "ぶうぶう";
	}

	public function eat(): void
	{
		print("おいしいよ!");
	}
}