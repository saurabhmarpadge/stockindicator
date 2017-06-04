<?php include('includes/header.php');?>
<?php include('includes/sidebarHead.php');?>
          <h1 class="page-header">Account Settings</h1>

          <?php
            $username = getUser()['username'];
          ?>
          <?php foreach(getDetails($username) as $result) : ?>

          <form method="post" action="">
             <div class="form-group">
             <label>First Name*</label>
             <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" value="<?php echo $result->firstname?>">
            </div>
            <div class="form-group">
             <label>Last Name*</label>
             <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name"  value="<?php echo $result->lastname?>">
            </div>
            <div class="form-group">
             <label>Email Id*</label>
             <input type="email" class="form-control" name="email" placeholder="Enter Email Id"  value="<?php echo $result->email?>">
            </div>
            <div class="form-group">
             <label>Username*</label>
             <input type="text" class="form-control" name="username" placeholder="Enter Username"  value="<?php echo $result->username?>">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Update Changes</button>
          </form>
          <?php endforeach; ?>

          <?php include('includes/sidebarFoot.php');?>
          <?php include('includes/footer.php');?>
