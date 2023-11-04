<?php 
session_start();
echo"merba";
if (isset($_POST["kullanici_giris"])) {
$kontrol = 0;
    $db = new PDO("mysql:host=localhost;dbname=kullanicilar;charset=utf8","root","");
    foreach($db->query('SELECT * FROM kullanici', PDO::FETCH_BOTH) as $kyt)
    {
        if ($_POST["kad"] == $kyt[1] && $_POST["sifre"] == $kyt[2]) {
            $_SESSION["kad"] = $_POST["kad"];
            $_SESSION["sifre"] = $_POST["sifre"];
            $_SESSION["email"] = $kyt[3];
            $kontrol=1;
            header("Location:index.php?durum=ok");
            break;
        }
    }
    if($kontrol == 0)
    {
        header("Location:index.php?durum=no");
    }
 
}


?>