
<?php include'header.php'; ?>

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>İletişim.</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">İletişim</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1104.7524345991762!2d27.189828862030712!3d38.448126478504705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7e043272d65e66ff!2sOben+Teknoloji!5e0!3m2!1str!2str!4v1531811133540" width="1578" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    <section id="content">
      

      <div class="container">
        <div class="row">
          <div class="span12">
            <h4>Aşağıdaki iletişim formunu doldurarak <strong>Bizimle iletişime geçin !</strong></h4>

            <form action="" method="post" role="form" class="contactForm">
              <div id="sendmessage">Mesajınız Yollanmıştır.Teşekkürler !</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="İsminiz" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Mail Adresiniz" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Mesajınız"></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-theme btn-large e_tada type="submit">Gönder</button>

                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>
      
      <?php include'footer.php'; ?>