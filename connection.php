<?php
  $h = 'localhost';
  $u = 'visuame5_patient';
  $p = '@cc3ssGiven!';
  $dbname = 'visuame5_portal';
  $db = mysqli_connect($h, $u, $p, $dbname);
  if (mysqli_connect_errno()) {
    echo "Cannot connect: " . mysqli_connect_error();
    exit();
  }
?>
