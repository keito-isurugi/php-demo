<?php
class SportsPlayer
{
	//名前のプロパティ。
	private $name;
	//コンストラクタ。名前プロパティに値をセットする。
	public function __construct(string $name)
	{
		$this->name = $name;
	}
	//名前プロパティのゲッタ。
	public function getName():string
	{
		return $this->name;
	}
}