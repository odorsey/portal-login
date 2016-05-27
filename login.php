<?php
require("escape.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
  require("connection.php");

  // try to log the user in
  $username = escape($db,$_POST['username']);
  $password = escape($_POST['password']);
  $encryptpw = sha1($_POST['password']); // need to get sha1 working on db entries

  $query = "select utype from users where username= '$username' " . "and password = '$password'";

  echo "query = $query" . "<br />";

  if ($result = mysqli_query($db,$query)) {
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
      session_start();
      // follow slide 34 in lecture 5
    }
  }

  if (($_GET['username'] ))

  if ($loggedin == 1)

}
?>
