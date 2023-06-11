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
<div class="heroimg" style="background-image: url('./images/implantshero.jpg');"></div>
<div class="row">
  <div class="mainfull">
    <h1>Dental Implants</h1>
    <p>Dental implants are well-accepted and long term solution for replacing missing teeth.
Placed directly into the jaw bone, a dental implant provides a replacement for the root of a missing tooth or teeth. A dental implant can support crowns or dentures, in a similar way that roots support natural teeth. Usually made from titanium, dental implants have an internal screw that holds false tooth (or teeth) in place. Once the implant is fitted, surrounding bone grows up and attaches to the implant, and keeps it in place.</p>

<p>Dental Implants have a better look and feel than traditional options such as dentures and bridges. They also offer better biting experience.</p>

<h2>Single Tooth</h2>
<p>A single dental implant can support one, or several, replacement teeth – so you don’t need to have one implant per replacement tooth. Implants can also be used to support a full or partial set of dentures. Your dentist will carefully assess how many implants are needed in your circumstances.</p>

<h2>Multiple Teeth</h2>
<p>If you have several teeth missing, chewing properly can be difficult. Replacing multiple teeth with dental implants is a credible option that can boost your confidence, giving you the freedom to choose any type of food without getting concerned about a moving denture or uncomfortable sensations.</p>

<p>When several teeth are missing in the same area, there is an option to attach a bridge to the underlying implants</p>

<h2>Implant Retained Dentures</h2>
<p>Implants can also be used to support dentures. Usually, when dentures are used without implants, they become loose over 5-10 years. This is due to the changes in the shape of the bone over time.</p>
<p><img src="./images/implantdentures.jpg" style="float: right; width: 500px; height: auto;">When using implants to support dentures, this provides more confidence to the wearer as dentures are attached to the implant and are not going to move. Implant-supported denture also preserve jaw bone and improve the appearance
The physical presence of the implants help with stopping bone loss and therefore everything fits with more comfort in the mouth for a longer period.</p>

<p>A traditional denture is made to a certain size so that it has the best chance of holding well in place in the mouth. In comparison, Implant-supported denture is smaller and more natural making wearer more confident and less conscious. When the implants hold a denture in place you can be assured that the bone is stronger for longer, that your smile will remain, and that the wrinkles will not appear so quickly, as well as eating is more enjoyable.</p>

<p>With a team of qualified and caring people, who are passionate about patient care, Happy Tooth Dental Care Clinic is a perfect choice for exploring your options for Dental Implants and Tooth Replacement.</p>

  </div>
</div>

<div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div>

</body>
</html> 
