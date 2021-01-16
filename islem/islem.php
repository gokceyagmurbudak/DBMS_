<?php require 'baglanti.php';

session_start();
/*
if ($ad && $sifre) {
  $kullanicisor=$baglanti->prepare("SELECT * from kullanici   where kullaniciad=:ad and sifre=:sifre");
$kullanicisor->execute(array(
'ad'=>$ad,
'sifre'=>$sifre));
$say=$kullanicisor->rowCount();

if ($say >0) {
  $_SESSION['ad']=$ad;
  header('Location:../index.php');
}else{


header('Location:../login.php?durum=no');
} }

 */
//ayarlar.php
if(isset($_POST['ayarkaydet'])){
  $kaydet=$baglanti->prepare("UPDATE ayar SET
    baslik=:baslik,
    aciklama=:aciklama,
    keyword=:keyword
    WHERE ayarid=1");

  $update=$kaydet->execute(array(
    'baslik'=>$_POST['baslik'],
    'aciklama'=>$_POST['aciklama'],
    'keyword'=>$_POST['keyword'] ));

  if($update){
    Header("Location:../ayarlar.php?durum=okey");
  }
  else{
    Header("Location:../ayarlar.php?durum=no");
  }


}


//iletisim.php
if(isset($_POST['iletisimkaydet'])){
  $kaydet=$baglanti->prepare("UPDATE ayar SET
    email=:email,
    tel=:tel,
    adres=:adres
    WHERE ayarid=1");

  $update=$kaydet->execute(array(
    'email'=>$_POST['email'],
    'tel'=>$_POST['tel'],
    'adres'=>$_POST['adres'] ));

  if($update){
    Header("Location:../iletisim.php?durum=okey");
  }
  else{
    Header("Location:../iletisim.php?durum=no");
  }


}


//sosyalmedya.php
if(isset($_POST['sosyalkaydet'])){
  $kaydet=$baglanti->prepare("UPDATE ayar SET
    facebook=:facebook,
    instagram=:instagram,
    twitter=:twitter,
    youtube=:youtube
    WHERE ayarid=1");

  $update=$kaydet->execute(array(
    'facebook'=>$_POST['facebook'],
    'instagram'=>$_POST['instagram'],
    'twitter'=>$_POST['twitter'],
    'youtube'=>$_POST['youtube']
  ));

  if($update){
    Header("Location:../sosyalmedya.php?durum=okey");
  }
  else{
    Header("Location:../sosyalmedya.php?durum=no");
  }


}

//hakkimizda.php

if(isset($_POST['hakkimizdakaydet'])){
  $kaydet=$baglanti->prepare("UPDATE hakkimizda SET
    baslik=:baslik,
    aciklama=:aciklama,
    misyon=:misyon,
    vizyon=:vizyon,
    yapilan=:yapilan,
    isci=:isci,
    suankipro=:suankipro,
    sehir=:sehir
    WHERE id=1");

  $update=$kaydet->execute(array(
    'baslik'=>$_POST['baslik'],
    'aciklama'=>$_POST['aciklama'],
    'misyon'=>$_POST['misyon'],
    'vizyon'=>$_POST['vizyon'],
    'yapilan'=>$_POST['yapilan'],
    'isci'=>$_POST['isci'],
    'suankipro'=>$_POST['suankipro'],
    'sehir'=>$_POST['sehir']
  ));

  if($update){
    Header("Location:../hakkimizda.php?durum=okey");
  }
  else{
    Header("Location:../hakkimizda.php?durum=no");
  }


}


if(isset($_POST['sliderkaydet'])){

  $uploads_dir = '../resimler';
  @$tmp_name = $_FILES['resim'] ["tmp_name"];
  @$name = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayi3=rand(20000,30000);
  $sayilar=$sayi1.$sayi2.$sayi3;
  $resimyolu=$sayilar.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

  $kaydet=$baglanti->prepare("INSERT INTO slider SET
    baslik=:baslik,
    aciklama=:aciklama,
    link=:link,
    button=:button,
    sira=:sira,
    resim=:resim");

  $insert=$kaydet->execute(array(
    'baslik'=>$_POST['baslik'],
    'aciklama'=>$_POST['aciklama'],
    'link'=>$_POST['link'],
    'button'=>$_POST['button'],
    'sira'=>$_POST['sira'],
    'resim'=>$resimyolu));

  if($insert){
    Header("Location:../slider.php?durum=okey");
  }
  else{
    Header("Location:../slider.php?durum=no");
  }


}

if(isset($_POST['sliderduzenle'])){

  if ($_FILES['resim'] ["size"]>0) {
    $uploads_dir = '../resimler';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet=$baglanti->prepare("UPDATE slider SET
      baslik=:baslik,
      aciklama=:aciklama,
      link=:link,
      button=:button,
      sira=:sira,
      resim=:resim
      WHERE id={$_POST['id']}

      ");

    $insert=$kaydet->execute(array(
      'baslik'=>$_POST['baslik'],
      'aciklama'=>$_POST['aciklama'],
      'link'=>$_POST['link'],
      'button'=>$_POST['button'],
      'sira'=>$_POST['sira'],
      'resim'=>$resimyolu));

    if($insert){
      Header("Location:../slider.php?durum=okey");
    }
    else{
      Header("Location:../slider.php?durum=no");
    }

  }

  else{
    $duzenle=$baglanti->prepare("UPDATE slider SET
      baslik=:baslik,
      aciklama=:aciklama,
      link=:link,
      button=:button,
      sira=:sira
      WHERE id={$_POST['id']}

      ");

    $insert=$duzenle->execute(array(
      'baslik'=>$_POST['baslik'],
      'aciklama'=>$_POST['aciklama'],
      'link'=>$_POST['link'],
      'button'=>$_POST['button'],
      'sira'=>$_POST['sira']
    ));

    if($insert){
      Header("Location:../slider.php?durum=okey");
    }
    else{
      Header("Location:../slider.php?durum=no");
    }


  }

}

if (isset($_POST['slidersil'])) {
  $sil=$_POST['resim'];
  unlink("../resimler/$sil");


  $sil=$baglanti->prepare("DELETE FROM slider WHERE id=:id");
  $sil->execute(array(
    'id'=>$_POST['id']

  ));
  if($sil){
    Header("Location:../slider.php?durum=okey");
  }
  else{
    Header("Location:../slider.php?durum=no");
  }
}


if(isset($_POST['urunkaydet'])){

  $uploads_dir = '../resimler/emlak';
  @$tmp_name = $_FILES['resim'] ["tmp_name"];
  @$name = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayi3=rand(20000,30000);
  $sayilar=$sayi1.$sayi2.$sayi3;
  $resimyolu=$sayilar.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

  $kaydet=$baglanti->prepare("INSERT INTO emlak SET

    baslik=:baslik,
    aciklama=:aciklama,
    emlaktipi=:emlaktipi,
    brutmetre=:brutmetre,
    netmetre=:netmetre,
    oda=:oda,
    binayas=:binayas,
    bkat=:bkat,
    katsayisi=:katsayisi,
    isitmatipi=:isitmatipi,
    banyosayisi=:banyosayisi,
    esya=:esya,
    aidat=:aidat,
    krediyeuygun=:krediyeuygun,
    balkon=:balkon,
    takas=:takas,
    kdurum=:kdurum,
    onecikan=:onecikan,
    fiyat=:fiyat,
    sira=:sira,
    kullaniciid=:kullaniciid,
    resim=:resim");

  $insert=$kaydet->execute(array(
    'baslik'=>$_POST['baslik'],
    'aciklama'=>$_POST['aciklama'],
    'emlaktipi'=>$_POST['emlaktipi'],
    'brutmetre'=>$_POST['brutmetre'],
    'netmetre'=>$_POST['netmetre'],
    'oda'=>$_POST['oda'],
    'binayas'=>$_POST['binayas'],
    'bkat'=>$_POST['bkat'],
    'katsayisi'=>$_POST['katsayisi'],
    'isitmatipi'=>$_POST['isitmatipi'],
    'banyosayisi'=>$_POST['banyosayisi'],
    'aidat'=>$_POST['aidat'],
    'krediyeuygun'=>$_POST['krediyeuygun'],
    'esya'=>$_POST['esya'],
    'balkon'=>$_POST['balkon'],
    'takas'=>$_POST['takas'],
    'kdurum'=>$_POST['kdurum'],
    'onecikan'=>$_POST['onecikan'],
    'fiyat'=>$_POST['fiyat'],
    'kullaniciid'=>$_POST['kullaniciid'],
    'sira'=>$_POST['sira'],
    'resim'=>$resimyolu));

  if($insert){
    Header("Location:../urunler.php?durum=okey");
  }
  else{
    Header("Location:../urunler.php?durum=no");
  }


}





if(isset($_POST['urunduzenle'])){


  if ($_FILES['resim'] ["size"]>0) {
    $uploads_dir = '../resimler/emlak';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $duzenle=$baglanti->prepare("UPDATE emlak SET
     baslik=:baslik,
     aciklama=:aciklama,
     emlaktipi=:emlaktipi,
     brutmetre=:brutmetre,
     netmetre=:netmetre,
     oda=:oda,
     binayas=:binayas,
     bkat=:bkat,
     katsayisi=:katsayisi,
     isitmatipi=:isitmatipi,
     banyosayisi=:banyosayisi,
     esya=:esya,
     aidat=:aidat,
     krediyeuygun=:krediyeuygun,
     balkon=:balkon,
     takas=:takas,
     kdurum=:kdurum,
     onecikan=:onecikan,
     fiyat=:fiyat,
     sira=:sira,
         kullaniciid=:kullaniciid,
     resim=:resim
     WHERE id={$_POST['id']}

     ");

    $insert=$duzenle->execute(array(
     'baslik'=>$_POST['baslik'],
     'aciklama'=>$_POST['aciklama'],
     'emlaktipi'=>$_POST['emlaktipi'],
     'brutmetre'=>$_POST['brutmetre'],
     'netmetre'=>$_POST['netmetre'],
     'oda'=>$_POST['oda'],
     'binayas'=>$_POST['binayas'],
     'bkat'=>$_POST['bkat'],
     'katsayisi'=>$_POST['katsayisi'],
     'isitmatipi'=>$_POST['isitmatipi'],
     'banyosayisi'=>$_POST['banyosayisi'],
     'aidat'=>$_POST['aidat'],
     'krediyeuygun'=>$_POST['krediyeuygun'],
     'esya'=>$_POST['esya'],
     'balkon'=>$_POST['balkon'],
     'takas'=>$_POST['takas'],
     'kdurum'=>$_POST['kdurum'],
     'onecikan'=>$_POST['onecikan'],
     'fiyat'=>$_POST['fiyat'],
     'sira'=>$_POST['sira'],
      'kullaniciid'=>$_POST['kullaniciid'],
     'resim'=>$resimyolu));

    if($insert){
      Header("Location:../urunler.php?durum=okey");
    }
    else{
      Header("Location:../urunler.php?durum=no");
    }

  }

  else{
    $duzenle=$baglanti->prepare("UPDATE emlak SET
      baslik=:baslik,
      aciklama=:aciklama,
      emlaktipi=:emlaktipi,
      brutmetre=:brutmetre,
      netmetre=:netmetre,
      oda=:oda,
      binayas=:binayas,
      bkat=:bkat,
      katsayisi=:katsayisi,
      isitmatipi=:isitmatipi,
      banyosayisi=:banyosayisi,
      esya=:esya,
      aidat=:aidat,
      krediyeuygun=:krediyeuygun,
      balkon=:balkon,
      takas=:takas,
      kdurum=:kdurum,
      onecikan=:onecikan,
      fiyat=:fiyat,
      sira=:sira,
      kullaniciid=:kullaniciid
      WHERE id={$_POST['id']}

      ");

    $insert=$duzenle->execute(array(
      'baslik'=>$_POST['baslik'],
      'aciklama'=>$_POST['aciklama'],
      'emlaktipi'=>$_POST['emlaktipi'],
      'brutmetre'=>$_POST['brutmetre'],
      'netmetre'=>$_POST['netmetre'],
      'oda'=>$_POST['oda'],
      'binayas'=>$_POST['binayas'],
      'bkat'=>$_POST['bkat'],
      'katsayisi'=>$_POST['katsayisi'],
      'isitmatipi'=>$_POST['isitmatipi'],
      'banyosayisi'=>$_POST['banyosayisi'],
      'aidat'=>$_POST['aidat'],
      'krediyeuygun'=>$_POST['krediyeuygun'],
      'esya'=>$_POST['esya'],
      'balkon'=>$_POST['balkon'],
      'takas'=>$_POST['takas'],
      'kdurum'=>$_POST['kdurum'],
      'onecikan'=>$_POST['onecikan'],
      'fiyat'=>$_POST['fiyat'],
      'sira'=>$_POST['sira'],
        'kullaniciid'=>$_POST['kullaniciid']
    ));

    if($insert){
      Header("Location:../urunler.php?durum=okey");
    }
    else{
      Header("Location:../urunler.php?durum=no");
    }


  }

}



if (isset($_POST['emlaksil'])) {
  $sil=$_POST['resim'];
  unlink("../resimler/urunler/$sil");


  $sil=$baglanti->prepare("DELETE FROM emlak WHERE id=:id");
  $sil->execute(array(
    'id'=>$_POST['id']

  ));
  if($sil){
    Header("Location:../urunler.php?durum=okey");
  }
  else{
    Header("Location:../urunler.php?durum=no");
  }
}


if (isset($_POST['mesajkaydet'])) {



  $kaydet=$baglanti->prepare("INSERT INTO iletisim SET
    baslik=:baslik,
    mail=:mail,
    konu=:konu,
    mesaj=:mesaj");

  $insert=$kaydet->execute(array(
    'baslik'=>$_POST['baslik'],
    'mail'=>$_POST['mail'],
    'konu'=>$_POST['konu'],
    'mesaj'=>$_POST['mesaj']
  ));

  if($insert){
    Header("Location:../../iletisim.php?durum=okey");
  }
  else{
    Header("Location:../../iletisim.php?durum=no");
  }


}


if (isset($_POST['iletisimgelensil'])) {
 $sil=$baglanti->prepare("DELETE FROM iletisim WHERE id=:id");
 $sil->execute(array(
  'id'=>$_POST['id']

));
 if($sil){
  Header("Location:../iletisimgelen.php?durum=okey");
}
else{
  Header("Location:../iletisimgelen.php?durum=no");
}
}




if(isset($_POST['resimkaydet'])){


  $uploads_dir = '../resimler/resimler';
  @$tmp_name = $_FILES['resim'] ["tmp_name"];
  @$name = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayi3=rand(20000,30000);
  $sayilar=$sayi1.$sayi2.$sayi3;
  $resimyolu=$sayilar.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

  $kaydet=$baglanti->prepare("INSERT INTO resimler SET

    baslik=:baslik,
    sira=:sira,
    resim=:resim");

  $insert=$kaydet->execute(array(
    'baslik'=>$_POST['baslik'],
    'sira'=>$_POST['sira'],
    'resim'=>$resimyolu));

  if($insert){
    Header("Location:../resimler.php?durum=okey");
  }
  else{
    Header("Location:../resimler.php?durum=no");
  }


}




if(isset($_POST['resimlerduzenle'])){

  if ($_FILES['resim'] ["size"]>0) {
    $uploads_dir = '../resimler/resimler';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet=$baglanti->prepare("UPDATE resimler SET
      baslik=:baslik,

      sira=:sira,
      resim=:resim
      WHERE id={$_POST['id']}

      ");

    $insert=$kaydet->execute(array(
      'baslik'=>$_POST['baslik'],

      'sira'=>$_POST['sira'],
      'resim'=>$resimyolu));

    if($insert){

     $sil=$_POST['resim'];
     unlink("../resimler/resimler/$sil");

     Header("Location:../resimler.php?durum=okey");
   }
   else{
    Header("Location:../resimler.php?durum=no");
  }

}

else{
  $duzenle=$baglanti->prepare("UPDATE resimler SET
    baslik=:baslik,

    sira=:sira
    WHERE id={$_POST['id']}

    ");

  $insert=$duzenle->execute(array(
    'baslik'=>$_POST['baslik'],

    'sira'=>$_POST['sira']));

  if($insert){
    Header("Location:../resimler.php?durum=okey");
  }
  else{
    Header("Location:../resimler.php?durum=no");
  }


}

}

if (isset($_POST['resimlersil'])) {
  $sil=$_POST['resim'];
  unlink("../resimler/resimler/$sil");


  $sil=$baglanti->prepare("DELETE FROM resimler WHERE id=:id");
  $sil->execute(array(
    'id'=>$_POST['id']

  ));
  if($sil){
    Header("Location:../resimler.php?durum=okey");
  }
  else{
    Header("Location:../resimler.php?durum=no");
  }
}


if (isset($_POST['kullanicigiris'])) {
  $ad= htmlspecialchars($_POST['ad']) ;
  $sifre= htmlspecialchars($_POST['sifre']);

  if ($ad && $sifre) {
    $kullanicisor=$baglanti->prepare("SELECT * from kullanici   where kadi=:ad and sifre=:sifre");
    $kullanicisor->execute(array(
      'ad'=>$ad,
      'sifre'=>$sifre));
    $say=$kullanicisor->rowCount();

    if ($say >0) {
      $_SESSION['ad']=$ad;

      header('Location:../index.php');
    }else{


      header('Location:../login.php?durum=no');
    } }



  }


  if(isset($_POST['kullanicikaydet'])){


    $kullanici=$baglanti->prepare("SELECT * from kullanici where kadi=:kadi ");


    $kullanici->execute(array(

      'kadi'=>$_POST['kadi']
    ));
    $say=$kullanici->rowCount();

    if ($say>0) {
      Header("Location:../kullanici.php?durum=kullanicivar");
      exit;
    }


    $kaydet=$baglanti->prepare("INSERT INTO kullanici SET
      adsoyad=:adsoyad,
      kadi=:kadi,
      yetki=:yetki,
      sifre=:sifre
      ");

    $insert=$kaydet->execute(array(
      'adsoyad'=>$_POST['adsoyad'],
      'kadi'=>$_POST['kadi'],
      'yetki'=>$_POST['yetki'],
      'sifre'=>$_POST['sifre']
    ));

    if($insert){
      Header("Location:../kullanici.php?durum=okey");
    }
    else{
      Header("Location:../kullanici.php?durum=no");
    }


  }


  if (isset($_POST['kullanicisil'])) {

   $sil=$baglanti->prepare("DELETE FROM kullanici WHERE id=:id");
   $sil->execute(array(
    'id'=>$_POST['id']

  ));
   if($sil){
    Header("Location:../kullanici.php?durum=okey");
  }
  else{
    Header("Location:../kullanici.php?durum=no");
  }
}





if(isset($_POST['ekipkaydet'])){

  $uploads_dir = '../resimler';
  @$tmp_name = $_FILES['resim'] ["tmp_name"];
  @$name = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayi3=rand(20000,30000);
  $sayilar=$sayi1.$sayi2.$sayi3;
  $resimyolu=$sayilar.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

  $kaydet=$baglanti->prepare("INSERT INTO ekip SET
    adsoyad=:adsoyad,
    gorev=:gorev,

    resim=:resim");

  $insert=$kaydet->execute(array(
    'adsoyad'=>$_POST['adsoyad'],
    'gorev'=>$_POST['gorev'],

    'resim'=>$resimyolu));

  if($insert){
    Header("Location:../ekip.php?durum=okey");
  }
  else{
    Header("Location:../ekip.php?durum=no");
  }


}

if(isset($_POST['ekipduzenle'])){

  if ($_FILES['resim'] ["size"]>0) {
    $uploads_dir = '../resimler';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet=$baglanti->prepare("UPDATE ekip SET
      adsoyad=:adsoyad,
      gorev=:gorev,

      resim=:resim
      WHERE id={$_POST['id']}

      ");

    $insert=$kaydet->execute(array(

      'adsoyad'=>$_POST['adsoyad'],
      'gorev'=>$_POST['gorev'],
      'resim'=>$resimyolu));

    if($insert){
      Header("Location:../ekip.php?durum=okey");
    }
    else{
      Header("Location:../ekip.php?durum=no");
    }

  }

  else{
    $duzenle=$baglanti->prepare("UPDATE ekip SET

      adsoyad=:adsoyad,
      gorev=:gorev
      WHERE id={$_POST['id']}

      ");

    $insert=$duzenle->execute(array(

      'adsoyad'=>$_POST['adsoyad'],
      'gorev'=>$_POST['gorev']
    ));

    if($insert){
      Header("Location:../ekip.php?durum=okey");
    }
    else{
      Header("Location:../ekip.php?durum=no");
    }


  }

}

if (isset($_POST['ekipsil'])) {
  $sil=$_POST['resim'];
  unlink("../resimler/$sil");


  $sil=$baglanti->prepare("DELETE FROM ekip WHERE id=:id");
  $sil->execute(array(
    'id'=>$_POST['id']

  ));
  if($sil){
    Header("Location:../ekip.php?durum=okey");
  }
  else{
    Header("Location:../ekip.php?durum=no");
  }
}












if(isset($_POST['blogkaydet'])){

  $uploads_dir = '../resimler/blog';
  @$tmp_name = $_FILES['resim'] ["tmp_name"];
  @$name = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayi3=rand(20000,30000);
  $sayilar=$sayi1.$sayi2.$sayi3;
  $resimyolu=$sayilar.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

  $kaydet=$baglanti->prepare("INSERT INTO blog SET
    baslik=:baslik,
    aciklama=:aciklama,

    sira=:sira,
    resim=:resim");

  $insert=$kaydet->execute(array(
    'baslik'=>$_POST['baslik'],
    'aciklama'=>$_POST['aciklama'],

    'sira'=>$_POST['sira'],
    'resim'=>$resimyolu));

  if($insert){
    Header("Location:../blog.php?durum=okey");
  }
  else{
    Header("Location:../blog.php?durum=no");
  }


}

if(isset($_POST['blogduzenle'])){

  if ($_FILES['resim'] ["size"]>0) {
    $uploads_dir = '../resimler/blog';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet=$baglanti->prepare("UPDATE blog SET
      baslik=:baslik,
      aciklama=:aciklama,

      sira=:sira,
      resim=:resim
      WHERE blog_id={$_POST['id']}

      ");

    $insert=$kaydet->execute(array(
      'baslik'=>$_POST['baslik'],
      'aciklama'=>$_POST['aciklama'],

      'sira'=>$_POST['sira'],
      'resim'=>$resimyolu));

    if($insert){
      Header("Location:../blog.php?durum=okey");
    }
    else{
      Header("Location:../blog.php?durum=no");
    }

  }

  else{
    $duzenle=$baglanti->prepare("UPDATE blog SET
      baslik=:baslik,
      aciklama=:aciklama,

      sira=:sira

      WHERE blog_id={$_POST['id']}

      ");

    $insert=$duzenle->execute(array(
      'baslik'=>$_POST['baslik'],
      'aciklama'=>$_POST['aciklama'],

      'sira'=>$_POST['sira']

    ));

    if($insert){
      Header("Location:../blog.php?durum=okey");
    }
    else{
      Header("Location:../blog.php?durum=no");
    }


  }

}

if (isset($_POST['blogsil'])) {
  $sil=$_POST['resim'];
  unlink("../resimler/$sil");


  $sil=$baglanti->prepare("DELETE FROM blog WHERE blog_id=:blog_id");
  $sil->execute(array(
    'blog_id'=>$_POST['id']

  ));
  if($sil){
    Header("Location:../blog.php?durum=okey");
  }
  else{
    Header("Location:../blog.php?durum=no");
  }
}






if (isset($_POST['cokluresimsil'])) {
  $gelenid=$_POST['urun_id'];
  $sil=$_POST['resim'];
  unlink("../resimler/cokluresim/$sil");


  $sil=$baglanti->prepare("DELETE FROM cokluresim WHERE id=:id");
  $sil->execute(array(
    'id'=>$_POST['id']

  ));
  if($sil){
    Header("Location:../cokluresim.php?id=$gelenid&durum=okey");
  }
  else{
    Header("Location:../cokluresim.php?urum=no");
  }
}
?>
