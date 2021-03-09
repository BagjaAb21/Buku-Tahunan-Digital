<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Detail Alumni</title>
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
            <li class="active">
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
            Data Alumni
            </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row" >
    <div class="col-sm-12">
      <div class="box">
      <div class="box-body table-responsive">
        <div class="col-sm-8">
    <table class="table table-hover">
    <?php
    $id = $_GET['id'];
    $q=mysql_query("SELECT * FROM murid INNER JOIN kelas ON murid.kode_kelas = kelas.id_kls WHERE murid.id = $id");
    while($data=mysql_fetch_object($q))
  {
    ?>
    <tbody>
    <tr>
      <td><b>Nama</b></td>
      <td><?php echo $data->nama; ?></td>
    </tr>
    <tr>
      <td><b>Angkatan</b></td>
      <td><?php echo $data->angkatan; ?></td>
    </tr>
    <tr>
      <td><b>Kelas</b></td>
      <td><?php echo $data->kelas; ?></td>
    </tr>
    <tr>
      <td><b>TTL</b></td>
      <td><?php echo $data->tempat; ?>, <?php echo $data->tanggal; ?></td>
    </tr>
    <tr>
      <td><b>Sosmed</b></td>
      <td><?php echo $data->sosmed; ?></td>
    </tr>
    <tr>
      <td><b>Pesan & Kesan</b></td>
      <td><?php echo $data->pesan; ?></td>
    </tr>
    <tr>
      <td><b>Foto</b></td>
      <td><img src="../album/<?php echo $data->foto; ?>" width="200"></td>
    </tr>
    </tbody>
    
    </table>
  </div>
  <div class="col-sm-4">
    <a href="edit.php?id=<?php echo $data->id; ?>" class="btn btn-block btn-success">Edit</a>
    <br>
    <a href="editfoto.php?id=<?php echo $data->id; ?>" class="btn btn-block btn-success"">Edit Foto</a>
    <br>
    <a href="print.php?id=<?php echo $data->id; ?>" class="btn btn-block btn-primary">Print</a>
  </div>
  </div>
  <?php 
  }
  ?>
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