<?php
class StaticMembers
{
	public static $stNum = 0;
	public $num = 0;

	public function countUp(int $plus):void
	{
		self::$stNum += $plus;
		$this->num += $plus;
	}

	public static function getRandNum(int $init): int
	{
		self::$stNum += $init;
		$rand = rand(1, 100);
		$ans = $rand * self::$stNum;
		return $ans;
	}
}