<?php include('includes/header.php');?>
<?php include('includes/sidebarHead.php');?>

          <h1 class="page-header">Feedback</h1>

          <form method="post" action="">
            <div class="form-group">
             <label>Username</label>
             <input type="text" class="form-control" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
             <label>Email Id</label>
             <input type="email" class="form-control" name="email" placeholder="Enter Email Id">
            </div>
            <div class="form-group">
             <label>Please Rate my Site</label>
             <br />
              <div class="btn-group" role="group" aria-label="First group">
                <button type="button" class="btn btn-default" value="1">1</button>
                <button type="button" class="btn btn-default" value="2">2</button>
                <button type="button" class="btn btn-default" value="3">3</button>
                <button type="button" class="btn btn-default" value="4">4</button>
                <button type="button" class="btn btn-default" value="5">5</button>
              </div>
            </div>
            <div class="form-group">
             <label>How would you suggest I improve it?</label><br />
             <textarea rows="4" cols="80" clas="form-control" name="suggest" placeholder="...">

            </textarea>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </form>



          <?php include('includes/sidebarFoot.php');?>
          <?php include('includes/footer.php');?>
