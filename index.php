<?php require_once 'header.php'; 

require_once 'slider.php';
require_once 'listele.php';
?>





<div class="site-section site-section-sm bg-light">
  <div class="container">

    <div class="row mb-5">
     <?php


     $emlak=$baglanti->prepare("SELECT * from emlak where onecikan=:onecikan");


     $emlak->execute(array(

      'onecikan'=>"cikar"

    ));

     while ($emlakcek=$emlak->fetch(PDO::FETCH_ASSOC)) {

       ?>
       <div class="col-md-6 col-lg-4 mb-4">
        <div class="property-entry h-100">
          <a href="ilan-detay?id=<?php echo $emlakcek['id'] ?>" class="property-thumbnail">
            <div class="offer-type-wrap">

              <span class="offer-type bg-success"><?php if ($emlakcek['emlaktipi']=="satilik") { ?>
               SATILIK
               <?php  } else{ ?></span>
               <span class="offer-type bg-danger">
                 KİRALIK
                 <?php } ?></span>

               </div>
               <img src="resimler/emlak/<?php echo $emlakcek['resim'] ?>" alt="Image" class="img-fluid">
             </a>
             <div class="p-4 property-body">
              <a href="#" class="property-favorite active"><span class="icon-heart-o"></span></a>
              <h2 class="property-title"><a href="ilan-detay.php"><?php echo $emlakcek['baslik'] ?></a></h2>
              <strong class="property-price text-primary mb-3 d-block text-success"><?php echo $emlakcek['fiyat'] ?> ₺</strong>
              <ul class="property-specs-wrap mb-3 mb-lg-0">
                <li>
                  <span class="property-specs">Net metre</span>
                  <span class="property-specs-number"><?php echo $emlakcek['netmetre'] ?> <sup>+</sup></span>

                </li>
                <li>
                  <span class="property-specs">Oda sayısı</span>
                  <span class="property-specs-number"><?php echo $emlakcek['oda'] ?></span>

                </li>
                <li>
                  <span class="property-specs">Balkon</span>
                  <span class="property-specs-number"><?php echo $emlakcek['balkon'] ?></span>

                </li>
              </ul>

            </div>
          </div>
        </div>


      <?php } ?>






    </div>


  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <div class="site-section-title">
          <h2>neden bİz</h2>
        </div>
        <p>Bizi tercih etmeniz için sebepler</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-4">
        <a href="#" class="service text-center">
          <span class="icon flaticon-house"></span>
          <h2 class="service-heading">Güvenli ticaret </h2>
          <p>Güven içerisinde alışveriş</p>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="#" class="service text-center">
          <span class="icon flaticon-sold"></span>
          <h2 class="service-heading">Fazla ilan</h2>
          <p>Bir çok ilanı bu siteden bulabilirsiniz.</p>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="#" class="service text-center">
          <span class="icon flaticon-camera"></span>
          <h2 class="service-heading">Kaliteli ekip</h2>
          <p>Kaliteli ve profesyonel ekip.</p>
        </a>
      </div>
    </div>
  </div>
</div>




</div>
</div>


<div class="site-section bg-white">
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
<?php require_once 'footer.php'; ?>