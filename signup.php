<?php include("connection.php"); ?>
<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Patient Portal</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">

      <!-- Stylesheets -->
        <!-- Bootstrap -->
          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" rel="stylesheet">

        <!-- Font Awesome -->
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom CSS -->
          <link href="stylesheets/login.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
        <div class="row" id="login">
            <h1>Register for Patient Portal</h1>
            <form method="post" action="register.php">
              First Name: <input type="text" class="form-control" name="firstname">
              Last Name: <input type="text" class="form-control" name="lastname">
              Username: <input type="text" class="form-control" name="username">
              Password: <input type="password" class="form-control" name="password">
              Confirm Password: <input type="password" class="form-control" name="confirm">
              Email: <input type="email" class="form-control" name="email">

              <input type="submit" class="btn btn-success" value="Register">
            </form>

            <form action="index.php">
              <input type="submit" class="btn btn-success" value="Back to Login">
            </form>

        </div>
    </div>


    <!-- JavaScript -->
      <!-- Bootstrap -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>

  </body>
</html>
