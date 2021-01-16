<?php require_once 'header.php'; ?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Our Blog</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">

<?php


$blog=$baglanti->prepare("SELECT * from blog ");


$blog->execute();

while ($blogcek=$blog->fetch(PDO::FETCH_ASSOC)) {

 ?>

          <div class="col-md-6 col-lg-4 mb-6" data-aos="fade-up" data-aos-delay="200">
            <a href="blog-detay?id=<?php echo $blogcek['blog_id'] ?>"><img src="resimler/blog/<?php echo $blogcek['resim'] ?>" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase"><?php echo $blogcek['zaman'] ?></span>
              <h2 class="h5 text-black mb-3"><a href="blog-detay?id=<?php echo $blogcek['blog_id'] ?>"><?php echo  $blogcek['baslik'] ?></a></h2>

            </div>
          </div>
         <?php  } ?>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>
        </div>

      </div>
    </div>
<?php require_once 'footer.php'; ?>
