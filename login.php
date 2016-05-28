<?php
//require("escape.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
  require("connection.php");

  // try to log the user in
  $username = ($_POST['username']);
  $encryptpw = sha1($_POST['password']); // need to get sha1 working on db entries

  $query = "select utype from users where username= '$username' " . "and password = '$encryptpw'";

  if ($result = mysqli_query($db,$query)) {
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
      session_start();
      $row = mysqli_fetch_row($result);
      $_SESSION['valid_user'] = $username;
      $_SESSION['user_type'] = $row[0];
    }

  }
  //mysql_close($db);
}
?>

<h1>Login Page</h1>
<?php
if (isset($_SESSION['valid_user'])) {
  //user logged successfully
  echo "Welcome, " . $_SESSION['valid_user'] . "<br />";
  echo "<a href='logout.php'>Logout</a><br />";
  if ($_SESSION['user_type'] == 'Patient') {
    echo "This is for Patients only <br />";
  }
  if ($_SESSION['user_type'] == 'Administrator') {
    echo "This is for Administrators only <br />";
  }
} else {
  // user is not logged in
if (isset($username)) {
    // login failure
    echo "Incorrect username/password.";
} else {
    // not logged in
    echo "Not sure how you got here, but you're not logged in.";
  }
}
?>
