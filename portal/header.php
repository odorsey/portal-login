<?php require("connection.php"); ?>
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
            <link href="stylesheets/patient.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Patient Portal</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav pull-right">

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home fa-fw"></i>Home</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-building-o fa-fw"></i>Appointments</a>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-exchange fa-fw"></i>Health Record</a>
            <ul class="dropdown-menu">
              <li><a href="#"> <span class="label label-warning pull-right">4</span><i class="fa fa-cubes fa-fw"></i> Vitals</a></li>
              <li><a href="#"> <span class="label label-warning pull-right">10</span><i class="fa fa-money fa-fw"></i> Results</a></li>
            </ul>
            </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-success pull-right">120</span><i class="fa fa-users fa-fw"></i>Messages</a>
          </li>


            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tags fa-fw"></i>M- Gesundheit</a>
            <ul class="dropdown-menu">
              <li><a href="#"> <span class="label label-warning pull-right">10</span><i class="fa fa-shopping-cart fa-fw"></i>Portfolio</a></li>
              <li><a href="#"> <span class="label label-warning pull-right">2</span><i class="fa fa-cog fa-fw"></i> Settings </a></li>
              <li><a href="#"> <span class="label label-warning pull-right">4</span><i class="fa fa-list fa-fw"></i> Programme </a></li>
                  </ul>
               </li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o fa-fw"></i> M- Vorsorge</a>
            <ul class="dropdown-menu">
              <li><a href="#"> <span class="label label-warning pull-right">10</span><i class="fa fa-shopping-cart fa-fw"></i>Portfolio</a></li>
              <li><a href="#"> <span class="label label-warning pull-right">2</span><i class="fa fa-cog fa-fw"></i> Settings </a></li>
              <li><a href="#"> <span class="label label-warning pull-right">4</span><i class="fa fa-list fa-fw"></i> Programme </a></li>
                  </ul>
               </li>-->

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-fw"></i> Profile Settings</a>
            <ul class="dropdown-menu">
              <li><a href="#">Basic Information</a></li>
              <li><a href="#">Emergency Contacts</a></li>
              <li><a href="#">Pharmacy</a></li>
              <li><a href="#">Insurance</a></li>
            </ul>
            </li>
            <li class="dropdown">
             <a href="logout.php"><i class="fa fa-graduation-cap fa-fw"></i> Logout</a>
              </li>


        </ul>
      </div><!-- /.navbar-collapse -->
    </nav><!-- /nav -->
