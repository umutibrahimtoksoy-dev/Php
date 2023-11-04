<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<!-- PHP -->

    <?php
    
    // ECHO KOMUTU
    
    echo "Umut İbrahim Toksoy";
    print "<br>"."umut";


    // BİRLEŞTİRME OPERATÖR 

    echo "<br>"."X"."naber"."hmmm";

    //DEĞİŞKENLER

    $kora = "Z";
    $değer = "A";
    $no = 400;
    echo "<br>",$değer,"<br>",$kora,"<br>",$no;

    // HTML İLE DEĞİŞKENLERİN İÇ İÇE KULLANIMI

    $ad = "deniz";
    $soyad = "yıldız";
    $no = 1999;

    echo "<h1>Bilgilerim</h1>";
    echo "<hr>";
    echo "Adınız ve Soyadınız : ".$ad." ".$soyad;
    echo "<br>"."Numaranız : ".$no."<br>";
    echo "<hr>"."<br>";

    /*MATEMATİKSEL İŞLEMLER 

    + TOPLAMA
    - ÇIKARMA
    / BÖLME
    * ÇARPMA

    */

    $sayi1 = 10;
    $sayi2 = 35;
    echo $sayi1+$sayi2."<br>";

    $topla = $sayi1+$sayi2."<br>";
    echo $topla;

    if($topla>40)
       echo "40'dan büyük <br>";

       $sayi3 = 43;
       $sayi4 = 45;
       $toplam = $sayi3+$sayi4;

       echo "$sayi3 + $sayi4 = $toplam <br>";
       echo "<hr>";

       // ATAMA OPERATÖRLERİ

       $atama = 400;
       echo "\$atama değişkeninin değeri : ".$atama."<br><br>";

       $atama = $atama +500;
       echo $atama."<br><br>";

       $atama-=100;
       echo $atama."<br>";
       echo "<hr>";

       // HAZIR FONKSİYONLARA BAKIŞ

       // rand belirlenen aralıkta sayı üretir.

       echo rand(0,10);

    
       /* ÇİFT TIRNAK VE TEK TIRNAK ARASINDAKİ FARKLAR

       " PHP'de çift tırnak içerisibde değişken içerikleri okunabilir,
       tek tırnak içerisinde değişken içerikleri okunmaz...

       */

       $ad = "x";
       $soyad = "y";
       echo "<br>benin adım : $ad";
       echo '<br>benin adım : $ad<br><br><hr>';

       // YOK SAYMA KAÇIŞ İŞARETLERİ 

       echo "Ben 'kod yazmayı' seviyorum<br>";
       echo "Ben $ad 'kod yazmayı' seviyorum<br>";
       echo "Ben $ad \"kod yazmayı\" seviyorum<br>";
       echo "Ben \$ad \"kod yazmayı\" seviyorum<br><hr>";



       //Sık Kullanılan Hazır String Metin Fonksiyonları ve Pratik Uygulamalar

       // strtolower => küçük harfe çevirmek için kullanılır.

       echo $yazi = "Lorem ipsum dolor sit, amet consectetur adipisicing elit<br>";
       echo strtolower($yazi);

       // strtoupper =>

       echo strtoupper($yazi);
       

       // ucwords => metnin ilk harflerini büyük yazar
       $yazi = strtolower($yazi);
       echo $yazi;
       echo ucwords($yazi);
       
       // ucfirst => metnin ilk kelimesinin ilk harfini büyütür.

       echo ucfirst($yazi);

       // strlen => metnin karakter sayısını verir

       echo strlen($yazi)."<br>";

       // substr => metnin belirtilen karakter sayıda kısmını alır.

       echo substr($yazi,0,10);

       //Devamını oku uygulaması

       $yazi = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis doloremque, unde numquam vero veniam eum facere dicta modi corporis odio hic magni odit sint impedit possimus, sequi saepe recusandae sapiente adipisci. Quam voluptatum voluptate exercitationem qui sit voluptatem, ad magnam quaerat asperiores, modi amet atque nisi dolore nam numquam vel porro nostrum esse minima natus corporis labore excepturi ipsam delectus. Minima, id maiores pariatur, dignissimos aliquid vero, est error repellendus sed iusto omnis iste molestias soluta quisquam reiciendis optio eos maxime. Aliquam maxime maiores nihil eaque tempore consectetur, animi consequatur consequuntur accusantium ullam cum laborum? Illum explicabo unde nulla molestiae.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis doloremque, unde numquam vero veniam eum facere dicta modi corporis odio hic magni odit sint impedit possimus, sequi saepe recusandae sapiente adipisci. Quam voluptatum voluptate exercitationem qui sit voluptatem, ad magnam quaerat asperiores, modi amet atque nisi dolore nam numquam vel porro nostrum esse minima natus corporis labore excepturi ipsam delectus. Minima, id maiores pariatur, dignissimos aliquid vero, est error repellendus sed iusto omnis iste molestias soluta quisquam reiciendis optio eos maxime. Aliquam maxime maiores nihil eaque tempore consectetur, animi consequatur consequuntur accusantium ullam cum laborum? Illum explicabo unde nulla molestiae.";
       echo "<h1> Haber Başlığı</h1>";
       echo "<p>".substr($yazi,0,500)."...</p>";
       echo "<a href='#'>Devamını Oku...</a>"
      



    



    

    ?>

   
</body>
</html>