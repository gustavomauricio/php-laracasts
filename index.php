<?php

	$greeting = "Hello, " . $_GET['name'];

	$animals = ['cow','duck','bull','tiger','lion'];

	$task = [
		"title" => "Clean house",
		"due data" => "Tomorrow",
		"assigned_to" => "Gustavo",
		"completed" => false
	];

	require 'index.view.php';
