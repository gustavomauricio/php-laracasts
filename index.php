<?php

	require 'functions.php';
	require 'Task.php';

	$greeting = "Hello, " . $_GET['name'];

	$pdo = connectDatabase();

	$tasks = fetchAllTasks($pdo);

	require 'index.view.php';
