
<?php include'header.php';


$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id =:id" );
$hakkimizdasor->execute(array(
  'id' => 1
));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
$baslik =  $hakkimizdacek['hakkimizda_baslik'];
$icerik =  $hakkimizdacek['hakkimizda_icerik']; 




?>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Hakkımızda</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Sayfa</a><i class="icon-angle-right"></i></li>
              <li class="active"><?php echo $baslik; ?></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
             <?php echo $icerik; ?>
            </p>
            
          </div>
          <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/works/full/image-01-full.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/image-02-full.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/image-03-full.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
     
      </div>
    </section>



    <?php include'footer.php'; ?>