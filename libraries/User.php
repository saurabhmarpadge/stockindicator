<?php
class User{
	//Init DB Variable
	private $db;
	private $vd;
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
		$this->vd = new Validator;
	 }

   public function updateAccount($data){

		 $this->db->query("UPDATE users
											 SET firstname=:firstname, lastname=:lastname, email=:email, username=:username
											 WHERE username=:currentusername
		 ");
		 $this->db->bind(':firstname', $data['firstname']);
		 $this->db->bind(':lastname', $data['lastname']);
		 $this->db->bind(':email', $data['email']);
		 $this->db->bind(':username', $data['username']);
		 $this->db->bind(':currentusername', getUser()['username']);
		 if($this->db->execute()){
			 return true;
		 } else {
			 return false;
		 }
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
	* Change Password
	*/
	public function changePassword($username,$old,$new,$cnew){
		$this->db->query("SELECT * FROM users
									WHERE username = :username
									AND password = :password
		");
		//Bind Values
		$this->db->bind(':username', $username);
		$this->db->bind(':password', $old);

		$row = $this->db->single();
		if($this->db->rowCount() > 0){
			if($this->vd->passwordsMatch($new,$cnew))
			$this->db->query("UPDATE users
												SET password=:password
												WHERE username=:username
			");
			$this->db->bind(':username', $username);
			$this->db->bind(':password', md5($new));
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}

		} else {
		return false;

		}
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
	* Set FeedBack
	*/

	public function sendFeedback($data){
		$this->db->query('INSERT INTO feedback (username, email, rating, suggest)
										VALUES (:username,:email, :rating, :suggest)');
		//Bind Values
		$this->db->bind(':username', $data['username']);
		$this->db->bind(':email', $data['email']);
		$this->db->bind(':rating', $data['rating']);
		$this->db->bind(':suggest', $data['suggest']);
		//Execute
		if($this->db->execute()){
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
