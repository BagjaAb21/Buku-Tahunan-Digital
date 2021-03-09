	<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
 
 //inlcude atau memasukkan file koneksi ke database
 include('connect.php');
 
 //jika tombol tambah benar di klik maka lanjut prosesnya
 $id= $_POST['id'];
 $file=$_FILES['foto']['name'];
 $tmp_name=$_FILES['foto']['tmp_name'];
 move_uploaded_file($tmp_name, "album/".$file);
	 
 //melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
 $q = "UPDATE murid SET foto ='$file' WHERE id='$id'" or die(mysql_error());
 $p = mysql_query($q, $connect);
 //jika query update sukses
 if($p == TRUE){
  
  echo "<script>alert('Data tersimpan !')</script>";
  echo "<meta http-equiv='refresh' content='0;view.php'>";
  
 }else{
  
  echo "<script>alert('Data Gagal Tersimpan !')</script>";
  echo "<script>window.history.back()</script>";
  
 }

}else{ //jika tidak terdeteksi tombol simpan di klik

 //redirect atau dikembalikan ke halaman edit

}
?>
 