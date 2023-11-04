<?php session_start();  error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_SESSION["kad"]))  {?>
        
    
    <table align=center border=0>
        <form action="islem.php" method="POST">
           <tr><td colspan=3 align=center><h1>Kullanıcı Giriş</h1></td></tr>
               <tr>
                   <td>Kullanıcı Adı : <input type="text" name="kad" required ></td>
                   <td>Şifre : <input type="password" name="sifre" require></td>
                   <td><input type="submit" value="Giriş Yap" name="kullanici_giris"></td>
                </tr>
        </form>
    </table>
    

    <?php if($_GET["durum"]=="no")
          echo "Giriş Başarısız Tekrar Deneyin";
    else if($_GET["durum"]=="cikis")
          echo "Başarıyla çıkış yapıldı";
    ?>

    <?php } else { ?>
        <h1>Kullanıcı Paneli</h1>
        <p>Sayın <?php echo  $_SESSION["kad"].$_SESSION["email"]?> hoşgeldin</p>
        <a href="cikis.php"><button>Çıkış Yap</button></a>
        <?php } ?>
</body>
</html>