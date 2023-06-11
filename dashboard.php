<!DOCTYPE html>
<?php
session_start();

include './db.php';

if (!isset($_SESSION['ID'])) {
header("Location:./login.php");
exit();
} else { 

if ($_SESSION['ROLE'] == 'patient') { 

header("Location:./patient.php");

}

if ($_SESSION['ROLE'] == 'doctor') { 

header("Location:./doctor.php");

}

if ($_SESSION['ROLE'] == 'nurse') { 

header("Location:./doctor.php");
}

}

?>

<html>
<head>
<title>Happy Tooth - Dental Care Clinic</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

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

<div class="container">
<div class="dashboard"><h1>Admin Dashboard</h1>
<!-- <h1 class="bg-light">Welcome to Dashboard</h1> -->

<div class=" ">
<a href="dashboard.php?type=doctor" class="btn btn-info">Doctor</a>
<a href="dashboard.php?type=nurse" class="btn btn-info">Nurse</a>
<a href="dashboard.php?type=submissions" class="btn btn-info">Submissions</a>
</div>
</div>
</div>





<?php if(!isset($_GET["type"]) || (isset($_GET["type"]) && $_GET["type"] == "doctor")){ 

//List doctors
$sql = "SELECT * FROM users where role='doctor' ORDER BY id;";

//Get the data from DB
$rows = $db->query($sql);

?>


<div class="container">
<div class="col-12 p-3" >
<a href="adddoctor.php" class="btn btn-success">Add Doctor</a>
</div>
<div class="dashcol50">
<h2 class="">Doctors</h2>

</div>
<div class="row">




<?php
while ($row = $rows -> fetch_assoc()):
?>


<div class="col-4">
<div class="card" style="width: 18rem;">
<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
<div class="card-body bg-danger">
  <h5 class="card-title"><?php echo $row['username']; ?></h5>
  <p class="card-text"><?php echo $row['degree']; ?></p>
  <!-- <a href="#" class="/tn btn-primary">Go somewhere</a> -->
</div>
<div class="card-footer bg-dark">
<a class="btn btn-danger mr-2" href="./editdoc.php?id=<?php echo $row['id']; ?>">Edit</a><a href="javascript:confirmdelete('./deldoc.php?id=<?php echo $row['id']; ?>','<?php echo $row['username']; ?>');" class="btn btn-primary"> Delete</a>
</div>
</div>
</div>

<?php endwhile; ?>
</div>
</div>



<?php }



if(isset($_GET["type"]) && $_GET["type"] == "nurse"){ 



?>
<div class="container">
<div class="row ">
<div class="col-12 p-3" >
<a href="addnurse.php" class="btn btn-success">Add Nurse</a>
</div>
<div class="col-12">
<table class="table">
<h2 class="text-center">Nurses</h2>
<thead>
</thead>
<tbody>
<tr>
<th>Nurse Name</th>
<th>Nurse Degree</th>
<th>Action</th>
</tr>
<tr>



</tr>
<?php
$sql = "SELECT * FROM users where role='nurse' ORDER BY id;";

//Get the data from DB
$rows = $db->query($sql);

?>
<tbody>
<?php
while ($row = $rows -> fetch_assoc()):
?>
<tr>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['degree']; ?></td>
<td><a class="btn btn-success mr-2" href="./editnurse.php?id=<?php echo $row['id']; ?>">Edit</a><a href="javascript:confirmdelete('./deldoc.php?id=<?php echo $row['id']; ?>','<?php echo $row['username']; ?>');" class="btn btn-danger">Delete
</a></td>

</tr>

<?php endwhile; ?>

</table>
</div>
</div>
</div>





<?php }

if(isset($_GET["type"]) && $_GET["type"] == "submissions"){ 

//Get contact form submissions
$sql = "SELECT * FROM contact ORDER BY id";

//Get the data from DB
$rows = $db->query($sql);
?>


<h2 class="text-center pt-5">Contact Form Submissions</h2>
<div class="container mb-0">
<div class="row">


<?php while ($row = $rows -> fetch_assoc()): ?>

<div class="col-12">
<div class="alert alert-success" role="alert">

<h4 class="alert-heading"><?php echo $row['name']; ?></h4>
<p><?php echo $row['message']; ?></p>
<hr>
<p class="mb-0"><?php echo $row['email']; ?> <a href="javascript:confirmdelete('./delmsg.php?id=<?php echo $row['id']; ?>','<?php echo $row['message']; ?>');" class="btn btn-danger rounded">Delete</a></p>
</div>

<?php endwhile ?>

</div>

</div>
</div>


<?php } ?>
<script type="text/javascript">
function confirmdelete(delurl, name) {
//If user confirms the delete dialog
if (confirm("Are you sure you want to delete : "+ name)) {
//Change to location to delete URL
document.location = delurl;
}
}  
</script>

<div class="footer">
</div>


<footer class="footer bg-dark">
<div class="container">
<p>Copyright (c) 2023 Happy Tooth Dental Care Clinic, All rights reserved.</p>

</div>
</footer>

</body>
</html> 