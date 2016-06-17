<?php require ("header.php"); ?>
  <div class="container-fluid">
    <?php require("sidebar.php"); ?>
    <div class="col-md-10 main">
        <h1>Basic Information</h1>
        <p>If you have any recent changes to report, please make those changes here to update them.</p>
        <form>
          Email Address: <input type="text" class="form-control" placeholder="Email Address" name="email">
          Phone Number: <input type="text" class="form-control" placeholder="(123)456-7890" name="phone">
          Address: <input type="text" class="form-control" placeholder="Address" name="address">
        </form>

        <h2>Emergency Contact</h2>
        <form>
          First Name: <input type="text" class="form-control" placeholder="First Name" name="emerg-first">
          Last Name: <input type="text" class="form-control" placeholder="Last Name" name="emerg-last">
          Relationship: <input type="text" class="form-control" placeholder="Relationship" name="relation">
          Phone: <input type="text" class="form-control" placeholder="(555)555-5555" name="emerg-phone"> 
        </form>
        <h2>Pharmacy Information</h2>
        <h2>Insurance Information</h2>
      </div>
  </div>
<?php require("footer.php"); ?>
