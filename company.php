<?php require('core/init.php'); ?>

<?php

if(isset($_POST['do_search'])){
	setGraph($_POST['companyid']);
}

//Get Template & Assign Vars
$template = new Template('templates/company.php');
//Display Template
echo $template;

 ?>
