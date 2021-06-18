<!DOCTYPE html>
<html>
  <title>Register</title>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <script src="inc/jquery.min.js"/></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      }
      button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.password {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.password {
      display: block;
      float: none;
      }
    </style>
  </head>
  <?php include 'lib/User.php'; ?>
  <?php
    $user = new User();
    if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['register'])){
      $userRegister = $user->userRegistration($_POST);
    }
   ?>

  <body>

   
    
    <form action="" method="POST">
      <h1>SIGN UP</h1>
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>

      <div class="formcontainer">
      <div class="container">
        <?php 
    if(isset($userRegister)){
      echo $userRegister; }?>
        
        <label for="name"><strong>Name</strong></label>
        <input type="text" placeholder="Enter name" name="name" id="name" >
        <label for="username"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" >
        <label for="email"><strong>E-mail</strong></label>
        <input type="text" placeholder="Enter E-mail" name="email" id="email" >
        <label for="password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" id="pasw" >
      </div>
      <button type="submit" name="register"><strong>SIGN UP</strong></button>

     <br> <a href="login.php">You already have an account? Please Sign In!</a>
      
    </form>
  </body>
</html>

<?php include 'inc/footer.php'; ?>