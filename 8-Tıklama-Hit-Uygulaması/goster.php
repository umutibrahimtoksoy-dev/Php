<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
       <table align = "center" width="1000" border = 0>
            <tr class= "renk"><td align = "left"><b>Görüntüleme ve Hit Uygulaması<b></td><td align = "right"><b><a href="index.php" class="renk">Anasayfa<a><b></td></tr>
            <tr><td colspan="2"></td></tr>
            <tr><td align = "left" style="color:red">Makale Başlığı</td><td style="color:red">Vize</td><td style="color:red">Final</td>
            <td style="color:red">Ortalama</td><td align = "right" style="color:red">Gösterim Sayısı</td></tr>
        <?php
        require_once("baglan.php");
        $degisken = Filtre($_GET["id"]); 
        $sorgu = $db->query("UPDATE ogrenci SET gosterim_sayisi = gosterim_sayisi + 1 where id = $degisken");
         $kayit=$sorgu->rowCount();
        if ($kayit>0) {      
        foreach($db->query("SELECT * FROM ogrenci where id = $degisken ",PDO::FETCH_BOTH) as $kyt)
        echo $kyt["gosterim_sayisi"];
        echo "<tr><td>$kyt[ad]</td><td>$kyt[vize]</td><td>$kyt[final]</td><td>$kyt[ortalama]</td><td align='right'>$kyt[gosterim_sayisi]</td></tr>";
    }
    else header("location:index.php");
        ?>
        </table>   
</body>
</html>
