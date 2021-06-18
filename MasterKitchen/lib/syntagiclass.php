<?php 
include_once 'Session.php';
//include 'Database.php';



class syntagiclass{
	private $db;
	function __construct(){
		$this->db = new Database();
	}

public function addrecipe($data)
	{
		$systatika  = $data['systatika'];
		$eidfagitoy = $data['eidfagitoy'];
		
		$eidkouzina    = $data['eidkouzina'];
		$persin = $data['persin'];

		

		$sql = "INSERT INTO sintagi (systatika,eidfagitoy,eidkouzina,persin) VALUES(:systatika,:eidfagitoy,:eidkouzina,:persin)"; 
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':systatika', $systatika);
		$query->bindValue(':eidfagitoy', $eidfagitoy);
		$query->bindValue(':eidkouzina', $eidkouzina);
		$query->bindValue(':persin', $persin);
		$result = $query->execute();
		if($result){
			$msg = "<div class='alert alert-succes'><strong>Success!</strong> Thank you! You have been registered. </div>"; 

			return $msg;

		} else {
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Sorry, there has been problem inserting your details! </div>"; 

			return $msg;
		}

		 


	}	}
	?>