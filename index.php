<?php
  session_start();
  session_destroy();
?>
<?php
session_start();
  if(isset($_SESSION['login'])){
    header('location:home.php');}
    require_once("config.php");  
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body bgcolor= #357385 >
 	<div id="container">
  <div class="login-logo">
    <a href="home.html"></a>
  </div>
  <center><font color="white"><h2>LOGIN</h2></font>
  <div class="app-cam">
    <form action="ceklogin2.php" class="form-conatiner" method="post">
    <div class="imgcontainer">
    <img src="assets/userindex.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><font color="white"><b>Username</b></font></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><font color="white"><b>Password</b></font></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Masuk</button>
    
  </div>
  </form>
  </div>
  </div>
</body>
</html>