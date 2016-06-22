<?php require ("header.php"); ?>
  <div class="container-fluid">
    <?php require("sidebar.php"); ?>
    <div class="col-md-10 col-sm-12 main">
      <h1>Appointments</h1>
        <table class="table table-condensed">
          <thead>
            <tr class="header">
              <th>Date</th>
              <th>Time</th>
              <th>Description</th>
              <th>Provider Name</th>
              <th>Location</th>
            </tr>
          </thead>
        <?php
          $query="SELECT * from appointments, users, providers WHERE users.uid = appointments.uid AND users.username= " . "'" . $username . "'" . "AND appointments.providerID= providers.providerID ORDER BY apptdate ASC ";


          if($result = mysqli_query($db, $query)) {
            while($row = mysqli_fetch_assoc($result)) { ?>
              <?php $apptdate = $row['apptdate']; ?>
              <?php $appttime = $row['appttime']; ?>
                  <tr>
                    <td><?php echo date("D, F j, Y", strtotime($apptdate)); ?></td>
                    <td><?php echo date("g:i A", strtotime($appttime)); ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                  </tr>
              <?php
            }
          }
        ?>
      </table>
    </div>
  </div>
<?php require("footer.php") ?>
