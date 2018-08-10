<?php

	$database = require 'bootstrap.php';

	$greeting = "Hello, " . $_GET['name'];

	$tasks = $database->fetchAllTasks('todos');

	require 'index.view.php';
