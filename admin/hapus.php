<?php
 include("connect.php");
 ?>

<?php
//$data=mysql_fetch_array(mysql_query("SELECT * FROM murid where id='$_GET[id]'"));
$data=mysql_fetch_array("SELECT * FROM murid where id='$_GET[id]'");
if($data['foto'] != "")
	unlink("../album/$data[foto]");
mysql_query("DELETE FROM murid where id='$_GET[id]'")or die(mysql_error());
echo"Data Berhasil dihapus";
header("location:view.php");
?>