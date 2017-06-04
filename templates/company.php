<?php include('includes/header.php');?>
<?php include('includes/sidebarHead.php');?>

<h1 class="page-header">Search</h1>
<style>
  .chart-container{
    width: 500px;
    height: auto;
  }
</style>

        <div class="container">
          <form class="form-inline" role="form" method="post" action="company.php">
          							<div class="form-group" >
          								<label>Select Company : </label>
          								<select class="form-control" name="companyid" style="width:200px;">
                            <option value="1">Select</option>
                            <?php foreach(getCompanies() as $company) : ?>
                            <option value="<?php echo $company->companyid; ?>"><?php echo $company->companyname;?></option>
                            <?php endforeach; ?>
          							  </select>
          							</div>
                      <button id="do_search" name="do_search"type="submit" class="btn btn-default">Search</button>
                      </form>
        </div>
        <!-- Main jumbotron for a primary marketing message or call to action -->
<h3>Results Showing for:-
  <?
  if(isset($_POST['do_search'])){
     foreach(getCompaniesName() as $company){
       echo $company->companyname;
     }

  }
  ?>


</h3>
          <div class="container">
            <!-- Example row of columns -->
            <div class="row">
              <div class="col-md-12">
                <h2>Reality</h2>
                <div class="chart-container">
                  <canvas id="realitychart"></canvas>
                </div>
              </div><br>
              <div class="col-md-5">
                <h2>GP</h2>
                <div class="chart-container">
                  <canvas id="gpchart"></canvas>
                </div>
             </div>
             </div>
             <div class="row">
               <div class="col-md-12">
                 <h2>RSI</h2>
                 <div class="chart-container">
                   <canvas id="rsichart"></canvas>
                 </div>
                 <p>
               </div>
              <br>
              <div class="col-md-12">
                <h2>Twitter</h2>
                <div class="chart-container">
                  <canvas id="twitterchart"></canvas>
                </div>
              </div>

            </div>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Buy Stock &raquo;</a></p>
          <hr>


<?php include('includes/sidebarFoot.php');?>
<?php include('includes/footer.php');?>
