<?php

	//create connection credentials
	$db_host = 'localhost';
	$db_name = 'quizzer';
	$db_user = 'root';
	$db_pass = 'jph2020429';

	//create mysqli object
	//use procedual way or objected-oriented way
	/*procedual way
	$mysqli_error
	*/
	/*objected-oriented way
	$mysqli-> error
	*/

	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

	//Error Handler when connection of database failed
	if ($mysqli->connect_error){
		printf("connec failed: %s\n", $mysqli->connect_error);
		exit();
	}
