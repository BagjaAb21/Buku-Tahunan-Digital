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
$pdf->Cell(284,7,'2016/2017',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',12);
$pdf->Cell(80,6,'Nama',1,0,'C');
$pdf->Cell(50,6,'Angkatan',1,0,'C');
$pdf->Cell(68,6,'Kelas',1,0,'C');
$pdf->Cell(75,6,'TTL',1,1,'C');
 
$pdf->SetFont('Arial','',10);
 
include 'connect.php';
$result = mysql_query("SELECT * from murid AS m INNER JOIN kelas AS k ON k.id_kls = m.kode_kelas where angkatan in ('2017/2018') ORDER BY m.angkatan ASC")or die(mysql_error());
$column_Nama = "";
$column_Kelas = "";
$column_Tempat = "";
$column_Tanggal = "";
$column_Angkatan = "";

while ($row = mysql_fetch_array($result)){
  $Nama = $row["nama"];
  $Angkatan = $row["angkatan"];
  $Kelas = $row["kelas"];
  $Tempat = $row["tempat"];
  $Tanggal = $row["tanggal"];

  $column_Nama = $column_Nama.$Nama."";
  $column_Angkatan = $column_Angkatan.$Angkatan."";
  $column_Kelas = $column_Kelas.$Kelas."";
  $column_Tempat = $column_Tempat.$Tempat."";
  $column_Tanggal = $column_Tanggal.$Tanggal."";

    $pdf->Cell(80,6,$row['nama'],1,0);
    $pdf->Cell(50,6,$row['angkatan'],1,0);
    $pdf->Cell(68,6,$row['kelas'],1,0);
    $pdf->Cell(75,6,$row['tempat'].', '.$row['tanggal'],1,1);
}
 
$pdf->Output();
?>