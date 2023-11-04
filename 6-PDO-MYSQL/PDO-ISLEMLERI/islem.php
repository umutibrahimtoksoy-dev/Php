<?php 
//veritabanı bağlantısının okunabilmesi için include fonksiyonunu baş kısma yazıyoruz
require_once 'baglan.php';
#**********************

//veritabanına formdan kayıt ekleme işlemi
if(isset($_POST['crud']))
{
    $kaydet=$db->prepare("INSERT into bilgiler set
    bilgiler_ad=:bilgiler_ad,
    bilgiler_soyad=:bilgiler_soyad,
    bilgiler_mail=:bilgiler_mail,
    bilgiler_sehir=:bilgiler_sehir"); //prepare fonksiyonu bir metottur PDO'da veri ekleme veri silme vb işlemlerde kullanılır. 

    $insert=$kaydet->execute(array(
        'bilgiler_ad' => $_POST['bilgiler_ad'],
        'bilgiler_soyad' => $_POST['bilgiler_soyad'],
        'bilgiler_mail' => $_POST['bilgiler_mail'],
        'bilgiler_sehir' => $_POST['bilgiler_sehir']
    ));
}

//header fonksiyonu ile yönlendirme işlemi
if ($insert)
{
    header("Location:index.php");  //echo "Kayıt başarılı";
    exit;
}
else
{
    header("Location:index.php");  //echo "Kayıt başarısız"; 
    exit;
}
    

?>