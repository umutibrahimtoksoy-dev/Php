<?php

// try{} catch{} işlemleri ile veritabanı ilişkilendirme

try {
    $db=new PDO("mysql:host=localhost;dbname=deneme;charset=utf8",'root','');
    //echo "Veritabanı bağlantısı başarılııı";
} catch(PDOExpception $e){
    echo $e->getMessage();
}

// ardından include ya da require_once işlemi yaptık. bakınız islem.php dosyasına


?>