<!DOCTYPE html>

<html>
    <head>
	
        <!-- <link rel="stylesheet" type="text/css" href="styles.css">  -->

        <style>
            h1 {
                background-color: darkcyan;
                text-align: center;
                padding: 3rem;
            }
        </style>

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