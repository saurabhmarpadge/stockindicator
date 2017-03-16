
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


  </head>

  <body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
  	  <div class="container-fluid">
    		<div class="navbar-header">
    		  <a class="navbar-brand" href="index.php">Stock Market</a>
    		</div>
        <?php if(isLoggedIn()) : ?>
        <!-- Right side -->
      	<ul class="nav navbar-nav">
      	  <li class="active"><a href="dashboard.php">Home</a></li>
      	</ul>
      <?php endif; ?>
        <!-- left side -->
      	<ul class="nav navbar-nav navbar-right">
          <?php if(isLoggedIn()) : ?>
          <li class="active"><a href="">Welcome, <?php echo getUser()['username']; ?></a></li>
          <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span>            Logout</a></li>
          <?php else: ?>
      	  <li><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
      	  <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <?php endif; ?>

      	</ul>
  	  </div>

    </nav>

        <!-- START Worden Top Gainers and Losers Ticker Widget -->
<script src="http://widgets.freestockcharts.com/js/jquery-1.3.1.min.js" type="text/javascript"></script> <script src="http://widgets.freestockcharts.com/script/WBIHorizontalTicker2.js?ver=12334" type="text/javascript"></script> <link href="http://widgets.freestockcharts.com/WidgetServer/WBITickerblue.css" rel="stylesheet" type="text/css" />
<script>
    var gainerTick = new WBIHorizontalTicker('gainers');
    gainerTick.start();
    var loserTick = new WBIHorizontalTicker('losers');
    loserTick.start();
	</script> <!-- End Scrolling Ticker Widget -->


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
            <form role="form" method="post" action="login.php">
              <div class="form-group">
              <label for="username">Username :</label>
              <input type="text" class="form-control" name="username" id="username">
              </div>
              <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password" id="pwd">
              </div>
              <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
              </div>
              <button name="do_login" type="submit" class="btn btn-default">Login</button>
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
				<form role="form" enctype="multipart/form-data" method="post" action="register.php">
					 <div class="form-group">
					 <label>First Name*</label>
					 <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
					</div>
					<div class="form-group">
					 <label>Last Name*</label>
					 <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
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
					<button name="register" type="submit" class="btn btn-primary">Sign Up</button>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
