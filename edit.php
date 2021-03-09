<html>
<head>
<title>Form input</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<h3>Edit Data Siswa</h3>
 
 <?php
 
 include('connect.php');
 
 $id = $_GET['id'];
 
 $show = mysql_query("SELECT * FROM murid WHERE id='$id'");
 
 if(mysql_num_rows($show) == 0){
  
  
 }else{
 
  $data = mysql_fetch_assoc($show); 
 ?>
 
 <form action="update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- membuat inputan hidden dan nilainya adalah siswa_id -->
  <table cellpadding="3" cellspacing="0">
   <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Kode Kelas</td>
    <td>:</td>
    <td>
     <select name="kode_kelas" required>
      <option value="">Pilih Kelas</option>
      <option value="1" <?php if($data['kode_kelas'] == '1'){ echo 'selected'; } ?>>XII MM 1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="2" <?php if($data['kode_kelas'] == '2'){ echo 'selected'; } ?>>XII MM 2</option>
      <option value="3" <?php if($data['kode_kelas'] == '3'){ echo 'selected'; } ?>>3</option>
      <option value="4" <?php if($data['kode_kelas'] == '4'){ echo 'selected'; } ?>>4</option>
      <option value="5" <?php if($data['kode_kelas'] == '5'){ echo 'selected'; } ?>>5</option>
      <option value="6" <?php if($data['kode_kelas'] == '6'){ echo 'selected'; } ?>>6</option>
      <option value="7" <?php if($data['kode_kelas'] == '7'){ echo 'selected'; } ?>>7</option>
      <option value="8" <?php if($data['kode_kelas'] == '8'){ echo 'selected'; } ?>>8</option>
      <option value="9" <?php if($data['kode_kelas'] == '9'){ echo 'selected'; } ?>>9</option>
      <option value="10" <?php if($data['kode_kelas'] == '10'){ echo 'selected'; } ?>>10</option>
      <option value="11" <?php if($data['kode_kelas'] == '11'){ echo 'selected'; } ?>>11</option>
     </select>
    </td>
   </tr>
   <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text" name="tempat" size="30" value="<?php echo $data['tempat']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="date" name="tanggal" size="30" value="<?php echo $data['tanggal']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Sosial Media</td>
    <td>:</td>
    <td><input type="text" name="sosmed" size="30" value="<?php echo $data['sosmed']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Pesan dan Kesan</td>
    <td>:</td>
    <td>
      <input type="text" name="pesan" size="30" value="<?php echo $data['pesan']; ?>" required>
    </td> 
    
    <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input type="submit" name="simpan" value="Simpan"></td>
   </tr>
  </table>
 </form>
</body>
</html>
<?php
}
?>