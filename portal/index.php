<?php require ("header.php"); ?>
    <div class="container-fluid">
        <?php require("sidebar.php"); ?>
            <div class="col-md-10 col-sm-8 col-xs-12 main">
              <div class="row">
                <div class="col-xs-12">
                  <img src="../images/user.png" alt="User" class="mg-responsive" />
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
                </div>
              </div>
                <div class="row">
                <div class="col-xs-11 jumbotron" id="appt">
                  <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <h3>
                      <a href="appointments.php">Your next appointment will be on
                      <?php
                      // make sure uid = uid of
                      $query = "SELECT MIN(apptdate) AS apptdate, appttime, users.uid, users.username FROM appointments, users WHERE users.uid = appointments.uid AND users.username =" . "'" . $username . "'";

                      if($result = mysqli_query($db,$query)) {
                        while($row = mysqli_fetch_assoc($result)) {
                          $apptdate = $row['apptdate'];
                          $appttime = $row['appttime'];

                            echo date("l, F j, Y", strtotime($apptdate));
                        ?>
                        at <?php echo date("g:i A", strtotime($appttime));
                        }
                      }
                       ?>
                     </a>
                   </h3>
                </div>
              </div>

                  <div class="row report">
                      <h2>Your Health Report At a Glance</h2>
                    <div class="weight col-xs-3">
                      <h3>Weight</h3>
                      <?php
                        $query= "SELECT weight, height, bp, users.uid FROM health, users WHERE users.uid = health.uid AND users.username=" ."'" . $username . "'";

                        if($result = mysqli_query($db, $query)) {
                          while($row = mysqli_fetch_assoc($result)) {
                            echo $row['weight'];
                      ?>
                    </div>

                    <div class="height col-xs-3">
                      <h3>Height</h3>
                      <?php
                            echo $row['height'];
                      ?>
                    </div>

                    <div class="bp col-xs-3">
                      <h3>BP</h3>
                      <?php
                            echo $row['bp'];
                          }
                        }
                      ?>
                    </div>
                  </div>
              </div>
            </div>

<?php require("footer.php"); ?>
<script src="../scripts/appt.js"></script>
