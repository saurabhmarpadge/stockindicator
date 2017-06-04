
<?php

function setGraph($id){
$_SESSION['companyid'] = $id;
  //die($GLOBALS['companyid']);
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
  $db->bind(':companyid', $_SESSION['companyid']);

  //Assign Result Set
  $results = $db->resultset();

  $data = array();
  foreach ($results as $row) {
      $data[] = $row;
  }
  return $data;
}

function getDetails($user){
  $db = new Database;
	$db->query('SELECT * FROM users
						 WHERE username=:username');
	$db->bind(':username', $user);
	//Assign Result Set
	$results = $db->resultset();
	return $results;
}
