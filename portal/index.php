<?php
  require ("header.php");
?>

    <div class="container-fluid">
        <?php require("sidebar.php"); ?>

            <div class="col-md-10 main">
                <h1 class="hello">Hello,
                <?php
                  $query = "SELECT firstname FROM users WHERE username =" . "'" . $username . "'";

                  if ($result = mysqli_query($db,$query)) {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['firstname'];
                    }
                  }
                  ?>
              </h1>
                <div class="jumbotron" id="appt">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3>
                      <a href="appointments.php">Your next appointment will be on
                      <?php
                      // make sure uid = uid of
                      $query = "SELECT apptdate, appttime, users.uid, users.username from appointments, users where users.uid = appointments.uid AND users.username =" . "'" . $username . "'";

                      if($result = mysqli_query($db,$query)) {
                        while($row = mysqli_fetch_assoc($result)) {
                        echo $row['apptdate'];
                        ?>
                        at <?php echo $row['appttime'];
                        }
                      }
                       ?>
                     </a>
                   </h3>
                </div>
                <div id="content">
                  <h1>Your Health Report At a Glance</h1>
                  <div class="row report">
                    <div class="weight col-md-4">
                      <h3>Weight</h3>
                      <?php
                        $query= "SELECT weight, height, bp, users.uid from health, users where users.uid = health.uid AND users.username=" ."'" . $username . "'";

                        if($result = mysqli_query($db, $query)) {
                          while($row = mysqli_fetch_assoc($result)) {
                            echo $row['weight'];
                      ?>
                    </div>

                    <div class="height col-md-4">
                      <h3>Height</h3>
                      <?php
                            echo $row['height'];
                      ?>
                    </div>

                    <div class="bp col-md-4">
                      <h3>Blood Pressure</h3>
                      <?php
                            echo $row['bp'];
                          }
                        }
                      ?>
                    </div>
            </div>
            </div>
        </div>
    </div>
<?php require("footer.php"); ?>
<script src="../scripts/jumbotron.js"></script>
