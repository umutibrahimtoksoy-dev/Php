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
    // return => fonksiyon arka planda çalıştığı zaman fonksiyonun içindeki işlemer çalışır ama çıktısını echo'da olduğu gibi ekranda vermez. İstediğimiz zaman echo topla(1,1) yaparak başka yerlerde gösterebiliriz.
    function topla($sayi1,$sayi2)
    {
      return  $sayi1+$sayi2;
    }
    echo topla(1,1);
    
    ?>
</body>
</html>