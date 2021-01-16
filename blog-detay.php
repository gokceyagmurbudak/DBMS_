<?php require_once 'header.php'; 

$blog=$baglanti->prepare("SELECT * from blog where blog_id=:blog_id ");


$blog->execute(array(

'blog_id'=>$_GET['id']


));

$blogcek=$blog->fetch(PDO::FETCH_ASSOC);








?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
          
            <h1 class="mb-2">Blog Detay sayfası</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="resimler/blog/<?php echo $blogcek['resim'] ?>" alt="Image" class="img-fluid"></div>

              </div>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              
              
              <h2 class="h4 text-black"><?php echo $blogcek['baslik'] ?></h2>
              <p><?php echo $blogcek['aciklama'] ?></p>
 
              
            </div>
          </div>
          
          
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <div class="site-section-title mb-5">
              <h2>Benzer İÇERİKLER</h2>
            </div>
          </div> 
        </div>
      
        <div class="row mb-5">
       <?php


$blog=$baglanti->prepare("SELECT * from blog order by rand() ");


$blog->execute();

while ($blogcek=$blog->fetch(PDO::FETCH_ASSOC)) {

 ?>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="blog-detay?id=<?php echo $blogcek['blog_id'] ?>" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Blog</span>
                </div>
                <img src="resimler/blog/<?php echo $blogcek['resim'] ?>" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="blog-detay?id=<?php echo $blogcek['blog_id'] ?>" class="property-favorite active"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="ilan-detay.php"><?php echo $blogcek['baslik'] ?></a></h2>
 </span> <?php echo $blogcek['aciklama'] ?></span>
             
                

              </div>
            </div>
          </div>

          <?PHP } ?>
        </div>
      </div>
<?php require_once 'footer.php'; ?>