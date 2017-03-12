        </div>
    </div>
</div>
<div class="col-md-4">
  <div class="sidebar">
    <div class="block">
        <h3>Login Form</h3>
        <?php if(isLoggedIn()) : ?>
            <div class="usedata">
              Welcome, <?php echo getUser()['username']; ?>
            </div>
            <br>
            <form role="form" action="logout.php" method="post">
                <input type="submit" name="do_logout" class="btn btn-primary" value="Logout">
            </form>
          <?php else: ?>
        <form role="form" method="post" action="login.php">
            <div class="form-group">
                <label>Username</label>
                <input name="username" type="text" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="Enter Password">
            </div>

            <button name="do_login" type="submit" class="btn btn-primary">Login</button>
            <a class="btn btn-default" href="register.php">Create Account</a>
        </form>
      <?php endif; ?>
    </div>
  <div class="block">
      <h3>Categories</h3>
      <div class="list-group">
        <a href="topics.php" class="list-group-item <?php echo is_active(null); ?>">All Topics <span class="badge pull-right"></span></a>
      <?php foreach(getCategories() as $category) : ?>
        <a href="topics.php?category=<?php echo $category->id; ?>" class="list-group-item <?php echo is_active($category->id); ?>"><?php echo $category->name; ?> </a>
      <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>
</div>

</div>
<!-- /.container -->




</body>

</html>
