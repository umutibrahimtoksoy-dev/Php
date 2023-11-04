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
        <input type="text" name="ad" required="" placeholder="Adınızı Giriniz..." >
        <input type="text" name="soyad" required="" placeholder="Soyadınızı Giriniz...">
        <input type="email" name="mail" required="" placeholder="Mailinizi Giriniz..." >
        <input type="text" name="sehir" required="" placeholder="Şehir Giriniz...">
        <button type="submit" name="crud">Kaydet</button>
    </form>
</body>
</html>