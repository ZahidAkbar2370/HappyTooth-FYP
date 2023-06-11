<!DOCTYPE html>
<?php
  session_start();
  if (isset($_SESSION['ID'])) {
      header("Location:./dashboard.php");
      exit();
  }
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


<div class="container card p-5">
<div class="row">
<div class="col-12">

  <h1 class="text-center pb-5">Register Here</h1>
  <p class="pd-5">Please fill in the form below to register with us for an appointment.</p>

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
