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

    function connectDatabase() {
        try {
            return $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', '123');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function fetchAllTasks($pdo) {
        $statement = $pdo->prepare('select * from todos');

	    $statement->execute();

	    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }