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
    // Switch Case

    $sayi = 5;

    switch($sayi)
    {
        case '1': echo "1"; break;
        case '2': echo "2"; break;
        case '3': echo "3"; break;
        default : echo "başka bir şey"; break;
    }
    echo "<br><br><hr>";
   
    // uygulama örneği 1

    if(isset($_POST['notunuz']))
    {
        echo "Notunuz : ".$not=$_POST['not'];
        switch($not)
        {
            case '5': echo " Pekiyi"; break;
            case '4': echo " İyi"; break;
            case '3': echo " Orta"; break;
            case '2': echo " Geçer"; break;
            case '1': echo " Zayıf"; break;
            default : echo " tanımsız !"; break;
        }
    }

    // isset fonksiyonu parametre olarak aldığı değişkenin/değişkenlerin tanımlı olup olmadığını kontrol eder.

    // isset();

    isset($degisken1, $degisken2, $degiskenN);
    

    $adi = "Yusuf";

    if ( isset($adi) ) {

   # Değişken tanımlıysa yapılacaklar
   echo "Merhaba " . $adi;

  } else {

  # Değişken tanımlıdeğilse yapılacaklar
  echo "Lütfen bir değer girin";

}



    // Uygulama Örneği 2
    if(isset($_POST['uygulama1']))
    {
        $sayi= $_POST['sayi'];
        
        if ($sayi%2==0)
            echo "$sayi çift sayıdır.";
        else echo "$sayi tek sayıdır.";

        
    }
    ?>

    <!-- uygulama örneği 1 -->

    <form action="" method="POST">

    <p>
    <label for="not">Not : </label>
    <input type="number" max="5" min="1" name="not">
    </p>
    <p>
    <input type="submit" value="Kaydet" name="notunuz">
    </p>
    </form>
    <br><br><hr>

    <!-- uygulama örneği 2  Tek çift uygulama -->

    <form action="" method="POST">
    <p>Bir sayının tek mi çift olduğunu gösteren uygulamamıza hoşgeldiniz ! </p>
    <label for="sayi">Lütfen bir sayı giriniz : </label>
    <input type="number" name="sayi">
    <input type="submit" value="Kontol Et" name="uygulama1">
    </form>

   <div id="bir"></div>

</body>
</html>