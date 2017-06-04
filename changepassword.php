<?php require('core/init.php'); ?>

<?php
//Get Template & Assign Vars
$template = new Template('templates/changepassword.php');
//Display Template
echo $template;


$user = new User;

if(isset($_POST['submit'])){
  if($user->changePassword(getUser()['username'],md5($_POST['oldpassword']),$_POST['newpassword'],$_POST['newconfirmpassword'])){

  } 
}


 ?>
