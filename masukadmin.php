<?php
  session_start();
  session_destroy();
?>
<?php
session_start();
  if(isset($_SESSION['login'])){
    header('location:tambah.php');}
    require_once("connect.php");  
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Login Admin</title>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
 	<div id="container">
  <div class="login-logo">
    <a href="masukadmin.html"></a>
  </div>
  <center><h2 class="form-heading">LOGIN ADMIN</h2>
  <div class="app-cam">
    <form action="ceklogin.php" class="form-conatiner" method="post">
    <div class="imgcontainer">
    <img src="assets/user8.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><font color="white"><b>Username</b></font></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><font color="white"><b>Password</b></font></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Masuk</button>
    <!-- <input type="checkbox" checked="checked"><span>Ingat Saya</span> -->
  </div>  
  <div class="container">
    <a href="home.php"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
  </form>
  </div>
  </div>
</body>
</html>