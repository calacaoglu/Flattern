
<section id="featured">
  <!-- start slider -->
  <!-- Slider -->
  <div id="nivo-slider">
    <div class="nivo-slider">
      <!-- Slide #1 image -->
      <img src="img/slides/nivo/bg-1.jpg" alt="" title="#caption-1" />
      <!-- Slide #2 image -->
      <img src="img/slides/nivo/bg-2.jpg" alt="" title="#caption-2" />
      <!-- Slide #3 image -->
      <img src="img/slides/nivo/bg-3.jpg" alt="" title="#caption-3" />
    </div>
    <div class="container">
      <div class="row">
        <div class="span12">
          <!-- Slide #1 caption -->
          <div class="nivo-caption" id="caption-1">
            <div>
              <h2>Awesome <strong>features</strong></h2>
              <p>
                Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
              </p>
              <a href="#" class="btn btn-theme">Read More</a>
            </div>
          </div>
          <!-- Slide #2 caption -->
          <div class="nivo-caption" id="caption-2">
            <div>
              <h2>Fully <strong>responsive</strong></h2>
              <p>
                Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
              </p>
              <a href="#" class="btn btn-theme">Read More</a>
            </div>
          </div>
          <!-- Slide #3 caption -->
          <div class="nivo-caption" id="caption-3">
            <div>
              <h2>Very <strong>customizable</strong></h2>
              <p>
                Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
              </p>
              <a href="#" class="btn btn-theme">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end slider -->
</section>



<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="big-cta">
          <div class="cta-text">
            <h3>Bu Yıl <span class="highlight"><strong>50,000,000 SMS</strong></span> Yolladık !</h3>
          </div>
          <div class="cta floatright">
            <a class="btn btn-large btn-theme btn-rounded" href="#">Teklif İsteyin !</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="content">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="row">
          <div class="span3">
            <div class="box aligncenter">
              <div class="aligncenter icon">
                <i class="icon-briefcase icon-circled icon-64 active"></i>
              </div>
              <div class="text">
                <h6>En Uygun Fiyatlar</h6>
                <p>
                  İhtiyaçlarınıza veya hedef kitlenize rekabetçi fiyatlarla ulaşın.
                </p>
                <a href="#">Devamı..</a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="box aligncenter">
              <div class="aligncenter icon">
                <i class="icon-desktop icon-circled icon-64 active"></i>
              </div>
              <div class="text">
                <h6>Heryerden İletişim</h6>
                <p>
                  Mobil uygulama, web arayüz, masaüstü programı, API/Entegrasyon
                </p>
                <a href="#">Devamı..</a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="box aligncenter">
              <div class="aligncenter icon">
                <i class="icon-beaker icon-circled icon-64 active"></i>
              </div>
              <div class="text">
                <h6>Güvenli Haberleşme</h6>
                <p>
                  Haberleşme hizmetiniz için ileri düzey güvenlik önlemleri
                </p>
                <a href="#">Devamı..</a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="box aligncenter">
              <div class="aligncenter icon">
                <i class="icon-coffee icon-circled icon-64 active"></i>
              </div>
              <div class="text">
                <h6>Kullanıcı Dostu Arayüz</h6>
                <p>
                  Kullanımı kolay arayüzü ile tüm hizmetlerin kontrolü tek panelde.
                </p>
                <a href="#">Devamı..</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- divider -->







    <div class="row">
      <div class="span12">
        <div class="solidline">
        </div>
      </div>
    </div>
    <!-- end divider -->
    <!-- Portfolio Projects -->










    <div class="row">
      <div class="span12">
        <h4>Referanslarımız.</h4>

        <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">

          <?php 


          $refslidersor=$db->prepare("SELECT * FROM refslider WHERE refslider_durum='1'");
          $refslidersor->execute(); 


          while($refslidercek=$refslidersor->fetch(PDO::FETCH_ASSOC)){?>


            <li>
              <a href="#">
                <img src="<?php echo $refslidercek['refslider_resimyol'] ?>" class="client-logo" alt="" />
              </a>
            </li>            


          <?php  } ?>  


        </ul>
      </div>
    </div>





  </div>
</section>
<section id="bottom">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="aligncenter">
          <div id="twitter-wrapper">
            <div id="twitter">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>