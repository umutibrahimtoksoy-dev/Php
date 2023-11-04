<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Gönderimi</title>
    <style>
        table tr td{
            padding:8px;
        }
        
        #buton{           
            height: 50px;
        }
    </style>
</head>
<body>
    <form action="sonuc.php" method="post">
        <table align = center>
            <tr><td>Adınız Soyadınız</td><td><input type="text" name="isim"></td></tr>
            <tr><td>Telefon Numaranız</td><td><input type="text" name="numara"></td></tr>
            <tr><td>E-Mail Adresiniz</td><td><input type="email" name="email"></td></tr>
            <tr><td>Konu</td><td><input type="text" name="konu"></td></tr>
            <tr><td valign ="top">Mesaj</td><td><textarea name="mesaj" id="" cols="30" rows="10"></textarea></td></tr>
            <tr><td collspan=2><input type="submit" value="Gönder" id="buton"></td></tr>
        </table>
    </form>
</body>
</html>