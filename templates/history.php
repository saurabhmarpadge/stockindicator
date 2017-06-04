<?php include('includes/header.php');?>
<?php include('includes/sidebarHead.php');?>

<h1 class="page-header">Dashboard</h1>

<h2 class="sub-header">History</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Tran id</th>
        <th>Quote</th>
        <th>Buying Price</th>
        <th>Selling Price</th>
        <th>No of Stocks</th>
        <th>Profit</th>
        <th>Loss</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1001</td>
        <td>INTC</td>
        <td>50</td>
        <td>100</td>
        <td>10</td>
        <td>500</td>
        <td>0</td>
      </tr>
      <tr>
        <td>1002</td>
        <td>GOOG</td>
        <td>20</td>
        <td>10</td>
        <td>5</td>
        <td>0</td>
        <td>50</td>
      </tr>
    </tbody>
  </table>
</div>

<?php include('includes/sidebarFoot.php');?>
<?php include('includes/footer.php');?>
