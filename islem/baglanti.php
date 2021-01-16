<?php
try {
    $baglanti = new PDO('mysql:host=localhost;dbname=emlak; charset=utf8', 'root', '');
   
   
    
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>