<?php

	$greeting = "Hello, " . $_GET['name'];

	$animals = ['cow','duck','bull','tiger','lion'];

	$task = [
		"title" => "clean house",
		"due data" => "tomorrow",
		"assigned to" => "gustavo",
		"completed" => false
	];

	require 'index.view.php';
