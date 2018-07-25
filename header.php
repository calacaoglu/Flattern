<?php 
ob_start();
session_start();
include 'nedmin/netting/baglan.php';
//Belirli veriyi seçme işlemi.
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id =:id" );
$ayarsor->execute(array(
  id => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">

<title>Lisanslı SMS</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
    <div id="wrapper">
      <!-- toggle top area -->
      <div class="hidden-top">
        <div class="hidden-top-inner container">
          <div class="row">
            <div class="span12">
              <ul>
                <li><strong>We are available for any custom works this month</strong></li>
                <li><?php echo $ayarcek['ayar_adres']?></li>
                <li>Telefon <i class="icon-phone"></i> <?php echo $ayarcek['ayar_tel']?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end toggle top area -->
      <!-- start header -->
      <header>
        <div class="container ">
          <!-- hidden top area toggle link -->
          <div id="header-hidden-link">
            <a href="#" class="toggle-link" title="Süprizz :)" data-target=".hidden-top"><i></i>Open</a> 
          </div>



          <!-- end toggle link -->
          <div class="row nomargin">
            <div class="span12">
              <div class="headnav">

              </div>



            </div>
          </div>
          <div class="row">
            <div class="span4">
              <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="" class="logo" /></a>
                <h1>Flat and trendy bootstrap template</h1>
              </div>
            </div>
            <div class="span8">
              <div class="navbar navbar-static-top">
                <div class="navigation">
                  <nav>
                    <ul class="nav topnav">
                     <li class="dropdown active">
                      <a href="#">Kurumsal <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="hakkimizda.php">Hakkımızda</a></li>
                        <li><a href="finansal.php">Finansal ve Ticari bilgiler</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Hizmetlerimiz <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="index.php?p=hizmetler&alt=toplusms">TOPLU SMS</a></li>
                        <li><a href="index.php?p=hizmetler&alt=toplumail">TOPLU MAİL</a></li>
                        <li><a href="index.php?p=hizmetler&alt=toplufaks">TOPLU FAKS</a></li>
                        <li><a href="index.php?p=hizmetler&alt=seslimesaj">SESLİ MESAJ</a></li>



                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Paketler <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="tarifeler.php">Tarifelerimiz</a></li>
                      </ul>


                    </li>


                    

                    <li>
                      <a href="iletisim.php">İletişim </a>
                    </li>









                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->