<?php require_once 'header.php'; ?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">İLETİŞİM</h1>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="#" class="p-5 bg-white border">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Ad soyad</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Ad soyad">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email ">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Konu</label>
                  <input type="text" id="subject" class="form-control" placeholder="Konu giriniz">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Mesaj</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Mesaj giriniz"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Gönder" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h6 text-black mb-3 text-uppercase">İletişim Bilgileri</h3>
              <p class="mb-0 font-weight-bold">Adres</p>
              <p class="mb-4"><?php echo $ayarcek['adres'] ?></p>

              <p class="mb-0 font-weight-bold">Telefon</p>
              <p class="mb-4"><a href="#"><?php echo $ayarcek['telefon'] ?></a></p>

              <p class="mb-0 font-weight-bold">Email </p>
              <p class="mb-0"><a href="#"><?php echo $ayarcek['email'] ?></a></p>

            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>EKİBİMİZ</h2>
    
          </div>
        </div>
      </div>
      <div class="row">


<?php


$ekip=$baglanti->prepare("SELECT * from ekip ");


$ekip->execute();

while ($ekipcek=$ekip->fetch(PDO::FETCH_ASSOC)) {

 ?>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="resimler/<?php echo $ekipcek['resim'] ?>" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4"><?php echo $ekipcek['adsoyad'] ?></h2>
                <span class="d-block mb-3 text-white-opacity-05"><?php echo $ekipcek['gorev'] ?></span>
                
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>
<?php } ?>
        
          

          

        </div>
    </div>
    </div>
    
<?php require_once 'footer.php';