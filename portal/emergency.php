<?php require ("header.php"); ?>
  <div class="container-fluid">
    <?php require("sidebar.php"); ?>
    <div class="col-md-10 main">
      <h2>Emergency Contact</h2>
      <form>
        First Name: <input type="text" class="form-control" placeholder="First Name" name="emerg-first">
        Last Name: <input type="text" class="form-control" placeholder="Last Name" name="emerg-last">
        Relationship: <input type="text" class="form-control" placeholder="Relationship" name="relation">
        Phone: <input type="text" class="form-control" placeholder="(555)555-5555" name="emerg-phone">
        <input type="submit" class="btn btn-success" value="Save">
      </form>
    </div>
<?php require("footer.php"); ?>
