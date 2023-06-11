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
<div class="heroimg" style="background-image: url('./images/teethwhithero.jpg');"></div>
<div class="row">
  <div class="mainfull">
    <h1>Teeth Whitening</h1>
    <p>Tooth whitening is a great way to get back that stunning white smile and make you feel so much more confident around others.</p>

<p>Teeth age with time and they get less white as we get older. Thankfully tooth whitening is an easy, affordable way to get that fresh, young smile back.</p>

<p>We provide a complimentary assessment & recommendation to all customers interested in our teeth whitening service.</p>

<p>To ensure that your teeth whitening results last longer, you should pay attention to oral hygiene and your diet. We recommend brushing twice a day and applying home whitening gel every six months.
Our qualified professional at Newcastle practice will answer all your queries at your visit.</p>

<p>Teeth whitening only improve the colour of your natural teeth. This is means any dentures, crowns, veneers or fillings will retain their existing colour. However, we might be able to help improve their look.</p>

<p>Why accept the smile you have, when it can be improved so easily?</p>

<p>Contact The Happy Tooth Dental Care Clinic to help you get the smile that you want.</p>
  </div>
</div>

<div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div>

</body>
</html> 
