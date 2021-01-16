<?php require_once 'header.php';


$emlak=$baglanti->prepare("SELECT * from emlak where id=:id ");


$emlak->execute(array(

'id'=>$_GET['id']


));

$emlakcek=$emlak->fetch(PDO::FETCH_ASSOC);

$emlakekleyen=$emlakcek['kullaniciid'];
$emlaktipi=$emlakcek['emlaktipi'];


$kullanici=$baglanti->prepare("SELECT * from kullanici where id=:id ");


$kullanici->execute(array(

'id'=>$emlakekleyen


));

$kullanicicek=$kullanici->fetch(PDO::FETCH_ASSOC);



$cokluresim=$baglanti->prepare("SELECT * from cokluresim where urun_id=:urun_id ");


$cokluresim->execute(array(

'urun_id'=>$_GET['id']


));


 ?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(resimler/cokluresim/image.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">İlan detay sayfası</h1>
          </div>
        </div>
      </div>
    </div> 

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="resimler/emlak/<?php echo $emlakcek['resim'] ?>" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?php echo $emlakcek['fiyat'] ?>₺</strong>
                </div>
              
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Emlak Tİpİ</span>
                  <strong class="d-block"><?php echo $emlakcek['emlaktipi'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">BRÜT METRE</span>
                  <strong class="d-block"><?php echo $emlakcek['brutmetre'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Net Metre</span>
                  <strong class="d-block"><?php echo $emlakcek['netmetre'] ?></strong>
                </div>
              </div>
                      <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Oda Sayısı</span>
                  <strong class="d-block"><?php echo $emlakcek['oda'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Bina Yaş </span>
                  <strong class="d-block"><?php echo $emlakcek['binayas'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Bulunduğu Kat</span>
                  <strong class="d-block"><?php echo $emlakcek['bkat'] ?></strong>
                </div>
              </div>
              
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Kat sayısı</span>
                  <strong class="d-block"><?php echo $emlakcek['katsayisi'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Isıtma Tipi </span>
                  <strong class="d-block"><?php echo $emlakcek['isitmatipi'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Banyo Sayısı</span>
                  <strong class="d-block"><?php echo $emlakcek['banyosayisi'] ?></strong>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Balkon </span>
                  <strong class="d-block"><?php echo $emlakcek['balkon'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Eşya Durumu</span>
                  <strong class="d-block"><?php echo $emlakcek['esya'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Aidat</span>
                  <strong class="d-block"><?php echo $emlakcek['aidat'] ?></strong>
                </div>
             
              </div>
               <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Krediye Uygun </span>
                  <strong class="d-block"><?php echo $emlakcek['krediyeuygun'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Takasa Uygun</span>
                  <strong class="d-block"><?php echo $emlakcek['takas'] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Kullanım Durumu</span>
                  <strong class="d-block"><?php echo $emlakcek['kdurum'] ?></strong>
                </div>
             
              </div>
              <h2 class="h4 text-black"><?php echo $emlakcek['baslik'] ?></h2>
              <p><?php echo $emlakcek['aciklama'] ?></p>

              <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Detaylı Fotoğraf</h2>
                </div>
               
              
               <?php while ($cokluresimcek=$cokluresim->fetch(PDO::FETCH_ASSOC)) { ?>
             
        
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="resimler/cokluresim/<?php echo $cokluresimcek['resim'] ?>" class="image-popup gal-item"><img src="resimler/cokluresim/<?php echo $cokluresimcek['resim'] ?>" alt="Image" class="img-fluid"></a>
                </div>
<?php        } ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">



            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Ekleyen:<?php echo $kullanicicek['adsoyad']; ?></h3>
              <p style="color:black">İletişim:<?php echo $kullanicicek['yetki']; ?></p>
            </div>

          </div>
          
        </div>
      </div>
    </div>


<?php require_once 'footer.php'; ?>