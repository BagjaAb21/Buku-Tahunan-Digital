<?php
// memanggil library FPDF
require('fpdf17/fpdf.php');
include 'connect.php';

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(284,7,'SEKOLAH MENENGAH KEJURUAN INFOKOM BOGOR',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(284,7,'DAFTAR ALUMNI',0,1,'C');
 $pdf->SetFont('Arial','B',12);
$pdf->Cell(284,7,'MULTIMEDIA',0,1,'C'); 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(70,6,'Nama',1,0,'C');
$pdf->Cell(38,6,'Angkatan',1,0,'C');
$pdf->Cell(57,6,'Kelas',1,0,'C');
$pdf->Cell(55,6,'TTL',1,0,'C');
$pdf->Cell(55,6,'Sosmed',1,1,'C');
 
$pdf->SetFont('Arial','',10);
 
include 'connect.php';
$result = mysql_query("SELECT murid.nama, murid.kode_kelas, murid.tempat, murid.tanggal, murid.sosmed, murid.angkatan, kelas.kelas FROM murid LEFT JOIN kelas on murid.kode_kelas=kelas.id_kls WHERE kelas in ('XII Multimedia 1','XII Multimedia 2','XII Multimedia 3','XII Multimedia 4')")or die(mysql_error());
$column_Nama = "";
$column_Kelas = "";
$column_Tempat = "";
$column_Tanggal = "";
$column_Sosmed = "";
$column_Angkatan = "";

while ($row = mysql_fetch_array($result)){
  $Nama = $row["nama"];
  $Angkatan = $row["angkatan"];
  $Kelas = $row["kelas"];
  $Tempat = $row["tempat"];
  $Tanggal = $row["tanggal"];
  $Sosmed = $row["sosmed"];

  $column_Nama = $column_Nama.$Nama."";
  $column_Angkatan = $column_Angkatan.$Angkatan."";
  $column_Kelas = $column_Kelas.$Kelas."";
  $column_Tempat = $column_Tempat.$Tempat."";
  $column_Tanggal = $column_Tanggal.$Tanggal."";
  $column_Sosmed = $column_Sosmed.$Sosmed."";

    $pdf->Cell(70,6,$row['nama'],1,0);
    $pdf->Cell(38,6,$row['angkatan'],1,0);
    $pdf->Cell(57,6,$row['kelas'],1,0);
    $pdf->Cell(55,6,$row['tempat'].', '.$row['tanggal'],1,0);
    $pdf->Cell(55,6,$row['sosmed'],1,1); 
}
 
$pdf->Output();
?>