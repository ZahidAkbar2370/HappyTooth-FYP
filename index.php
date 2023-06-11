<!DOCTYPE html>
<?php
  session_start();
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
  <a class="active" href="./index.php">Home</a>
  <a href="./treatments.php">Treatments</a>
  <a href="./team.php">Our Team</a>
  <a href="./contact.php">Contact</a>
  <a class="redbtn" href="#appoint">Make an Appointment</a>
<!-- Logged User here -->
  <div class="right">
  <div class="dropdown">
    <?php include './userhandler.php'; ?>
  </div> 
</div>
<!-- end logged user -->
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
  <img src="./images/01.jpg" style="width:100%">
</div>
    </div>

  </div>

</div>


    <div class="main">
<!-- home cards -->
<div class="cardrow">

  <div class="cardcolumn">
    <div class="card">
      <img src="./images/teethwhit.jpg" alt="Teeth Whitening" style="width:100%">
      <div class="cardcontainer">
        <h2>Teeth Whitening</h2>
        <p class="cardtitle">Get back stunning white smile</p>
        <p>Teeth whitening is a great way to get back that stunning white smile and make you feel so much more confident around others.</p>
        <p><a class= "cardbutton" href="./teethwhit.php">Read More ...</a></p>
      </div>
    </div>
  </div>

  <div class="cardcolumn">
    <div class="card">
      <img src="./images/cosdentist.jpg" alt="" style="width:100%">
      <div class="cardcontainer">
        <h2>Cosmetic Dentistry</h2>
        <p class="cardtitle">Restore your teeth and Smile</p>
        <p>Cosmetic dentistry utilizes different dental techniques to restore your teeth and smile, with the focus being on achieving the best result.</p>
        <p><a class= "cardbutton" href="./cdentistry.php">Read More ...</a></p>
      </div>
    </div>
  </div>

  <div class="cardcolumn">
    <div class="card">
      <img src="./images/ortho.jpg" alt="" style="width:100%">
      <div class="cardcontainer">
        <h2>Orthodontics</h2>
        <p class="cardtitle">Invisalign Teeth Straightening</p>
        <p>If teeth are crowded a malpositioned, the only way to improve your smile is to delicately move the teeth into their best-desired positions.</p>
        <p><a class= "cardbutton" href="./orthodontics.php">Read More ...</a></p>
      </div>
    </div>
  </div>

<div class="clear"></div>

  <div class="cardcolumn">
    <div class="card">
      <img src="./images/implants.jpg" alt="" style="width:100%">
      <div class="cardcontainer">
        <h2>Dental Implants</h2>
        <p class="cardtitle">Replace your missing Teeth</p>
        <p>Dental implants are well-accepted and long term solution for replacing missing teeth.</p>
        <p><a class= "cardbutton" href="./implants.php">Read More ...</a></p>
      </div>
    </div>
  </div>


  <div class="cardcolumn">
    <div class="card">
      <img src="./images/toothache.jpg" alt="" style="width:100%">
      <div class="cardcontainer">
        <h2>Emergency Treatments</h2>
        <p class="cardtitle">Help in need</p>
        <p>Our appointment service is here to serve you at your convenience.</p>
        <p><a class= "cardbutton" href="#appoint">Make an Appointment</a></p>
      </div>
    </div>
  </div>


    <div class="cardcolumn">
    <div class="card">
      <img src="./images/affordable.jpg" alt="" style="width:100%">
      <div class="cardcontainer">
        <h2>Affordable Care Plans</h2>
        <p class="cardtitle">Low cost premium Quality</p>
        <p>We have affordable dental care plans that allow you to access private dentistry.</p>
        <p><a class= "cardbutton" href="./careplans.php">Read More ...</a></p>
      </div>
    </div>
  </div>


</div>
<!-- end home cards-->

  </div>
</div>

<!-- <div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div> -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<div class="container card p-5">
<div class="row">
<div class="col-12">

  <h1 class="text-center pb-5">Register Here</h1>
</div>
    <!-- CONTACT FORM HERE -->
                        <form action="./appoint.php" method="post">
<form>
<div class="form-row">
    <div class="col-md-6">
      <label for="name">Name</label>
      <input type="text"  id="name" name="name" placeholder="Full Name">
    </div>
    <div class="col-md-6">
      <label for="age">Age</label>
      <input type="text"  id="age" name="age"  placeholder="Age in Years" required>
    </div>

    <div class="col-md-6">
    <label for="gender">Gender</label>
  <input type="text" id="gender" name="gender" pattern="male|Male|female|Female|other|Other" title="Gender: Male, Female or Other" required placeholder="Gender i.e. Male/Female/Other">
    </div>

 

  
    <div class="col-md-6">
  
  <label for="select">Select Treatment</label>
  <select name="treatment" id="teatment" required>
       <option id="1">Emergency Treatment</option>
       <option id="2">Teeth Filling</option>
       <option id="3">Artificial Teeth</option>
       <option id="4">Scaling & Cleaning</option>
  </select>
  </div>
  
  <div class="col-md-6">
  <label for="date">Select Appointment Date:</label>
  <input type="date" name="date" id="date" value="" required>
  </div>
  <div class="col-md-6">
  <label for="phone">Phone Number</label>
  <input type="text" id="phone" name="phone" placeholder="Phone" required>
  </div>

  <label for="Message">Additional Message</label>
  <textarea rows="5" id="message" name="message" placeholder="Message" required></textarea>
  
  <label for="password">Password</label>
  <input type="text" id="password" name="password" placeholder="Enter password" required>


  <input type="submit" value="Register" id="register" name="register">
  <div style="width: 100%; text-align: center;">
    <p>Already a member? <a class="button" href="./login.php">Login here</a></p>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </form>
</body>
</html> 
