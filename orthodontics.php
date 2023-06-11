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
<div class="heroimg" style="background-image: url('./images/orthodonticshero.jpg');"></div>
<div class="row">
  <div class="mainfull">
    <h1>Orthodontics Invisalign Teeth Straightening</h1>
    <p>Orthodontics and Invisalign (a popular system) is a great way to get that great confident smile. If teeth are crowded a malpositioned, sometimes the only way to improve your smile is to delicately move the teeth into their best-desired positions.</p>

<p>Orthodontics can help in various ways . Sometimes a clear aligner system (like Invisalign) is the best system to use on a crowded teeth case, but sometimes a better result is achieved with a more conventional fixed “braces” system.</p>

<p>Our qualified orthodontists at Happy Tooth Dental Care Clinic can advise you about the best orthodontics options for you after complete analysis and assessment.</p>

<p>To find out more and book a Orthodontics assessment, get in touch with us and our staff will be more than happy to assist you.</p>

    <h2>Invisalign</h2>
    <p>Invisalign System is designed to reveal the smile that you deserve. It’s why millions of people have now transformed their lives with our removable, near-invisible aligners.</p>

<p>Custom-made to move your teeth little by little, each tiny shift takes you a step closer to that next version of you – efficiently, gently and accurately. Because the aligners are removable, you can easily take them in and out to continue enjoying the food you love without any restrictions. For those who participate in contact sports, Invisalign clear aligners can be removed before you play.</p>

<p>You only need short and usually non-invasive visits every 6 to 8 weeks. We will provide you with your next series of aligners to take home – so you can change them every 1-2 weeks, wherever you might be.</p>
  </div>
</div>

<div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div>

</body>
</html> 
