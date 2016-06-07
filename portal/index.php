<?php require ("header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Message My Doctor</a></li>
                    <li><a href="#">Schedule an Appointment</a></li>
                    <li><a href="#">My Health Chart</a></li>
                    <li><a href="#">Request Prescription Refill</a></li>
                    <li><a href="#">Medications List</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <h2>Hello,
                <?php
                  $query = "SELECT firstname FROM users WHERE username =" . "'" . $username . "'";

                  if ($result = mysqli_query($db,$query)) {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['firstname'];
                    }
                  }
                  ?>
              </h2>
                <div class="jumbotron">
                    <h2><a href="appointments.php">Your next appointment will be on
                    <?php
                    // make sure uid = uid of
                    $query = "SELECT apptdate, appttime, users.uid, users.username from appointments, users where users.uid = appointments.uid AND users.username =" . "'" . $username . "'";

                    if($result = mysqli_query($db,$query)) {
                      while($row = mysqli_fetch_assoc($result)) {
                        echo $row['apptdate']; ?>
                      at <?php echo $row['appttime'];
                      }
                    }
                     ?></a></h2>
                </div>

                <h1>Your Health Report</h1>
                <table class="table">
                    <tr>
                        <th>weight</th>
                        <th>height</th>
                        <th>blood pressure</th>
                    </tr>
                    <tr>
                      <td>
                        <?php
                          $query= "SELECT weight, height, bp, users.uid from health, users where users.uid = health.uid AND users.username= 'testPatient'";

                          if($result = mysqli_query($db, $query)) {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['weight'];
                        ?>
                      </td>
                      <td>
                        <?php
                          echo $row['height'];
                        ?>
                      </td>
                      <td>
                        <?php
                           echo $row['bp'];
                            }
                          }
                        ?>
                    </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

<?php require("footer.php");
