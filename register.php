<?php
if (!empty($_POST)) {
  require ("connection.php");

  //assign values
  $firstname = ($_POST['firstname']);
  $lastname = ($_POST['lastname']);
  $username = ($_POST['username']);
  $encryptpw = sha1($_POST['password']);
  $email = ($_POST['email']);
  $utype = "Patient";

  $query = "insert into users values";
  $query = $query . " (NULL,'" . $firstname . "'," . "'" . $lastname . "'" . ",'" . $username . "'" . ",'" . $encryptpw . "'," . "'" . $email . "'" . ",'" . $utype;
  $query = $query . "')";

  $result = mysqli_query($db,$query);
    if ($result) {
      echo "You have successfully signed up as a patient! You will be redirected to the <a href='index.php'>login page</a>.";
      header("Location: index.php");
      exit;
    }
    else {
      echo "Something bad happened. Please <a href='register.php'>go back</a> and try to register again."; }
    }

?>
