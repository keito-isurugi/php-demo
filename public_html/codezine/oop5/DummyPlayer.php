<?php
class DummyPlayer extends SportsPlayer
{
  use GetNameTrait;

	public function getName():string
	{
		return "私は他でもない私だ!";
	}
}