<?php require('core/init.php'); ?>

<?php
//Get Template & Assign Vars
$template = new Template('templates/settings.php');
//Display Template
echo $template;
$user = new User;
if(isset($_POST['submit'])){
  $data = array();
  $data['firstname'] = $_POST['firstname'];
  $data['lastname'] = $_POST['lastname'];
  $data['email'] = $_POST['email'];
  $data['username'] = $_POST['username'];
  if($user->updateAccount($data)){

  }
}
 ?>
