<?php
require "../../db.php";

echo "クリーンアーキテクチャ";

// 取得
$db = getDb();
$stmt = $db->prepare('SELECT * FROM todos');
$res = $stmt->execute();
if($res) {
  $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>


<div>
	<?php foreach($todos as $todo) { ?>
		<div>
			<span>No: <?php echo $todo['id'] ?>　</span>
			<span>name: <?php echo $todo['title'] ?>　</span>
			<span>email: <?php echo $todo['content'] ?>　</span>
		</div>
	<?php } ?>
</div>