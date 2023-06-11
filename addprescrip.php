<!DOCTYPE html>
<?php
 include './db.php';
 session_start();
  
  $id = (int)$_GET['id'];


  if (isset($_POST['prescrip'])) {

      $prescription = $db->real_escape_string($_POST['prescription']);
      $date = date("Y-m-d");

  $sql = "INSERT INTO prescription (uid, date, prescription) VALUES ('$id','$date','$prescription');";

    $result = $db->query($sql);

    if ($result==true) {
      header("Location:./doctor.php");
      die();
    }else{
      echo "<h1>We encountered an error, Please <a href='./addprescrip.php?id=<?php echo $id ?>'>Try Again</a></h1>";
    }
}

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


<div class="row">
  <div class="mainfull">
    <h1>Add Prescription</h1>
    <p>Please write the prescription and click submit.</p>
<div class="contactrow">
<div class="contactdiv">
  <form method="post">
    <label for="prescription">Prescription:</label>
    <textarea placeholder="Enter prescription ..." cols="40" rows="6" name="prescription" id="prescription"></textarea>
  <input type="submit" value="Submit" id="prescrip" name="prescrip">
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
