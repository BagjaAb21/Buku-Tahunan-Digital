<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Edit Data Alumni</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>Buku</b>Tahunan</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li>
              <a href="view.php">
                <i class="fa fa-th"></i> <span>Data Alumni</span>
              </a>
            </li>
            <li>
              <a href="tambah.php">
                <i class="fa fa-edit"></i> <span>Tambah Data Alumni</span>
              </a>
            </li>
              <li class="treeview">
              <a href="#">
                <i class="fa fa-print"></i> <span>Print</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="print_all.php">
                    <i class="fa fa-circle-o"></i> <span>All Print</span>
                  </a>
                  <a href="#"><i class="fa fa-circle-o"></i> Print Angkatan <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="print2016-2017.php"><i class="fa fa-circle-o"></i>Angkatan 2016-2017</a></li>
                    <li><a href="print2017-2018.php"><i class="fa fa-circle-o"></i>Angkatan 2017-2018</a></li>
                    </li>
                 </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Print Jurusan <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="printjurusanTKJ.php"><i class="fa fa-circle-o"></i>Jurusan TKJ</a></li>
                    <li><a href="printjurusanRPL.php"><i class="fa fa-circle-o"></i>Jurusan RPL</a></li>
                    <li><a href="printjurusanMM.php"><i class="fa fa-circle-o"></i>Jurusan MM</a></li>
                    <li><a href="printjurusanBC.php"><i class="fa fa-circle-o"></i>Jurusan BROADCASTING</a></li>
                 </ul>
                </li>
               </ul>   
            <li>
              <a href="ceklogout.php">
                <i class="fa fa-user"></i> <span>Logout</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Edit Data Alumni
            </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row" >
    <div class="col-sm-12">
      <div class="box">
      <div class="box-body">
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
   <section class="content">
        <div class="row" >
    <div class="col-sm-12">
      <div class="box">
      <div class="box-body">
   <form action="update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- membuat inputan hidden dan nilainya adalah siswa_id -->
  <form>
   <div class="form-group">
  <table cellpadding="3" cellspacing="0">
    <label>Nama Lengkap</label><br>
    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required> <!-- value diambil dari hasil query -->
    <br></label><b>Angkatan<b></label><br>
     <select name="angkatan" class="form-control" required>
      <option value="">Pilih Angkatan</option>
      <option value="2016/2017" <?php if($data['angkatan'] == '2016/2017'){ echo 'selected'; } ?>>2016/2017</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="2017/2018" <?php if($data['angkatan'] == '2017/2018'){ echo 'selected'; } ?>>2017/2018</option>
     </select>
    <br></label><b>Kode Kelas<b></label><br>
     <select name="kode_kelas" class="form-control" required>
      <option value="">Pilih Kelas</option>
      <option value="1" <?php if($data['kode_kelas'] == '1'){ echo 'selected'; } ?>>XII MM 1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="2" <?php if($data['kode_kelas'] == '2'){ echo 'selected'; } ?>>XII MM 2</option>
      <option value="3" <?php if($data['kode_kelas'] == '3'){ echo 'selected'; } ?>>XII MM 3</option>
      <option value="4" <?php if($data['kode_kelas'] == '4'){ echo 'selected'; } ?>>XII MM 4</option>
      <option value="5" <?php if($data['kode_kelas'] == '5'){ echo 'selected'; } ?>>XII BC 1</option>
      <option value="6" <?php if($data['kode_kelas'] == '6'){ echo 'selected'; } ?>>XII BC 2</option>
      <option value="7" <?php if($data['kode_kelas'] == '7'){ echo 'selected'; } ?>>XII RPL 1</option>
      <option value="8" <?php if($data['kode_kelas'] == '8'){ echo 'selected'; } ?>>XII RPL 2</option>
      <option value="9" <?php if($data['kode_kelas'] == '9'){ echo 'selected'; } ?>>XII TKJ 1</option>
      <option value="10" <?php if($data['kode_kelas'] == '10'){ echo 'selected'; } ?>>XII TKJ 2</option>
      <option value="11" <?php if($data['kode_kelas'] == '11'){ echo 'selected'; } ?>>XII TKJ 3</option>
     </select>
    <br><label>Tempat Lahir</label><br>
    <input type="text" name="tempat" class="form-control" value="<?php echo $data['tempat']; ?>" required> <!-- value diambil dari hasil query -->
   <br><label>Tanggal Lahir</label><br>
    <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>" required> <!-- value diambil dari hasil query -->
   <br><label>Sosial Media</label><br>
    <input type="text" name="sosmed" class="form-control" value="<?php echo $data['sosmed']; ?>" required> <!-- value diambil dari hasil query -->
   <br><label>Pesan dan Kesan</label><br>
    <textarea name="pesan" rows="5" class="form-control" required><?php echo $data['pesan']; ?></textarea>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td></td><br>
    <button class="btn btn-scendery" type="submit" name="simpan" value="simpan">Simpan</button>
    <button class="btn btn-scendery"><font color="red"><a href="view.php">Cancel</a></font></button>
   </tr>
   <br>
    <tr>
    <td>&nbsp;</td>
   </tr>
  </table>
 </form>
</body>
</html>
<?php
}
?>
  </div>
</div>
    </div>  
  </div>  
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>