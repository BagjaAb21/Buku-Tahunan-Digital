<html>
<head>
	<title>Form edit gambar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php
 //proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
 
 //include atau memasukkan file koneksi ke database
 include('connect.php');
 
 //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
 $id= $_GET['id'];
 
 //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
 $show = mysql_query("SELECT * FROM murid WHERE id='$id'");
 
 //cek apakah data dari hasil query ada atau tidak
 if(mysql_num_rows($show) == 0){
  
  //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
  
 }else{
 
  //jika data ditemukan, maka membuat variabel $data
  $data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
 
	 ?>
	 	<form action="cekfoto.php" method="post" enctype="multipart/form-data">
  		<input type="hidden" name="id" value="<?php echo $id; ?>">
	<label>Foto</label><br>
                    <input type="file" name="foto" id="foto" required="required" value="<?php echo $data['foto']; ?>"/><br>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input type="submit" name="simpan" value="Simpan"></td>
  </tr>
</form>
</body>
</html>
<?php
}
?>