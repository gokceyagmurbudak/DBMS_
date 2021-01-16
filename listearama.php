<?php require_once 'header.php'; 
require_once 'slider.php';
require_once 'listele.php';

?>
   


  

    <div class="site-section site-section-sm bg-light">
      <div class="container">
      
        <div class="row mb-5">
         <?php
if (isset($_POST['listelemekaydet'])) {

if ($_POST['listeleme']=="artanfiyat" or $_POST['listeleme']=="azalanfiyat") {
if ($_POST['listeleme']=="artanfiyat") {

$emlak=$baglanti->prepare("SELECT * from emlak order by fiyat ASC  ");
}
elseif($_POST['listeleme']=="azalanfiyat"){

$emlak=$baglanti->prepare("SELECT * from emlak order by fiyat DESC  ");

}

$emlak->execute();

while ($emlakcek=$emlak->fetch(PDO::FETCH_ASSOC)) {

 ?>
           <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="ilan-detay?id=<?php echo $emlakcek['id'] ?>" class="property-thumbnail">
                <div class="offer-type-wrap">
            
    <span class="offer-type bg-success">
               SATILIK
             </span>

                 </div>
                <img src="resimler/emlak/<?php echo $emlakcek['resim'] ?>" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="ilan-detay?id=<?php echo $emlakcek['id'] ?>" class="property-favorite active"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="ilan-detay?id=<?php echo $emlakcek['id'] ?>"><?php echo $emlakcek['baslik'] ?></a></h2>
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


      <?php } }
elseif($_POST['listeleme']=="soneklenen" or $_POST['listeleme']=="ilkeklenen"){
if ($_POST['listeleme']=="soneklenen") {

$emlak=$baglanti->prepare("SELECT * from emlak order by id DESC  ");
}
elseif($_POST['listeleme']=="ilkeklenen"){
  $emlak=$baglanti->prepare("SELECT * from emlak order by id ASC  ");
}
$emlak->execute();

while ($emlakcek=$emlak->fetch(PDO::FETCH_ASSOC)) {




 ?>




 <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="ilan-detay?id=<?php echo $emlakcek['id'] ?>" class="property-thumbnail">
                <div class="offer-type-wrap">
            
    <span class="offer-type bg-success">
               SATILIK
             </span>

                 </div>
                <img src="resimler/emlak/<?php echo $emlakcek['resim'] ?>" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="ilan-detay?id=<?php echo $emlakcek['id'] ?>" class="property-favorite active"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="ilan-detay?id=<?php echo $emlakcek['id'] ?>"><?php echo $emlakcek['baslik'] ?></a></h2>
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















 <?php  }  }   }  ?>

          

          

          
        </div>
      
        
      </div>
    </div>

    
    
    
    <?php require_once 'footer.php'; ?>