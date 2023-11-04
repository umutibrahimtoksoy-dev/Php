<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // if uygulama örneği 
    error_reporting(0);;
    $kadi = "umut";
    $pass = "123456";

    /*$kullanici_ad= $_POST['kullanici_ad'];
    $kullanici_password = $_POST['kullanici_password'];

    if($kullanici_ad==$kadi and $kullanici_password==$pass)
          echo "Giriş Başarılı";
               else 
             echo "Başarısız Giriş";
     */ 
    
    if( $_POST['kullanici_ad']==$kadi and $_POST['kullanici_password']==$pass)
          echo "Giriş Başarılı";
               else 
             echo "Başarısız Giriş";
    ?>

    <br><hr>
    <h3>Kullanıcı Girişi</h3>
    <form action="" method="POST">

    Kullanıcı Adı : <input type="text" name="kullanici_ad" placeholder="Kullanıcı Adını Giriniz...">
    Şifre : <input type="password" name="kullanici_password" placeholder="Şifrenizi Giriniz...">
    <button type="submit">Giriş Yap</button>
    </form>

</body>
</html>