<?php

include './db.php';

  if (isset($_POST['register'])) {

	$name = $db->real_escape_string($_POST['name']);

	$age = $db->real_escape_string($_POST['age']);

	$gender = $db->real_escape_string($_POST['gender']);

	$treatment = $db->real_escape_string($_POST['treatment']);

	$date = date('Y-m-d', strtotime($_POST['date']));

	$phone = $db->real_escape_string($_POST['phone']);

	$message = $db->real_escape_string($_POST['message']);

	$password = $db->real_escape_string(md5($_POST['password']));

	// The user registering on the website will always be regarded as a patient
	// Other users like doctors and nurses will be added by administrator via Admin Dashboard
	$role = 'patient';

if (!empty($name) && !empty($age) && !empty($gender) && !empty($treatment) && !empty($date) && !empty($phone) && !empty($message) && !empty($password)) {
	//Add the new appointment

	        $query  = "INSERT INTO users (username, password, role, gender, age, phone, treatment, info, appointdate) VALUES ('$name','$password', '$role', '$gender', '$age', '$phone', '$treatment', '$message', '$date');";

        $result = $db->query($query);

    if ($result==true) {
      header("Location:./login.php");
      die();
    }else{
      echo "<h1>We encountered an error, Please <a href='./register.php'>Try Again</a></h1>";
    }

}

else {
		echo "<h1>Please fill out form completely. <a href='./register.php'>Refil Form Again</a></h1>";
}

}

else {
	//if this file is directly accessed go to the register page
	header("Location:./register.php");
    exit();
}


?>