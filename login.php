<!DOCTYPE html>
<?php
  session_start();
  if (isset($_SESSION['ID'])) {
      header("Location:./dashboard.php");
      exit();
  }
?>
<html>

<head>

  <title>Happy Tooth - Dental Care Clinic</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

<div class="topnav">

  <a href="./index.php">Home</a>

  <a href="./treatments.php">Treatments</a>

  <a href="./team.php">Our Team</a>

  <a href="./contact.php">Contact</a>

  <a class="redbtn" href="./register.php">Make an Appointment</a>

  <!-- Logged User here -->

  <div class="right">

  <div class="dropdown">

    <?php include './userhandler.php'; ?>

  </div> 

</div>

<!-- end logged user -->

</div>


<div class="container card p-5">

<div class="container">
<div class="row">

  <div class="mainfull">

    <h1>Login</h1>

    <p>Enter your user name and password to gain access</p>

<div class="contactrow">

<div class="contactdiv">

  <form action="./verify.php" method="post">



    <label for="user">User Name:</label>

    <input type="text" id="user" name="user" placeholder="Enter user name ...">



    <label for="password">Password:</label>

    <input type="password" id="password" name="password" placeholder="Enter password ...">

  

    <input type="submit" value="Login" id="login" name="login">

    <div style="width: 100%; text-align: center;">

    <p>Not a member yet? <a class="button" href="./register.php">Register here</a></p>

  </div>

  </form>

</div>
</div>


</div>

  </div>

</div>



<div class="footer">

  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>

</div>

</body>

</html> 

