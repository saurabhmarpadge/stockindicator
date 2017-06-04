<?php require('core/init.php'); ?>

<?php
//Get Template & Assign Vars
$template = new Template('templates/feedback.php');
//Display Template
echo $template;

$user = new User;

if(isset($_POST['submit'])){
  $data = array();
  $data['username'] = $_POST['username'];
  $data['email'] = $_POST['email'];
  $data['rating'] = 2;
  $data['suggest'] = $_POST['suggest'];
  if($user->sendFeedback($data)){
    redirect('feedback.php', 'Thank you for the your valuable feedback', 'success');
  } else {
    redirect('feedback.php', 'Something went wrong', 'error');
  }
}

 ?>
