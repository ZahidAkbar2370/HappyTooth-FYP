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
  <a class="active" href="./contact.php">Contact</a>
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
    <h1>Contact Us</h1>
    <p>Please share your valuable suggestions with us</p>
<div class="contactrow">
<div class="contactdiv">
  <form action="./process.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">E-Mail:</label>
    <input type="email" id="email" name="email" placeholder="loremipsum@web.com">

    <label for="message">Message:</label>
    <textarea placeholder="Enter your message ..." cols="40" rows="6" name="message" id="message"></textarea>
  
    <input type="submit" name="submit" id="submit" value="Submit">
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
