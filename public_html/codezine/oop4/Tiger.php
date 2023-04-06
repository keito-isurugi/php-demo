<?php
class Tiger implements AnimalInterface
{
	public function getName(): string
	{
		return "とらお";
	}

	public function call(): string
	{
		return "がお～";
	}

	public function eat(): void {}
 
}