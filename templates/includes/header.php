
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo BASE_URI;?>templates/img/favicon.ico">
    <title>Stack Market</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URI;?>templates/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo BASE_URI;?>templates/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI;?>templates/css/custom.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI;?>templates/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo BASE_URI;?>templates/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
  	  <div class="container-fluid">
    		<div class="navbar-header">
    		  <a class="navbar-brand" href="index.php">Stock Market</a>
    		</div>
        <!-- Right side -->
      	<ul class="nav navbar-nav">
      	  <li class="active"><a href="dashboard.php">Home</a></li>
      	</ul>
        <!-- left side -->
      	<ul class="nav navbar-nav navbar-right">
      	  <li><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
      	  <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      	</ul>
  	  </div>
	  </nav>

    <!-- Modal -->
    <div id="login" class="modal fade" role="dialog">
      <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
              <label for="username">Username :</label>
              <input type="text" class="form-control" id="username">
              </div>
              <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd">
              </div>
              <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

      </div>
    </div>


		<!-- Modal -->
		<div id="signup" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Sign Up</h4>
			  </div>
			  <div class="modal-body">
				<form method="post" action="">
					 <div class="form-group">
					 <label>First Name*</label>
					 <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
					</div>
					<div class="form-group">
					 <label>Last Name*</label>
					 <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
					</div>
					<div class="form-group">
					 <label>Email Id*</label>
					 <input type="email" class="form-control" name="email" placeholder="Enter Email Id">
					</div>
					<div class="form-group">
					 <label>Username*</label>
					 <input type="text" class="form-control" name="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
					 <label>Password*</label>
					 <input type="password" class="form-control" name="password" placeholder="Enter Password">
					</div>
					<div class="form-group">
					 <label>Confirm Password*</label>
					 <input type="password" class="form-control" name="password2" placeholder="Enter Password">
					</div>
					<button name="submit" type="submit" class="btn btn-primary">Submit</button>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
