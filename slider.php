
 <div class="slide-one-item home-slider owl-carousel">
 
<?php


$slider=$baglanti->prepare("SELECT * from slider ");


$slider->execute();

while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) {

 ?>

      <div  class="site-blocks-cover overlay" style="background-image: url(resimler/<?php echo $slidercek['resim'] ?>); height: 100%; width:100%" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded"><?php echo $slidercek['baslik'] ?></span>
              <p><a href="<?php echo $slidercek['link'] ?>" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2"><?php echo $slidercek['button'] ?></a></p>
            </div>
          </div>
        </div>
      </div>  
    <?php } ?>
    

    </div>