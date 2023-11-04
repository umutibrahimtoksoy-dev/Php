<?php
// SESSION SILME tekli?
// unset fonk. kullanılır unset() => herhangi bir değişkeni tanımsız yapar.
session_start();
error_reporting(0);
unset($_SESSION['Sehir']);

// komple SESSION silme session_destroy(); fonksiyonu ile yapılır sadece tanımlamak yeterli
session_destroy();
?>