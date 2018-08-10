<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
    </head>
    <body>
		<h1> 
			<?= $greeting ?> 
		</h1>
        <ul>
            <?php 
                foreach($tasks as $task)
                {
                    $isTaskDone = $task->completed ? "done" : "incomplete"; 
                    echo "<li> $task->description - $isTaskDone</li>";
                }
            ?>
        </ul>
    </body>
</html>
