<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
  <title>Happy Tooth - Dental Care Clinic</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./style.css">
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


<div class="row">
  <div class="mainfull">
    <h1>Add a Nurse</h1>
    <p>Please fill in the detail below and click submit to add a nurse in the Clinic.</p>
<div class="contactrow">
<div class="contactdiv">
  <form action="./doadd.php" method="post">
  <label for="name">Nurse Name:</label>
  <input type="text" id="name" name="name" placeholder="Enter Nurse Name ...">

  <label for="degree">Degree:</label>
  <input type="text" id="degree" name="degree" placeholder="Enter Nurse Degree ...">

  <label for="password">Profile Password:</label>
  <input type="password" id="password" name="password" placeholder="Enter password ...">
  
  <label for="passconfirm">Confirm Profile Password:</label>
  <input type="password" class="form-control" id="passconfirm" name="passconfirm" placeholder="Confirm Password">

  <input type="submit" name="submitnurse" id="submitnurse" value="Submit">
  </form>
</div>
</div>
  </div>
</div>

<div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div>
</body>
</html> 
