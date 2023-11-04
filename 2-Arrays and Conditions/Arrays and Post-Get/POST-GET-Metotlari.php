<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    //POST ve GET metotları 

    // $_POST[] Metodu aynen böyledir ve içine name değerlerini alır.
    /*echo $_POST['ad'];
    echo "<br>";
    echo $_POST['soyad'];
    */


    // $_GET[] Metodu böyledir name değerlerini alır
    /*echo $_GET["ad"];
    echo "<br>";
    echo $_GET["soyad"];
    */
    $kullanici_id= 151;
    ?>
    <form action="islem.php" method="GET"> <!--Action boş olursa aynı sayfaya gödnerir -->
        Ad : <input type="text" name="ad" placeholder="Adınızı Girin">
        Soyad : <input type="text" name="soyad" placeholder="Soyadınızı Girin">
        <input type="submit" value="Formu Gönder" name="">
    </form>
   
    <a href="islem.php?kullanici_id=<?php echo $kullanici_id ?>"><button>Kullanıcıyı Sil</button></a>
</body>
</html>