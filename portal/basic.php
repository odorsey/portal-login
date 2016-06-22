<?php require ("header.php"); ?>
  <div class="container-fluid">
    <?php require("sidebar.php"); ?>
    <div class="col-md-10 col-xs-12 main">
      <?php
      if(!isset($_SESSION)) {
        session_start();
      }

      if (!empty($_POST)) {
        require ("../connection.php");

        if(isset($_SESSION['valid_user'])) {
          $username = $_SESSION['valid_user'];
        }

        //assign values
        $address = htmlentities(strip_tags($_POST['address']));
        $city = htmlentities(strip_tags($_POST['city']));
        $state = htmlentities(strip_tags($_POST['state']));
        $zip = htmlentities(strip_tags($_POST['zip']));
        $email = htmlentities(strip_tags($_POST['email']));
        $phone = htmlentities(strip_tags($_POST['phone']));

        //setting up array for query pieces
        $update = array();

        //checking to make sure that a form field is not empty before setting in query
        if(!empty($address))
          $update[] = 'address="' . mysqli_real_escape_string($db, $address) .'"';
        if(!empty($city))
          $update[] = 'city="' . mysqli_real_escape_string($db, $city) . '"';
        if(!empty($state))
          $update[] = 'state="' . mysqli_real_escape_string($db, $state) . '"';
        if(!empty($zip))
          $update[] = 'zip="' . mysqli_real_escape_string($db, $zip) . '"';
        if(!empty($email))
          $update[] = 'email="' . mysqli_real_escape_string($db, $email) . '"';
        if(!empty($phone))
          $update[] = 'phone="' . mysqli_real_escape_string($db, $phone) . '"';

        $update = implode(', ', $update);

        $query = mysqli_query($db, "UPDATE users SET $update WHERE username =" . "'" . $username . "'");

        if($query) {
          echo "Changes saved.";
          header("Refresh: 3; url=http://localhost:8080/portal-login/portal/basic.php");
          exit(0);
        }
        else {
          echo "Changes could not be saved. Please try again.";
          header("Refresh: 3; url=http://localhost:8080/portal-login/portal/basic.php");
          exit(0);
        }
      }

      ?>
        <h1>Basic Information</h1>
        <p>If you have any recent changes to report, please make those changes here to update them.</p>
        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
          <div class="col-md-5">
            Address: <input type="text" class="form-control" placeholder="<?php
              $query = "SELECT * FROM users WHERE users.username=" . "'" . $username . "'";

              if($result = mysqli_query($db,$query)) {
                while($row = mysqli_fetch_assoc($result)) {
                  echo $row['address']; ?>"
                   name="address">
            City/Town: <input type="text" class="form-control" placeholder="<?php echo $row['city']; ?>" name="city">
            State: <input type="text" class="form-control" placeholder="<?php echo $row['state']; ?>" name="state">
            Zip Code: <input type="number" class="form-control" placeholder="<?php echo $row['zip']; ?>" name="zip">
          </div>
          <div class="col-md-5">
            Email Address: <input type="text" class="form-control" placeholder="<?php echo $row['email'];?>" name="email">
             Phone Number: <input type="text" class="form-control" placeholder="<?php echo $row['phone'];
                }
             }
             ?>" name="phone">
            <input type="submit" class="btn btn-success" value="Save Changes">
          </div>
        </form>
      </div>
    </div>
<?php require("footer.php"); ?>
