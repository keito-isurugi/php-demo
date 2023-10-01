<?php 
	require_once '../db.php';
	phpinfo();
	// 取得
	$db = getDb();
	$stmt = $db->prepare('SELECT * FROM users');
	$res = $stmt->execute();
	if($res) {
		$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// 登録
	if( !empty($_POST['name']) ) {
		$db = getDb();
		// $stmt = $db->prepare('INSERT INTO users (name, email) VALUES(:name, :email)');
		// $stmt->bindParam( ':name', $_POST['name'], PDO::PARAM_STR);
		// $stmt->bindParam( ':email', $_POST['email'], PDO::PARAM_STR);
		// $stmt = $db->prepare('INSERT INTO users (name, email) VALUES('.$_POST['name'].','.$_POST['email'].');');
		$stmt = $db->prepare('INSERT INTO users (name, email) VALUES("'.$_POST['name'].'", "'.$_POST['email'].'")');
		$res = $stmt->execute();
		

	
		if($res) {
			$stmt = null;
			header('Location: ./sql_injection.php');
			exit;
		}
	}

?>

<form action="" method="POST">
	<label for="name">name</label>
	<input id="name" type="text" name="name">
	<label for="email">email</label>
	<input id="email" type="email" name="email">
	<button>送信</button>
</form>
<div>
	<?php foreach($users as $user) { ?>
		<div>
			<span>No: <?php echo $user['id'] ?>　</span>
			<span>name: <?php echo $user['name'] ?>　</span>
			<span>email: <?php echo $user['email'] ?>　</span>
		</div>
	<?php } ?>
</div>