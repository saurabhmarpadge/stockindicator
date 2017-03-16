<?php require('core/init.php'); ?>

<?php
//die("Unable to connect to 1");
//Create User Object
$user = new User;
//die("Unable to connect to 2");
//Create Validator Object
$validate = new Validator;

if(isset($_POST['register'])){
	//Create Data Array
	$data = array();
	$data['firstname'] = $_POST['firstname'];
	$data['lastname'] = $_POST['lastname'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = md5($_POST['password']);
	$data['password2'] = md5($_POST['password2']);

	//Required Fields
	$field_array = array('firstname','lastname','email','username','password','password2');
//die("Unable to connect to 3");
	if($validate->isRequired($field_array)){
		if($validate->isValidEmail($data['email'])){
			if($validate->passwordsMatch($data['password'],$data['password2'])){
					//Register User
					if($user->register($data)){
						$user->login($data['username'], $data['password']);
						redirect('dashboard.php', 'You are registered and can now log in', 'success');
					} else {
						redirect('index.php', 'Something went wrong with registration', 'error');
					}
			} else {
				redirect('index.php', 'Your passwords did not match', 'error');
			}
		} else {
			redirect('index.php', 'Please use a valid email address', 'error');
		}
	} else {
		redirect('index.php', 'Please fill in all required fields', 'error');
	}
}

//Get Template & Assign Vars
$template = new Template('templates/register.php');

//Assign Vars

//Display template
echo $template;
?>
