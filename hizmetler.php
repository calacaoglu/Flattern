
<?php

$altsayfa = $_GET['alt'];

if($altsayfa == 'toplusms') {

  $toplusmssor=$db->prepare("SELECT * FROM toplusms where toplusms_id =:id" );
  $toplusmssor->execute(array(
    'id' => 1
  ));
  $toplusmscek=$toplusmssor->fetch(PDO::FETCH_ASSOC);
  $baslik =  $toplusmscek['toplusms_baslik'];
  $icerik =  $toplusmscek['toplusms_icerik']; 

} else if($altsayfa == 'toplumail') {

  $toplumailsor=$db->prepare("SELECT * FROM toplumail where toplumail_id =:id" );
  $toplumailsor->execute(array(
    'id' => 1
  ));
  $toplumailcek=$toplumailsor->fetch(PDO::FETCH_ASSOC);
  $baslik =  $toplumailcek['toplumail_baslik'];
  $icerik =  $toplumailcek['toplumail_icerik']; 
  
} else if($altsayfa == 'toplufaks') {

  $toplufakssor=$db->prepare("SELECT * FROM toplufaks where toplufaks_id =:id" );
  $toplufakssor->execute(array(
    'id' => 1
  ));
  $toplufakscek=$toplufakssor->fetch(PDO::FETCH_ASSOC);
  $baslik =  $toplufakscek['toplufaks_baslik'];
  $icerik =  $toplufakscek['toplufaks_icerik']; 
  
} else if($altsayfa == 'seslimesaj') {

  $seslimesaj=$db->prepare("SELECT * FROM seslimesaj where seslimesaj_id =:id" );
$seslimesaj->execute(array(
  'id' => 1
));
$seslimesajcek=$seslimesaj->fetch(PDO::FETCH_ASSOC);
  $baslik =  $seslimesajcek['seslimesaj_baslik'];
  $icerik =  $seslimesajcek['seslimesaj_icerik']; 
  
} 


?>

<title><?php echo $baslik; ?></title>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2><?php echo $baslik; ?></h2>
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



    