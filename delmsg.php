<?php

		  session_start();
  
  include './db.php';

if (!isset($_SESSION['ID'])) {
  header("Location:./login.php");
  exit();
} else {

	$id = (int)$_GET['id'];

	$sql = "delete from contact where id = '$id';";

	$val=$db->query($sql);

	if ($val) {
		//Go to admin dashboard
		header('location: ./dashboard.php');
	}
}

?>