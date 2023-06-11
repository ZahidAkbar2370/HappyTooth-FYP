<?php

  include './db.php';

  if (isset($_SESSION['ID'])) {
?>
<a href="./dashboard.php"><button class="dropbtn">Dashboard</button></a> <a href="./logout.php"><button class="dropbtn">Logout</button></a>
<?php
  } else {
?>

<a href="./login.php"><button class="dropbtn">Login/Register</button></a>
<?php
  }
?>