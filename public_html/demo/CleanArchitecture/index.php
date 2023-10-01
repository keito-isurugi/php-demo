<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use PublicHtml\demo\CleanArchitecture\Infrastructure\Db\DbClient;
use PublicHtml\demo\CleanArchitecture\Infrastructure\TodoRepositoryInMemory;
use PublicHtml\demo\CleanArchitecture\AppoliCation\TodoUseCase\GetListTodosUseCase;

$dbClient = new DbClient();
$todoRepository = new TodoRepositoryInMemory($dbClient);
$getListTodoUseCase = new GetListTodosUseCase($todoRepository);

$todos = $getListTodoUseCase->execute();

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