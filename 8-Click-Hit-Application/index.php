<?php   
require_once("baglan.php");
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
    <title>Document</title>
    <style>
        td{
            height:30px;
        }
        .renk{
            color: black;     
            text-decoration: none;
        }
        a{
            text-decoration: none;
            color:black;
        }
    </style>
</head>
<body>
        <table align = "center" width="1000" border = 0>
            <tr class= "renk"><td align = "left"><b>Görüntüleme ve Hit Uygulaması<b></td><td align = "right"><b><a href="index.php" class="renk">Anasayfa<a><b></td></tr>
            <tr><td colspan="2"></td></tr>
            <tr><td align = "left" style="color:red">Makale Başlığı</td><td align = "right" style="color:red">Gösterim Sayısı</td></tr>
            <?php
            $Sorgu =$db->prepare("SELECT * FROM ogrenci");
            $Sorgu->execute();
            echo $KayitSayisi= $Sorgu->rowCount();
            $Kayitlar = $Sorgu->fetchAll(PDO::FETCH_ASSOC);
            if ($KayitSayisi>0) {
                foreach($Kayitlar as $satirlar){        
            ?>
            <tr><td align = "left"><a href="goster.php?id=<?php echo $satirlar["id"] ?>"><?php echo $satirlar["ad"] ?></a></td><td align = "right"><?php echo $satirlar["gosterim_sayisi"] ?></td></tr>
            

            <?php 
                }
            }
            ?>
        </table>

        
</body>
</html>
