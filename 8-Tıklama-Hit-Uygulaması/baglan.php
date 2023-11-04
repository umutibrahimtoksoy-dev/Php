<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=okul;charset=UTF8","root","");
} catch(PDOException $Hata){
    echo $Hata->getMessage();
    die();
}
function Filtre($Deger){
	$Bir	=	trim($Deger);
	$Iki	=	strip_tags($Bir);
	$Uc		=	htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc	=	$Uc;
	return $Sonuc;
}

?>