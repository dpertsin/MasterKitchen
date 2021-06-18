<?php 

	include 'inc/header.php';
	include 'lib/User.php';
	include 'lib/syntagiclass.php';
	
	Session::checkSession();
	$user = new User();

 ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<?php 

	$loginmsg = Session::get("loginmsg");
	if(isset($loginmsg)){
		echo $loginmsg;
	}

	Session::set("loginmsg", NULL);
 ?>



		<?php
    $syntagi = new syntagiclass();
    if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['addr'])){
      $addre = $syntagi->addrecipe($_POST);
    }
   ?>
		
		
	
	
		
		
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                </div>
                <div class="panel-body">
                     <form action="" method="POST">
      <h1>ADD RECIPE</h1>
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>

      <div class="formcontainer">
      <div class="container">
        <?php 
    if(isset($userRegister)){
      echo $userRegister; }?>
        
        <label for="systatika">Συστατικα που περιλαμβάνονται:</label>
        <input type="text" placeholder="Συστατικα που περιλαμβάνονται" name="systatika" id="systatika" >
        <br>
        <label for="eidfagitoy">Ειδος Φαγητου:</label>

			<select name="eidfagitoy" id="eidfagitoy">
			  <option value="proino">Πρωινο</option>
			  <option value="mesimeriano">Μεσημεριανο</option>
			  <option value="apogeumatino">Απογευματινο</option>
			  <option value="vradino">Βραδινο</option>
			</select>
			<br>
        <label for="eidkouzina">Ειδος κουζινας:</label>
        <select name="eidkouzina" id="eidkouzina">
			  <option value="k1">kouzina 1</option>
			  <option value="k2">kouzina 2</option>
			  <option value="k3">kouzina 3</option>
			  <option value="k4">kouzina 4</option>
			</select>
			<br>
        <label for="persin">Περιγραφη Συνταγης:</label>
        <input type="text" placeholder="Περιγραφη Συνταγης" name="persin" id="persin" >
      </div>
      <button type="submit" name="addr"><strong>ADD</strong></button>

    </form>
                </div>
            </div>
		
<?php include 'inc/footer.php'; ?>
	