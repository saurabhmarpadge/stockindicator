<?php include('includes/header.php');?>
<?php include('includes/sidebarHead.php');?>
          <h1 class="page-header">Account Settings</h1>


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
            <button name="submit" type="submit" class="btn btn-primary">Update Changes</button>
          </form>


          <?php include('includes/sidebarFoot.php');?>
          <?php include('includes/footer.php');?>
