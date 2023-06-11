<!DOCTYPE html>
<?php
  session_start();

  include './db.php';

if (!isset($_SESSION['ID'])) {
  header("Location:./login.php");
  exit();
} else {

if ($_SESSION['ROLE'] == 'patient') { 

  $id = $_SESSION['ID'];
} else {
  $id = (int)$_GET['id'];
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
<div class="heroimgdash" style="background-image: url('./images/smile.jpg');"></div>

<?php
$sql = "SELECT * FROM users where id='$id';";

//Get the data from DB
$rows = $db->query($sql);

//Fetch associative array from DB
$row = $rows -> fetch_assoc();

?>

  <div class="dashboard"><h1><?php echo $row['username']; ?></h1></div>
<div class="row">
  <div class="dashcol">
    <h2 class="clblue">Profile</h2>
    <table class="dashtable">
            <tr>
               <th>Name:</th>
               <td><?php echo $row['username']; ?></td>
               <th>Gender:</th>
               <td><?php echo $row['gender']; ?></td>              
               <th>Age:</th>
               <td><?php echo $row['age']; ?></td>

            </tr>
            <tr>
              <th>Phone No.</th>
              <td><?php echo $row['phone']; ?></td>
               <th>Treatment:</th>
               <td><?php echo $row['treatment']; ?></td>

              <?php
                $dbdate = date_create(($row['appointdate']));
                $appointdate = date_format($dbdate, 'l j F Y');
              ?>

               <th>Appointment Date:</th>
               <td><?php echo $appointdate; ?></td>
            </tr>
          </table>
<div class="contactrow">
  <div class="contactdiv">
    <form method="post">
      <label for="appointdate">Set New Appointment Date:</label>
      <input type="date" id="appointdate" name="appointdate" placeholder="Enter Date in mm/dd/yyyy format" required>
  
      <input type="submit" name="datesubmit" id="datesubmit" value="Submit">
      <?php
      if (isset($_POST['appointdate'])) {

        $date = date('Y-m-d', strtotime($_POST['appointdate']));

        if (!empty($date)) {

          $query  = "UPDATE `users` SET `appointdate`='$date' WHERE id = '$id';";

        $result = $db->query($query);

      if ($result==true) {
        header("Location:./patient.php");
        die();
    }else{
      echo "<h1>We encountered an error, Please <a href='./patient.php'>Try Again</a></h1>";
    }
      }
    }
      ?>
  </form>
</div>
</div>
  </div>
    <div class="dashcol">
      <h2 class="clblue">Prescription Record</h2>

<?php

if ($_SESSION['ROLE'] == 'patient') { 

  $uid = $_SESSION['ID'];

} else {

  $uid = (int)$_GET['id'];

}

$sql = "SELECT * FROM prescription where uid='$uid';";

//Get the data from DB
$rows = $db->query($sql);

?>

      <table class="dashtable">
            <tr>
               <th>Date</th>
               <th>Prescription</th>
            </tr>
            <?php
      while ($row = $rows -> fetch_assoc()):
      ?>
    <tr>
      <td><?php echo $row['date']; ?></td>
      <td><pre><?php echo $row['prescription']; ?></pre></td>
    </tr>
    <?php endwhile; ?>

          </table>
    </div>

</div>


<div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div>

</body>
</html> 
