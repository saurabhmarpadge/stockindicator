<?php include('includes/header.php');?>
<?php include('includes/sidebarHead.php');?>

          <h1 class="page-header">Change Password</h1>


          <form method="post" action="">
            <div class="form-group">
             <label>Old Password*</label>
             <input type="password" class="form-control" name="oldpassword" placeholder="Enter Old Password">
            </div>
            <div class="form-group">
             <label>New Password*</label>
             <input type="password" class="form-control" name="newpassword" placeholder="Enter New Password">
            </div>
            <div class="form-group">
             <label>New Confirm Password*</label>
             <input type="password" class="form-control" name="newconfirmpassword" placeholder="Enter New Confirm Password">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Update Password</button>
          </form>


          <?php include('includes/sidebarFoot.php');?>
          <?php include('includes/footer.php');?>
