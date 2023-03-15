<?php 
	require_once 'db.php';

	$db = getDb();
	$stmt = $db->prepare('SELECT * FROM users');
	$res = $stmt->execute();
	if($res) {
		$users = $stmt->fetch();
		var_dump($users);
	}

 ?>