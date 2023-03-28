<?php
# index.php

if(empty($_SERVER['REQUEST_URI'])) {
	exit;
}
// URLをスラッシュで分解
$array_parse_uri = explode('/', $_SERVER['REQUEST_URI']);
$last_uri = end($array_parse_uri); // 最後の文字を取り出す
$call = substr($last_uri, 0, strcspn($last_uri,'?'));   // クエリ文字列を外す

// app/controller/配下に同名のPHPファイルがないか探す。
if(file_exists('../app/controller/' . $call . '.php')) {
	// 見つかったファイルをインクルードしてコントローラーをインスタンス化
	include('../app/controller/' . $call . '.php');
	$class = 'app\controller\\' . $call;
	$obj   = new $class();
	
	if($_SERVER["REQUEST_METHOD"] != "POST"){
		// GETならindexメソッドを呼び出す
		$response = $obj->index();
	}else{
		// POSTならpostメソッドを呼び出す
		$response = $obj->post();
	}

	// コントローラーから戻された内容をレスポンスとして戻す。
	echo $response;
	exit;
}else{
	// ファイルがなければ404エラー
	header("https/1.0 404 Not Found");
	exit;
}