<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
  require("../connection.php");

  // try to log the user in
  $username = stripslashes($_POST['username']);
  $encryptpw = sha1(stripslashes($_POST['password']));

  $query = "SELECT utype FROM users WHERE username= '$username' " . "and password = '$encryptpw'";

  if ($result = mysqli_query($db,$query)) {
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
      $row = mysqli_fetch_row($result);
      $_SESSION['valid_user'] = $username;
      $_SESSION['user_type'] = $row[0];
    }
  }

}
?>

<?php
if (isset($_SESSION['valid_user'])) {
  //user logged successfully
  if ($_SESSION['user_type'] == 'Patient') {
    require("index.php");
  }

  if ($_SESSION['user_type'] == 'Administrator') {
    require("../dashboard/index.php");
  }
} else {
  // user is not logged in
if (isset($username)) {
    // login failure
    echo "Incorrect username/password. You will be redirected to the login page shortly.";
    header("Refresh: 3; url=http://localhost:8080/portal-login/");
    exit(0);
} else {
    // not logged in
    echo "Not sure how you got here, but you're not logged in. You will be redirected to the login page shortly.";
    header("Refresh: 3; url=http://localhost:8080/portal-login/");
    exit(0);
  }
}

?>
