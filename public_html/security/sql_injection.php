<?php 
	require_once '../db.php';
	
	// 取得
	$db = getDb();
	$stmt = $db->prepare('SELECT * FROM users WHERE id ='.$_POST['id']);
	$res = $stmt->execute();
	if($res) {
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
	}

	// DELETE
	// delete from users where id = 1;
	
?>

<form action="" method="POST">
	<label for="id">id</label>
	<input id="id" type="text" name="id">
	<button>送信</button>
</form>
<div>
	<div>
		<span>No: <?php echo $user['id'] ?>　</span>
		<span>name: <?php echo $user['name'] ?>　</span>
		<span>email: <?php echo $user['email'] ?>　</span>
	</div>
</div>