
<?php
$companyid=2;
function setGraph($id){
  $GLOBALS['companyid'] = $id;
  //  die($GLOBALS['companyid']);
}
/*
 * Get  # of companies
 */
function getCompanies(){
  $db = new Database;

  $db->query('SELECT * FROM company');
  //Assign Result Set
  $results = $db->resultset();

  return $results;
}

function getGraph(){
  $db = new Database;
  $db->query('SELECT graph.gp,graph.rsi,graph.reality,graph.twitter,graph.ondate FROM graph WHERE graph.companyid =:companyid');
  $db->bind(':companyid', $GLOBALS['companyid']);

  //Assign Result Set
  $results = $db->resultset();

  $data = array();
  foreach ($results as $row) {
      $data[] = $row;
  }
  return $data;
}
