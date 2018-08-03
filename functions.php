<?php

    function isAllowedNightclub($age) {
        $allowed = ($age >= 21) ? true : false;
            return $allowed;
    }

    // die and dump
    function dd($something) {
        var_dump($something);
        die();
    }

    /*function fetchAllTasks($pdo) {
        $statement = $pdo->prepare('select * from todos');

	    $statement->execute();

	    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }*/
