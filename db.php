<?php 

	//create new Mysqli instance
	$db = new Mysqli;
	//connect to database using server, user name, password and database name
	$db->connect('localhost','root','','happytooth');

	// This will also report error so it will do 
	if ($db->connect_error) { 
	    die("Connection failed: " . $db->connect_error); 
	}
 ?>