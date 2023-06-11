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
  <a class="active" href="./team.php">Our Team</a>
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

<div class="row" style="background-color: #f4f4f4;">
  <div class="mainfull">
    <h1>Meet our Hardworking Team</h1>
    <div class="teamcontainer">
  
  <div class="team">
    <div class="member">
      <img src="./images/team1.jpg" alt="">
      <h3>John Doe</h3>
      <span>DDS, DMD (Pakistan)</span>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet Laboriosam voluptatum fuga iure. Est, dicta voluptatum.</p>
    </div>

    <div class="member">
      <img src="./images/team2.jpg" alt="">
      <h3>John Doe</h3>
      <span>DDS, DMD (Pakistan)</span>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet Laboriosam voluptatum fuga iure. Est, dicta voluptatum.</p>
    </div>

    <div class="member">
      <img src="./images/team3.jpg" alt="">
      <h3>Jane Doe</h3>
      <span>DDS, DMD (Pakistan)</span>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet Laboriosam voluptatum fuga iure. Est, dicta voluptatum.</p>
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
