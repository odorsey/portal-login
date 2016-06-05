<?php
//require("escape.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
  require("connection.php");

  // try to log the user in
  $username = ($_POST['username']);
  $encryptpw = sha1($_POST['password']); // need to get sha1 working on db entries

  $query = "SELECT utype FROM users WHERE username= '$username' " . "and password = '$encryptpw'";

  if ($result = mysqli_query($db,$query)) {
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
      session_start();
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
    require("/portal/index.php");
  }
  if ($_SESSION['user_type'] == 'Administrator') {
    require("/dashboard/index.php");
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
