<?php require_once 'header.php'; ?>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-2">Hakkımızda Sayfası</h1>
      </div>
    </div>
  </div>
</div>


<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <img src="images/Geowner.gif" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
        <div class="site-section-title">
          <h2><?php echo $hakkimizdacek['baslik'] ?></h2>
        </div>
        
        <p><?php echo $hakkimizdacek['aciklama'] ?></p>

        <h2 style="color:black">Misyonumuz</h2>
        <p><?php echo $hakkimizdacek['misyon'] ?></p>

        <h2 style="color:black">Vizyonumuz</h2>
        <p><?php echo $hakkimizdacek['vizyon'] ?></p>
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
                  <a href="https://www.facebook.com/profile.php?id=100006338136044" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="https://twitter.com/Mamiculooo" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="https://tr.linkedin.com/public-profile/in/g%C3%B6k%C3%A7e-ya%C4%9Fmur-budak-1820a5179?challengeId=AQGdjrzUqjiFVwAAAXcXVE8qUNHroxhQrbNtGWbD3toIHcPvQaZ3J5UFa_NRhWOB2WTr1_DlEAiNJ3xFtCRbeJ8yImX8hbuQ0A&submissionId=e15c0a27-ba6f-5b16-ec2c-911862e9bf0e" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>
<?php } ?>
        
          

          

        </div>
    </div>
    </div>

<div class="site-section">
  <div class="container">

    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <div class="site-section-title">
          <h2>Hakkımızda </h2>
        </div>
        <p>Bizim hakkımzıda merak ettikleriniz.</p>
      </div>
    </div>

    <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
      <div class="col-md-8">
        <div class="accordion unit-8" id="accordion">
          <div class="accordion-item">
            <h3 class="mb-0 heading">
              <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">Hakkımızda<span class="icon"></span></a>
            </h3>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="body-text">
                <p><?php echo $hakkimizdacek['aciklama'] ?></p>
              </div>
            </div>
          </div> <!-- .accordion-item -->

          <div class="accordion-item">
            <h3 class="mb-0 heading">
              <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Misyonumuz<span class="icon"></span></a>
            </h3>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="body-text">
                <p><?php echo $hakkimizdacek['misyon'] ?></p>
              </div>
            </div>
          </div> <!-- .accordion-item -->

          <div class="accordion-item">
            <h3 class="mb-0 heading">
              <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Vizyonumuz <span class="icon"></span></a>
            </h3>
            <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="body-text">
                <p><?php echo $hakkimizdacek['vizyon'] ?></p>
              </div>
            </div>
          </div> <!-- .accordion-item -->

          

        </div>
      </div>
    </div>

  </div>
</div>


<?php require_once 'footer.php'; ?>