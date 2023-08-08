<?php
interface Message
{
	public function send();
}

class Slack implements Message
{
	public function send(){
		var_dump('something happens');
	}
}

class Mail implements Message
{
	public function send(){
		var_dump('something happens by mail');
	}
}

class MyClass
{
	public $slack;
	public $message;

	// public function __construct(Slack $slack){
	// 	// $this->slack = new Slack();
	// 	$this->slack = $slack;
	// }
	public function __construct(Message $message){
		$this->message = $message;
	}

	// public function set(Slack $slack)
	// {
	// 	$this->slack = $slack;
	// }


	public function run()
	{
		// $this->slack->send();
		$this->message->send();
	}
}

// $myclass = new MyClass(new Slack());
// $myclass = new MyClass();
// $myclass->set(new Slack());
// $myclass->run();


$myclass = new MyClass(new Mail());
$myclass->run();

$myclass = new MyClass(new Slack());
$myclass->run();