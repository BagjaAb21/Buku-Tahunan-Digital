<?php
// memanggil library FPDF
require('fpdf17/fpdf.php');
include 'connect.php';
$id = $_GET['id'];
$result=mysql_query("SELECT * FROM murid WHERE id='$id'") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_Foto = "";
$column_Nama = "";
$column_Tempat = "";
$column_Tanggal = "";
$column_Sosmed = "";
$column_Pesan = "";
$column_Angkatan = "";

//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
  $Foto = $row["foto"];
  $Nama = $row["nama"];
  $Tempat = $row["tempat"];
  $Tanggal = $row["tanggal"];
  $Sosmed = $row["sosmed"];
  $Angkatan = $row["angkatan"];
    

  $column_Foto = $column_Foto.$Foto."";
  $column_Nama = $column_Nama.$Nama."";
  $column_Tempat = $column_Tempat.$Tempat."";
  $column_Tanggal = $column_Tanggal.$Tanggal."";
  $column_Sosmed = $column_Sosmed.$Sosmed."";
  $column_Angkatan = $column_Angkatan.$Angkatan."";
  
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->Image('../album/'.$column_Foto,108,10,80);

$pdf->SetFont('Arial','B',15);
$pdf->SetY(73);
$pdf->Cell(0,0,$column_Nama,0,0,'C');
$pdf->ln(10);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0,0,$column_Tempat.', '.$column_Tanggal,0,0,'C');
$pdf->ln(10);
$pdf->Cell(0,0,$column_Sosmed,0,0,'C');
$pdf->ln(10);
$pdf->Cell(0,0,'Angkatan: '.$column_Angkatan,0,0,'C');

}
$pdf->Output();

?>