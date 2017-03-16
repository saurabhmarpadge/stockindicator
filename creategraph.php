<?php require('core/init.php'); ?>
<?php
header('Content-Type: applications/json');
  $data = getGraph();
  print json_encode($data);

?>
