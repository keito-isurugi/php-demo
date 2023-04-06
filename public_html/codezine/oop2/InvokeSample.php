<?php
class InvokeSample
{
	public function __invoke(string $name): string
	{
		return $name."さんこんにちは!";
	}
}