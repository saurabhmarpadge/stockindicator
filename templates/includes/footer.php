<hr>

<footer>
  <p>&copy; 2017 Company, Inc.</p>
</footer>
</div> <!-- /container -->






<!-- Custom jquery for this template -->
<script src="<?php echo BASE_URI;?>templates/js/custom.js"></script>

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="<?php echo BASE_URI;?>templates/js/ie-emulation-modes-warning.js"></script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo BASE_URI;?>templates/js/jquery-2.0.0.js"></script>
<!--  <script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>-->
<script src="<?php echo BASE_URI;?>templates/js/bootstrap.js"></script>
<script src="<?php echo BASE_URI;?>templates/js/Chart.min.js"></script>
<?php if(isset($_POST['do_search'])): ?>
	<script src="<?php echo BASE_URI;?>templates/js/linegraph.js"></script>
<?php endif;?>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo BASE_URI;?>templates/js/ie10-viewport-bug-workaround.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</body>
</html>
