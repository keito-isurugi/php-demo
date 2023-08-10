<?php 
	require '../vendor/autoload.php';
	use PublicHtml\codezine\oop\HogeOop;
	use App\src\Sample;
	use App\src\foo\FooSample;

	$message = "PHPで色々動かしてみたり!";
	echo $message."<br>";

	$hoge = new HogeOop("hello world!");
	echo $hoge->getGreet()."<br>";
	$hoge = new FooSample();
	echo $hoge->fooSample();