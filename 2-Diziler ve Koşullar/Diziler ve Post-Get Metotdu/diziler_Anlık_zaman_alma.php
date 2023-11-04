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
    date_default_timezone_set("Europe/Istanbul");//server saat ayarı
    //diziler
    $dizi0 = array("umut","ibrahim","toksoy",10,20,30);

    $dizi1 = ["bir","iki","üç"];
    echo $dizi1[1]."<br>";

    //print_r() fonksiyonu dizilerin indekslerini görüntülememize yardımcı olur.
    echo "<pre>";
    print_r($dizi0);
    echo "</pre>";


    //dizilerde sık kullanılan hazır fonksiyonlar
    
    // sort => küçükten büyüğe doğru sıralar, harfleride
    $dizi2 =array(10,9,8,7,6,5,101,4,3,2,1,12,30,5);
    echo "<pre>";
    sort($dizi2);
    print_r($dizi2);
    echo "</pre>";

    // rsort => büyükten küçüğe doğru sıralar, harfleride
    $dizi2 =array(10,9,8,7,6,5,101,4,3,2,1,12,30,5);
    echo "<pre>";
    rsort($dizi2);
    print_r($dizi2);
    echo "</pre>";

    // in_array => dizi içerisinde aradığımız değerin olup olmadığını denetler varsa 1 değerini döndürür.

    echo $sonuc = in_array("101",$dizi2);
    echo "<br>".in_array("z",$dizi2);
    echo $sonuc1 = in_array("z",$dizi2);

    if($sonuc)
        echo "var";
        else echo "yok";
        echo "<br>";
        if($sonuc1)
        echo "var";
        else echo "yok";
        echo "<br>";
        // implode dizi değerlerini birleştirmeye yarar. dizi olmaktan çıkar.

        $dizi3 = ["a","b","c","d"];
        echo implode(" ",$dizi3)."<br>";

        // explode değişkeni parçalar dizi haline getirir.

        $zaman ="27-10-2017 19:08";
        $sonuc = explode(" ",$zaman);
        echo $sonuc[0]."<br>";

        echo "<pre>";
        print_r($sonuc);
        echo "</pre>";

        echo "Tarih : ".$sonuc[0]." Saat : ".$sonuc[1];
        echo "<hr>";
       
        // Anlık zaman alma uygulaması ve Date Time Zone ayarları

        echo $sonuc = date("d-m-y h:i:s")."<br><br>";
        $zaman = explode(" ",$sonuc);
        echo "Tarih : ".$zaman[0]." Saat : ".$zaman[1]; 

        
   

    ?>
</body>
</html>