	<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
 
 //inlcude atau memasukkan file koneksi ke database
 include('connect.php');
 
 //jika tombol tambah benar di klik maka lanjut prosesnya
 $id= $_POST['id'];
 $nama   = $_POST['nama']; //membuat variabel $id dan datanya dari inputan hidden id
 $kode_kelas  = $_POST['kode_kelas']; //membuat variabel $nim dan datanya dari inputan NIM
 $tempat  = $_POST['tempat']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
 $tanggal  = $_POST['tanggal']; //membuat variabel $kelas dan datanya dari inputan dropdown Kelas
 $sosmed = $_POST['sosmed']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
 $pesan = $_POST['pesan'];
 $angkatan = $_POST['angkatan'];
 
 //melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
 $update = mysql_query("UPDATE murid SET nama ='$nama', kode_kelas='$kode_kelas', nama='$nama', tempat='$tempat', tanggal='$tanggal', sosmed='$sosmed', pesan='$pesan', angkatan = '$angkatan'  WHERE id='$id'") or die(mysql_error());
 
 //jika query update sukses
 if($update){
  
  echo "<script>alert('Data tersimpan !')</script>";
  echo "<meta http-equiv='refresh' content='0;view.php'>";
  
 }else{
  
  echo "<script>alert('Data Gagal Tersimpan !')</script>";
  echo "<meta http-equiv='refresh' content='0;edit.php'>";
  
 }

}else{ //jika tidak terdeteksi tombol simpan di klik

 //redirect atau dikembalikan ke halaman edit

}
?>
 