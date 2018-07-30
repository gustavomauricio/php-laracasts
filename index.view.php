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
                {
                    $upperkey = ucwords($key);
                    if(!is_bool($value))
                        echo "<li> $upperkey => $value</li>";
                    else {
                        $status = $value ? "Completed" : "Incomplete";
                        echo "<li> $upperkey => $status</li>";
                    }
                }
            ?>
        </ul>
	
    </body>
</html>