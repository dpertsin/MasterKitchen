<?php 

$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../lib/Session.php';
Session::init();

	
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<script src="inc/jquery.min.js"/></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>


<?php 

	if (isset($_GET['action']) && $_GET['action']=='logout') {
		Session::destroy();

	}

 ?>







	<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				MasterKitchen
			</a>


		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			
			<ul class="nav navbar-nav navbar-right">
			<!--	<li>Welcome<?php $name=Session::get("name");
					  if(isset($name)){echo $name;}	  	
				 ?>!</li> -->
				
				
				<?php 
				 $id=Session::get("id");
				$userlogin=Session::get("login");
				if($userlogin == true)  { ?>
				<li><a href="changepassword.php?id=<?php echo $id; ?>" target="_blank">ΡΥΘΜΗΣΕΙΣ</a></li>
				<li><a href="?action=logout" target="_blank">ΑΠΟΣΥΝΔΕΣΗ</a></li> <?php }else{ ?>
						
						<li><a href="" target="_blank">LOGIN</a></li>
				<li><a href="register.php" target="_blank">REGISTER</a></li> 
					<?php } ?>

				 
				
				</ul>
			</div><!-- /.navbar-collapse -->

			<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
	</head>

	<?php 

	$loginmsg = Session::get("loginmsg");
	if(isset($loginmsg)){
		echo $loginmsg;
	}

	Session::set("loginmsg", NULL);
 ?>


<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="panel.php">Home</a>
  <a href="syntagi.php">ΠΡΟΣΘΗΚΗ ΣΥΝΤΑΓΗΣ</a>
  <a href="#">ΑΓΑΠΗΜΕΝΕΣ ΣΥΝΤΑΓΕΣ</a></li>
  
 
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
  


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


