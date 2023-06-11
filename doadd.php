<?php

      session_start();
  
  include './db.php';

if (!isset($_SESSION['ID'])) {
  header("Location:./login.php");
  exit();
} else {
  
  if (isset($_POST['submit'])) {

      $name = $db->real_escape_string($_POST['name']);
      $pwd = $db->real_escape_string(md5($_POST['password']));
      $pwdconfirm = $db->real_escape_string(md5($_POST['passconfirm']));
      $role = 'doctor';
      $degree = $db->real_escape_string($_POST['degree']);

      if ($pwd == $pwdconfirm) {
  if (!empty($name) && !empty($pwd) && !empty($degree)) {
        $query  = "INSERT INTO users (username, password, role, degree) VALUES ('$name','$pwd', '$role', '$degree');";

        $result = $db->query($query);

    if ($result==true) {
      header("Location:./dashboard.php");
      die();
    }else{
      echo "<h1>We encountered an error, Please <a href='./adddoctor.php'>Try Again</a></h1>";
    }

    }
  }
  else {   echo "<h1>The confirm password does not match the password, Please <a href='./adddoctor.php'>try again</a></h1>"; }
}



// If submit nurse form submitted then
  if (isset($_POST['submitnurse'])) {

      $name = $db->real_escape_string($_POST['name']);
      $pwd = $db->real_escape_string(md5($_POST['password']));
      $pwdconfirm = $db->real_escape_string(md5($_POST['passconfirm']));
      $role = 'nurse';
      $degree = $db->real_escape_string($_POST['degree']);

      if ($pwd == $pwdconfirm) {
  if (!empty($name) && !empty($pwd) && !empty($degree)) {
        $query  = "INSERT INTO users (username, password, role, degree) VALUES ('$name','$pwd', '$role', '$degree');";

        $result = $db->query($query);

    if ($result==true) {
      header("Location:./dashboard.php");
      die();
    }else{
      echo "<h1>We encountered an error, Please <a href='./addnurse.php'>Try Again</a></h1>";
    }  

    }
  }
  else {   echo "<h1>The confirm password does not match the password, Please <a href='./addnurse.php'>try again</a></h1>"; }
}

}
?>