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
<div class="heroimg" style="background-image: url('./images/cosdentisthero.jpg');"></div>
<div class="row">
  <div class="mainfull">
    <h1>Cosmetic Dentistry</h1>
    <p>Cosmetic dentistry is a broad term used to describe different dental techniques to restore your teeth and smile, with the focus being on achieving the best aesthetic, functional result.</p>
    <h2>Cosmetic White Fillings</h2>
    <p><img src="./images/bonding-white-filling.jpg" style="float: right; width: 190px; height: auto;">Historically, silver amalgam fillings have been used widely in the country, to restore teeth. These silver fillings can last a long time but they often weaken the remaining tooth and sometimes this results in a cusp falling off the filled tooth over time.</p>

<p>Many patients now prefer a more cosmetic, white filling option where the fillings are not easily visible and are not unsightly. They instead blend into the natural colour of your tooth.</p>

<p>The white fillings also have the functional advantage of chemically attaching to the remaining tooth tissue to make the tooth slightly stronger.</p>
<h2>Cosmetic Crowns</h2>
<p><img src="./images/cosmetic-crown.jpg" style="float: right; width: 190px; height: auto;">A crown is required if there has been a large loss of tooth tissue and the tooth is weakened and requires support.</p>

<p>Cosmetic crowns are unlike the metal NHS crowns, in that they have greater aesthetics and look much more natural.</p>

<p>There are various options available, but the latest in crown technology allows metal-free, strong porcelain crowns.</p>

<p>These crowns allow light to go through them and yet are very functionally strong. This is similar to the natural tooth so they can match the adjacent teeth for the best blended natural result.</p>

<h2>Cosmetic Dentures</h2>
<p>Dentures are a method of replacing missing teeth.</p>

<p>They can be full dentures(replacing all the teeth in a dental arch) or they can be a partial denture (replacing only a few teeth).</p>

<p>They can also be dental implant-supported, where they utilize dental implants to get optimal retention and support.</p>

<p>We aim to create dentures that not only look like natural teeth but are also comfortable to wear.</p>

<h2>Cosmetic Bridges</h2>
<p>A dental bridge is a way to replace a single tooth or a small gap in your mouth. Dental bridges can be made from different materials, which have varying degrees of aesthetics.</p>

<p>Cosmetic dental bridges have greater aesthetics and look much more natural.
There are various options available, but the latest in crown/bridge technology allows metal-free, strong porcelain bridges.</p>
<p>These bridges allow light to go through them and yet are very functionally strong.
This is similar to the natural tooth so they can match the adjacent teeth for the best blended natural result.</p>

<h2>Cosmetic Veneers</h2>
<p>Dental veneers are thin yet strong restorations, placed on the outer surface of anterior teeth, to repair them or to improve their appearance. They can be in composite or ceramic.

<p>These restorations are very strong when bonded to the tooth and can give great aesthetics and a very natural, pleasing appearance.</p>

<p>They were often used historically to create that ” Celebrity Smile” look, although we would usually advise a more natural look.</p>


  </div>
</div>

<div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div>

</body>
</html> 
