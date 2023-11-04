<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Kullanıcı Bilgileri</h1>
    <hr>
    <form action="islem.php" method="POST">
        <input type="text" name="bilgiler_ad" required="" placeholder="Adınızı Giriniz..." >
        <input type="text" name="bilgiler_soyad" required="" placeholder="Soyadınızı Giriniz...">
        <input type="email" name="bilgiler_mail" required="" placeholder="Mailinizi Giriniz..." >
        <input type="text" name="bilgiler_sehir" required="" placeholder="Şehir Giriniz...">
        <button type="submit" name="crud">Kaydet</button>
    </form>
</body>
</html>