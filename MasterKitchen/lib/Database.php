<?php 

class Database{
	private $host = "localhost";
	private $user="root"; // username tou db
	private $pass = "mysql"; //password tou db
	private $db = "masterkitchen"; //onoma tou db

	public $pdo;


	function __construct(){
		if (!isset($this->pdo)) {
			try {
				$link = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->db, $this->user,$this->pass);
					$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$link->exec("SET CHARACTER SET utf8");
					$this->pdo = $link;
			}catch(PDOException $e){
				die("Failed to connect with database".$e->getMessage());

			}
		}
	}
}


 ?>