

<?php  

include 'inc/header.php';
include 'lib/User.php';
Session::checkSession();



?>
	<head>
		

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	</head>

	<?php 

	$loginmsg = Session::get("loginmsg");
	if(isset($loginmsg)){
		echo $loginmsg;
	}

	Session::set("loginmsg", NULL);
 ?>



		
		<div class="panel panel-default">

			<div class="panel-heading">
				<h2>User List <span class="pull-right"><strong>Welcome!</strong>
				<?php $name = Session::get("username");
				if(isset($name)){
					echo $name;
				} ?>
				</span></h2>
			</div>
			


			<div class="panel-body">
				<table class="table table-striped">
					<th width="20%">Serial</th>
					<th width="20%">Name</th>
					<th width="20%">Username</th>
					<th width="20%">Email Adress</th>
					<th width="20%">Action</th>
					<?php 

						$user = new User();
						$userdata = $user->getUserData();
						if($userdata){
							$i=0;
							foreach ($userdata as $sdata) {
						 		$i++;
							
					 ?>

					 <tr>
					 	<td>
					 		<?php  echo $i; ?>
					 	</td>
					 	<td> <?php echo $sdata['name']; ?></td>
					 	<td> <?php echo $sdata['username']; ?></td>
					 	<td> <?php echo $sdata['email']; ?></td>

					 	<td> <a class="btn btn-primary" href="changepassword.php?id=<?php echo $sdata['id']; ?>"> View</a></td>
					 	
					 </tr>


					<?php }} else{ ?>
					<tr><td colspan="5"> <h2>No User Data Found...</h2></td></tr>
				<?php } ?>
				 </table>
			</div>
		</div>
	




<?php include 'inc/footer.php'; ?>
