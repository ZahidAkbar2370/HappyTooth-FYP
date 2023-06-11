<!DOCTYPE html>
<?php
  include './db.php';
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
<div class="heroimgdash" style="background-image: url('./images/smile.jpg');"></div>

  <div class="dashboard"><h1>Doctor Dashboard</h1></div>
<div class="row">
    <div class="dashcol">
      <h2 class="clblue">Appointment List</h2>
<?php
$sql = "SELECT * FROM users where role='patient' ORDER BY id;";

//Get the data from DB
$rows = $db->query($sql);

?>
      <table class="dashtable">
          <thead>
            <tr>
               <th>Date</th>
               <th>Patient Name</th>
               <th>Treatment</th>
               <th>Phone No.</th>
               <th>Additional Information</th>
               <th>Action</th>
            </tr>
          </thead>
              <tbody>
      <?php
      while ($row = $rows -> fetch_assoc()):
      ?>
    <tr>
  <?php
    $dbdate = date_create(($row['appointdate']));
    $appointdate = date_format($dbdate, 'l j F Y');
  ?>
      <td><?php echo $appointdate; ?></td>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['treatment']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['info']; ?></td>
      <td><a class="mini clgreen" href="./addprescrip.php?id=<?php echo $row['id']; ?>">Add Prescription</a><a class="mini clred" href="./patient.php?id=<?php echo $row['id']; ?>">View History</a></td>

    </tr>
    <?php endwhile; ?>
</tbody>
          </table>
    </div>

</div>


<div class="footer">
  <p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>
</div>

</body>
</html> 
