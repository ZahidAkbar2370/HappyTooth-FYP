<!DOCTYPE html>
<?php
  session_start();

  include './db.php';
  
  $id = (int)$_GET['id'];

  $sql = "select * from users where id ='$id';";
  $rows = $db->query($sql);

  $row= $rows->fetch_assoc(); 

if (isset($_POST['updatenurse'])) {

      $name = $db->real_escape_string($_POST['name']);
      $pwd = $db->real_escape_string(md5($_POST['password']));
      $pwdconfirm = $db->real_escape_string(md5($_POST['passconfirm']));
      $role = 'nurse';
      $degree = $db->real_escape_string($_POST['degree']);

      if ($pwd == $pwdconfirm) {
  $sql = "update users set username = '$name', degree = '$degree', password = '$pwd', role = 'nurse' where id='$id';";

    $result = $db->query($sql);

    if ($result==true) {
      header("Location:./dashboard.php");
      die();
    }else{
      echo "<h1>We encountered an error, Please <a href='./editdooc.php?id=<?php echo $id ?>'>Try Again</a></h1>";
    }

  header('location: ./dashboard.php');
}

else {
  //Passwords do not match
  echo "<h1>The confirm password does not match the password, Please <a href='./editdooc.php?id=<?php echo $id ?>'>try again</a></h1>";
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
    <h1>Edit Nurse Profile</h1>
    <p>Please fill in the detail below and click submit to update profile.</p>
<div class="contactrow">
<div class="contactdiv">
  <form method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" placeholder="Enter Nurse Name ..." value="<?php echo $row['username']; ?>">

  <label for="name">Degree:</label>
  <input type="text" id="degree" name="degree" placeholder="Enter Nurse Degree ..." value="<?php echo $row['degree']; ?>">

  <label for="password">Profile Password:</label>
  <input type="password" id="password" name="password" placeholder="Enter password ...">
  
  <label for="passconfirm">Confirm Profile Password:</label>
  <input type="password" class="form-control" id="passconfirm" name="passconfirm" placeholder="Confirm Password">

  <input type="submit" value="Submit" name="updatenurse" id="updatenurse">
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
