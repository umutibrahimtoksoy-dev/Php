<?php

error_reporting();
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$mail = $_POST["mail"];
$sehir = $_POST["sehir"];

$db = new PDO("mysql:host=localhost;dbname=deneme;charset=utf8","root","");
$ekle = $db->query("INSERT INTO bilgiler (bilgiler_ad,bilgiler_soyad,bilgiler_mail,bilgiler_sehir) values ('$ad','$soyad','$mail','$sehir')");

if($ekle) 
{
    Header("Location:index.php");
    exit;
}
   else echo "eklenmedi"; 



?>