  <?php 
include('connect.php');
?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BUKU TAHUNAN DIGITAL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="BukuTahunanDigital" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="BukuTahunanDigital" />
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
    
  <div class="fh5co-loader"></div>
  
  <div id="page">
  <nav class="fh5co-nav" role="navigation">
    <div class="top-menu">
      <div class="container">
        <div class="row">
          <div class="col-xs-2">
          <img src="images/logo.png" class="img-responsive img-circle margin" style="display:inline" alt="logo" width="50" height="50"> 
          </div>
          <div class="col-xs-10 text-right menu-1">
            <ul>
            <li><a href="home.php">Home</a></li>
              <li><a href="profile.php">Profile</a></li>
               <li class="has-dropdown active">
                <a href="gallery.php">Gallery</a>
                <ul class="dropdown">
                  <li><a href="gallery2016-2017.php">Angkatan 2016-2017</a></li>
                  <li><a href="gallery2017-2018.php">Angkatan 2017-2018</a></li>
                </ul>
              </li>
              <li><a href="masukadmin.php">Admin</a></li>
              <li class="btn-cta"><a href="ceklogout2.php"><span>Logout</span></a></li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </nav>

  <aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
      <ul class="slides">
        <li style="background-image: url(images/img_bg_1.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
             <div class="slider-text-inner desc">
                <h2 class="heading-section">XII TEKNIK KOMPUTER JARINGAN 2</h2>
                <p class="fh5co-lead">ANGKATAN<i class="icon-heart3"></i><font color="red"> 2017/2018</font></a></p>
              </div>
            </div>
          </div>
        </li>
        </ul>
      </div>
  </aside>
  <br>
<?php
  $q=mysql_query("SELECT * FROM murid where kode_kelas= 10 and angkatan in ('2017/2018')ORDER BY nama ASC");
  $jml_kolom=4;
 
  $cnt = 0;
   
  while($data=mysql_fetch_object($q))
  {
      if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>

        <div class="col-lg-4 col-md-4">
          <div class="fh5co-blog animate-box">
            <center><img class="img-responsive" src="album/<?php echo $data->foto; ?>"></center>
            <div class="blog-text">
              <center><h3><b><?php echo $data->nama; ?></b></h3></center>
              <center><h5><?php echo $data->tempat; ?>, <?php echo $data->tanggal; ?></h5></center>
              <center><h5><?php echo $data->sosmed; ?></h5></center>
              <center><h5><?php echo $data->pesan; ?></h5></center>
            </div> 
          </div>
        </div>
  <?php
  }
  ?>
 

  <footer id="fh5co-footer" role="contentinfo">
    <div class="container">
      <div class="row row-pb-md">
        <div class="col-md-3 fh5co-widget">
          <h4>Buku Tahunan Digital</h4>
          <p>Menjadi yang sesuatu yang disaat kenangan masa putih - abu menghantui.</p>
        </div>
        <div class="col-md-3 col-md-push-1">
          <h4>Navigation</h4>
          <ul class="fh5co-footer-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="admin.php">Admin</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-md-push-1">
          <h4>Contact Information</h4>
          <ul class="fh5co-footer-links">
            <li>Jl. Letjen Ibrahim Adjie, <br> No. 178 </li>
            <li><a href="tel://02518331225">+ (0251)8331225 </a></li>
            <li><a href="mailto:smk.infokom@gmail.com">smk.infokom@gmail.com</a></li>
            <li><a href="http://www.smkinfokom.sch.id">www.smkinfokom.sch.id</a></li>
          </ul>
        </div>

      <div class="row copyright">
        <div class="col-md-12 text-center">
          <p>
            <br>
            <small class="block">&copy; 2019. create by Bagja,Cut,Dania All Rights Reserved.</small>
          </p>
        </div>
      </div>

    </div>
  </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Stellar Parallax -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>
  <!-- countTo -->
  <script src="js/jquery.countTo.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

  </body>
</html>

