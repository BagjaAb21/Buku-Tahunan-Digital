<?php
$srvr="localhost";
$db="buta";
$usr="root";
$pwd="";

$pdo = new PDO('mysql:host='.$srvr.';dbname='.$db, $usr, $pwd);

$connect = mysql_connect("$srvr", "$usr", "$pwd");
mysql_select_db("$db");

?>
