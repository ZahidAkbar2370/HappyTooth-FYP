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
<div class="heroimg" style="background-image: url('./images/financing.jpg');"></div>
<div class="row">
  <div class="mainfull">
    <h1>Financing Your Treatment</h1>
<p>We have affordable dental care plans that allow you to access private dentistry and spread your payments over monthly periods.</p>

<p>Interested in having the high-quality dental treatments but uncertain how to pay for it?</p>

<p>We provide a monthly payment plan for the convenience of your pocket. You pay monthly installments of your treatment bills.</p>

  </div>
</div>

<div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div>

</body>
</html> 
