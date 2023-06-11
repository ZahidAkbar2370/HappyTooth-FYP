<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Happy Tooth - Dental Care Clinic</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<div class="topnav">
  <a href="./index.php">Home</a>
  <a class="active" href="./treatments.php">Treatments</a>
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

<div class="row" style="width: 100%; text-align: center;">
  <div class="mainfull">
    <h1>Treatments</h1>
<p>We offer the following treatments to give you back your stunning beautiful smile.</p>

<div class="flipcard">
    <div class="front" style="background-image: url(./images/teethwhit.jpg)">
    </div>
    <div class="back">
       <h2>Teeth Whitening</h2>
       <p>We help you get back your stunning white smile with Teeth Whitening.</p>
    </div>
</div>



<div class="flipcard">
    <div class="front" style="background-image: url(./images/cosdentist.jpg)">
    </div>
    <div class="back">
       <h2>Cosmetic Dentistry</h2>
       <p>We utilize different dental techniques to restore your teeth and smile.</p>
    </div>
</div>


<div class="flipcard">
    <div class="front" style="background-image: url(./images/ortho.jpg)">
    </div>
    <div class="back">
       <h2>Orthodontics</h2>
       <p>We delicately move your teeth into best-desired position with Invisalign Teeth Straightening.</p>
    </div>
</div>



<div class="flipcard">
    <div class="front" style="background-image: url(./images/implants.jpg)">
    </div>
    <div class="back">
       <h2>Dental Implants</h2>
       <p>Get a long term solution by replacing your missing teeth by dental implants.</p>
    </div>
</div>



<div class="flipcard">
    <div class="front" style="background-image: url(./images/affordable.jpg)">
    </div>
    <div class="back">
       <h2>Affordable Care Plans</h2>
       <p>We offer affordable dental care plans to give you access to premium quality private dentistry.</p>
    </div>
</div>



<div class="flipcard">
    <div class="front" style="background-image: url(./images/toothache.jpg)">
    </div>
    <div class="back">
       <h2>Emergency Treatments</h2>
       <p>We provide emergency treatment service to elimate reasons behind your toothache.</p>
       <a class="button clred" href="./register.php">Make an Appointment</a>
    </div>
</div>


  </div>
</div>

<div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div>
</body>
</html> 
