<?php
	//start the session
	session_start();
	//unset session
	session_unset();
	//destroy the current session
	session_destroy();
	//Write close for session for permanenet destruction
	session_write_close();
	//Clear out the cookie stored in browser
	setcookie(session_name(),'',0,'/');
	//Generate a new session ID
	session_regenerate_id(true);
	//Redirect to the LOGIN Page or HOMEPAGE
	//We will redirect to index.php (HOMEPAGE)
	header("Location:index.php");
	die();
?>