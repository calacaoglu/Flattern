
<?php include'header.php';


?>
<!-- end header -->
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="inner-heading">
          <h2>Tarifelerimiz</h2>
        </div>
      </div>
      <div class="span8">
        <ul class="breadcrumb">
          <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
          <li><a href="#">Sayfa</a><i class="icon-angle-right"></i></li>
          <li class="active">Tarifelerimiz</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="content">


  <div class="container">
    <div class="row">
     


</div>
<!-- divider -->
<div class="row">
  <div class="span12">
    <div class="solidline">
    </div>
  </div>

  <?php 


     $tarifesor=$db->prepare("SELECT * FROM tarife WHERE tarife_durum='1'");
     $tarifesor->execute(); 


     while($tarifecek=$tarifesor->fetch(PDO::FETCH_ASSOC)){?>

       <div class="span4">
        <div class="pricing-box-alt">
          <div class="pricing-heading">
            <h3>Very <strong>Basic</strong></h3>
          </div>
          <div class="pricing-terms">
            <h6>&#36;15.00 / Month</h6>
          </div>
          <div class="pricing-content">
            <ul>
              <li><i class="icon-ok"></i><?php echo $tarifecek['tarife_satir1']?></li>
              <li><i class="icon-ok"></i><?php echo $tarifecek['tarife_satir2']?></li>
              <li><i class="icon-ok"></i><?php echo $tarifecek['tarife_satir3']?></li>
              <li><i class="icon-ok"></i><?php echo $tarifecek['tarife_satir4']?></li>
              <li><i class="icon-ok"></i><?php echo $tarifecek['tarife_satir5']?></li>
               <li><i class="icon-ok"></i><?php echo $tarifecek['tarife_satir6']?></li>
            </ul>
          </div>
          <div class="pricing-action">
            <a href="#" class="btn btn-theme btn-large e_tada>"></i> Bize Ulaşın</a>
          </div>
        </div>
      </div>


    <?php  } ?>    
</div>

 

</div>
</section>



<?php include'footer.php'; ?>