

<?php 
include_once 'Session.php';
include 'Database.php';



class User{
	private $db;
	function __construct(){
		$this->db = new Database();
	}

public function userRegistration($data)
	{
		$name  = $data['name'];
		$username = $data['username'];
		
		$email   = $data['email'];
		$password    = md5($data['password']);
		$chk_email = $this->emailCheck($email);

		if ($name == "" OR $username == "" OR $email == "" OR $password == "") {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Field must not be Empty</div>";
			return $msg;
		}

		if (strlen($username) < 3) {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Username is too Short! </div>"; 

			return $msg;

			//https://www.php.net/manual/en/function.preg-match.php
		} elseif(preg_match('/[^a-z0-9_-]+/i', $username)){

			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Username must only contain alphanumerical,dashes and underscores! </div>";

		}

		if (filter_var($email, 'FILTER_VALITADE_EMAIL'==false)) {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> The email adress not valid! </div>"; 

			return $msg;
		}

		if ($chk_email == true) {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> The e-mail already exist! </div>";
			return $msg;
		}

		$sql = "INSERT INTO users (name,username,email,password) VALUES(:name,:username,:email,:password)"; 
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':username', $username);
		$query->bindValue(':email', $email);
		$query->bindValue(':password', $password);
		$result = $query->execute();
		if($result){
			$msg = "<div class='alert alert-succes'><strong>Success!</strong> Thank you! You have been registered. </div>"; 

			return $msg;

		} else {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Sorry, there has been problem inserting your details! </div>"; 

			return $msg;
		}

		 


	}	

	public function emailcheck($email)
	{
		$sql = "SELECT email FROM users WHERE email =:email";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':email', $email);
		$query->execute();
		if ($query->rowCount()>0) {
			 return true;
		}
		else {
			return false;
		}
	}

	public function getLoginUser($email, $password)
	{
		$sql = "SELECT * FROM users WHERE email =:email AND password = :password LIMIT 1";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':email', $email);
		$query->bindValue(':password', $password);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function userLogin($data)
	{
		$email = $data['email'];
		$password    = md5($data['password']);
		$chk_email = $this->emailCheck($email);
		

		if ($email == ""  OR $password == "") {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Field must not be Empty</div>";
			return $msg;
		}
		if (filter_var($email, 'FILTER_VALITADE_EMAIL'==false)) {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> The email adress not valid! </div>"; 

			return $msg;
		}

		if ($chk_email == false) {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> The e-mail not exist! </div>";
			return $msg;
		}

		$result=$this->getLoginUser($email,$password);
		if($result){
			Session::init();
			Session::set("login", true);
			Session::set("id", $result->id);
			Session::set("name", $result->name);
			Session::set("username", $result->username);
			Session::set("loginmsg", "<div class='alert alert-succes'><strong>Success!</strong> You are logged in! </div>");
			header("Location: panel.php");
			
		}
		else{
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Data not found! </div>";
			return $msg;
		}
	}


 public function getUserData()
 {
 	$sql = "SELECT * FROM users ORDER BY id DESC";
 	$query = $this->db->pdo->prepare($sql);
 	$query->execute();
 	$result = $query->fetchAll();
 	return $result;
 }

  public function getUserById($id)
  {
  	$sql = "SELECT * FROM users WHERE id= :id LIMIT 1";
 	$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':id', $id);
		//$query->bindValue(':password', $password);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		return $result;
  }


public function updateUserData($id, $data)
	{
		$name  = $data['name'];
		$username = $data['username'];
		$email   = $data['email'];
		$id = $data['id']; 
		
		

		if ($name == "" OR $username == "" OR $email == "") {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Field must not be Empty</div>";
			return $msg;
		}

		

		$sql = "UPDATE users SET 
								 name = :name,
								 username = :username,
								 email = :email
								 WHERE id =: id"; 
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':username', $username);
		$query->bindValue(':email', $email);
		$query->bindValue(':id', $id);
		$result = $query->execute();
		if($result){
			$msg = "<div class='alert alert-succes'><strong>Success!</strong> Thank you! You have been registered. </div>"; 

			return $msg;

		} else {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Sorry, there has been problem inserting your details! </div>"; 

			return $msg;
		}

		 


	} }	
 ?>