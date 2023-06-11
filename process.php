<?php

	include './db.php';
  // Include database connectivity
  
  if (isset($_POST['submit'])) {

      $name = $db->real_escape_string($_POST['name']);
      $email = $db->real_escape_string($_POST['email']);
      $message = $db->real_escape_string($_POST['message']);

      
  if (!empty($name) && !empty($email) && !empty($message)) {
        $query  = "INSERT INTO contact (name, email, message) VALUES ('$name','$email','$message');";
        
        $result = $db->query($query);

    if ($result==true) {
      header("Location:./index.php");
      die();
    }else{
      echo "<h1>We encountered an error, Please <a href='./contact.php'>Try Again</a></h1>";
    }   

    }else{
      echo "<h1>Forms field not filled properly, Please <a href='./contact.php'>Try Again</a></h1>";
    }
  }

?>