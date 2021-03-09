<?php
	 include'connect.php';

	 $nama  =$_POST['nama'];
	 $kode_kelas  =$_POST['kode_kelas'];
	 $tempat   =$_POST['tempat'];
	 $tanggal =$_POST['tanggal'];
	 $sosmed   =$_POST['sosmed'];
	 $pesan   =$_POST['pesan'];
	 $foto="murid" .round(microtime(true)).".".$_FILES['foto']['name'];
	 $angkatan  =$_POST['angkatan'];
	 $upload=move_uploaded_file($_FILES['foto']['tmp_name'],"../album/".$foto);
	 
	 $input = mysql_query("INSERT INTO murid VALUES ( '$nama','$tempat', '$tanggal', '$sosmed', '$pesan', '$foto', '$kode_kelas', NULL,'$angkatan')")or die(mysql_error());
 if ($input) {
    header('location:view.php?message=success');

 }	
 ?>