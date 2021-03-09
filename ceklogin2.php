<?php
	session_start();
	require_once("connect.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cekuser = mysql_query("SELECT * FROM masuk2 WHERE username = '$username'");
	$hasil = mysql_fetch_array($cekuser);
	if(mysql_num_rows($cekuser) == 0) {
		echo "<script>alert('Username Not Found!')</script>";
		echo "<meta http-equiv='refresh' content='0;index.php?go=change'>";
	} else {
		if($password <> $hasil['password']) {
			echo "<script>alert('Incorect Password!')</script>";
		echo "<meta http-equiv='refresh' content='0;index.php?go=change'>";
		} else {
			$_SESSION['username'] = $hasil['username'];
			header('location:home.php');
		}
	}
?>