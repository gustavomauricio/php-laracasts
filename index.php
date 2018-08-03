<?php

	$config = require 'config.php';
	require 'database/Connection.php';
	require 'database/QueryBuilder.php';
	require 'Task.php';

	$greeting = "Hello, " . $_GET['name'];

	$query = new QueryBuilder(
		Connection::make($config['database'])
	);

	$tasks = $query->fetchAllTasks('todos');

	//dd($tasks);

	require 'index.view.php';
