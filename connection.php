<?php
  $h = 'localhost';
  $u = '';
  $p = '';
  $dbname = 'portal';
  $db = mysqli_connect($h, $u, $p, $dbname);
  if (mysqli_connect_errno()) {
    echo "Cannot connect: " . mysqli_connect_error();
    exit();
  }
?>
