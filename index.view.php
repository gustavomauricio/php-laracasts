<!DOCTYPE html>

<html>
    <head>
	
		<style>
			h1 {
				background-color: darkcyan;
				
				padding: 3rem;
				
				text-align: center;
			}
		</style>

    </head>

    <body>

		<h1> 
			<?= $greeting ?> 
		</h1>

        <ul>
            <?php 
                foreach($animals as $animal)
                echo "<li>$animal</li>";
            ?>
        </ul>

        <ul>
            <?php 
                foreach($task as $key => $value)
                echo "<li>$key => $value</li>";
            ?>
        </ul>
	
    </body>
</html>