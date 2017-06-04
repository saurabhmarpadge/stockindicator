<?php include('includes/header.php');?>
<?php include('includes/sidebarHead.php');?>

<h1 class="page-header">Dashboard</h1>

<div class="row placeholders">
  <div class="col-xs-6 col-sm-3 placeholder" id="imgdesc">
      <img src="<?php echo BASE_URI;?>templates/img/tesla.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">

          <h4>Tesla</h4>
          <span class="text-muted">Something else</span>
          <div>
            <h5 class="imgdesc">GP</h5>
            <h5 class="imgdesc" >66</h5>
          </div>
          <div>
            <h5 class="imgdesc" >RSI</h5>
            <h5 class="imgdesc" >62</h5>
          </div>
          <div>
            <h5 class="imgdesc" >Reality</h5>
            <h5 class="imgdesc" >68</h5>
          </div>
          <div>
            <h5 class="imgdesc" >Twitter</h5>
            <h5 class="imgdesc" >1</h5>
          </div>

    </div>
  <div class="col-xs-6 col-sm-3 placeholder" id="imgdesc">
      <img src="<?php echo BASE_URI;?>templates/img/google.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
      <h4>Google</h4>
      <span class="text-muted">Something else</span>
      <div>
        <h5 class="imgdesc">GP</h5>
        <h5 class="imgdesc" >55</h5>
      </div>
      <div>
        <h5 class="imgdesc" >RSI</h5>
        <h5 class="imgdesc" >50</h5>
      </div>
      <div>
        <h5 class="imgdesc" >Reality</h5>
        <h5 class="imgdesc" >56</h5>
      </div>
      <div>
        <h5 class="imgdesc" >Twitter</h5>
        <h5 class="imgdesc" >0</h5>
      </div>
    </div>
  <div class="col-xs-6 col-sm-3 placeholder" id="imgdesc">
      <img src="<?php echo BASE_URI;?>templates/img/intel.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
      <h4>Intel</h4>
      <span class="text-muted">Something else</span>
      <div>
        <h5 class="imgdesc">GP</h5>
        <h5 class="imgdesc" >70</h5>
      </div>
      <div>
        <h5 class="imgdesc" >RSI</h5>
        <h5 class="imgdesc" >71</h5>
      </div>
      <div>
        <h5 class="imgdesc" >Reality</h5>
        <h5 class="imgdesc" >70</h5>
      </div>
      <div>
        <h5 class="imgdesc" >Twitter</h5>
        <h5 class="imgdesc" >1</h5>
      </div>
    </div>
  <div class="col-xs-6 col-sm-3 placeholder" id="imgdesc">
      <img src="<?php echo BASE_URI;?>templates/img/netflex.webp" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
      <h4>NetFlex</h4>
      <span class="text-muted">Something else</span>
      <div>
        <h5 class="imgdesc">GP</h5>
        <h5 class="imgdesc" >60</h5>
      </div>
      <div>
        <h5 class="imgdesc" >RSI</h5>
        <h5 class="imgdesc" >55</h5>
      </div>
      <div>
        <h5 class="imgdesc" >Reality</h5>
        <h5 class="imgdesc" >58</h5>
      </div>
      <div>
        <h5 class="imgdesc" >Twitter</h5>
        <h5 class="imgdesc" >1</h5>
      </div>
    </div>

</div>

<h2 class="sub-header">Historic Data</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Open</th>
        <th>High</th>
        <th>Low</th>
        <th>Close</th>
        <th>Volume</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach(getDashtable() as $data) : ?>
        <tr>
          <td><?php echo $data->Date; ?></td>
          <td><?php echo $data->Open; ?></td>
          <td><?php echo $data->High; ?></td>
          <td><?php echo $data->Low; ?></td>
          <td><?php echo $data->Close; ?></td>
          <td><?php echo $data->Volume; ?></td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</div>

<?php include('includes/sidebarFoot.php');?>
<?php include('includes/footer.php');?>
