<?php
class User{
	//Init DB Variable
	private $db;

	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }

	/*
	 * Register User
	 */
	public function register($data){
			//Insert Query
			$this->db->query('INSERT INTO users (firstname, lastname, email, username, password)
											VALUES (:firstname, :lastname, :email, :username, :password)');
			//Bind Values
			$this->db->bind(':firstname', $data['firstname']);
			$this->db->bind(':lastname', $data['lastname']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':username', $data['username']);
			$this->db->bind(':password', $data['password']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
			//echo $this->db->lastInsertId();
	}

 	/*
	 * User Login
	 */
	public function login($username, $password){
		$this->db->query("SELECT * FROM users
									WHERE username = :username
									AND password = :password
		");
		//Bind Values
		$this->db->bind(':username', $username);
		$this->db->bind(':password', $password);

		$row = $this->db->single();
		//Check Rows
			if($this->db->rowCount() > 0){
			$this->setUserData($row);
			return true;

		} else {
			return false;

		}
	}

	/*
	 * Set User Data
	 */
	private function setUserData($row){
		$_SESSION['is_logged_in'] = true;
		$_SESSION['user_id'] = $row->id;
		$_SESSION['username'] = $row->username;
		$_SESSION['firstname'] = $row->firstname;
	}

	/*
	 * User Logout
	*/
	public function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['firstname']);
		return true;
	}


}
