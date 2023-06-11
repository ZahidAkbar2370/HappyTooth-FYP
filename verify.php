<?php

  session_start();
  if (isset($_SESSION['ID'])) {
      header("Location:./dashboard.php");
      exit();
  }

	include './db.php';
  // Include database connectivity
  
  if (isset($_POST['login'])) {

      $username = $db->real_escape_string($_POST['user']);
      $password = $db->real_escape_string(md5($_POST['password']));
      
  if (!empty($username) && !empty($password)) {
        $query  = "SELECT * FROM users WHERE username = '$username' and password= '$password';";
        $result = $db->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();            
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
            header("Location:./dashboard.php");
            die();                              
        }else{
          echo "<h1>User name or Password is incorrect</h1>";
          echo "<a href='./login.php'>Try Again</a>";
        } 
    }else{
      echo "<h1>Username and Password is required to login, Please <a href='./login.php'>Try Again</a></h1>";
    }
  } else {
  	//The login form was not submitted so redirect to login page
  	//to let user enter credentials
  	header("Location:./login.php");
  }
?>