<?php 
date_default_timezone_set('Europe/Istanbul');
// COOKIE nedir nasıl oluşturulur?
/*$adsoyad="umut ibrahim toksoy";
setcookie("adsoyad",$adsoyad);
echo $_COOKIE["adsoyad"];
*/

//Süreli COOKIE oluşturma?
$adsoyad="umut ibrahim toksoyzzZZ";
//setcookie("adsoyad",$adsoyad,time()+3600); //bir saat
setcookie("adsoyad",$adsoyad,strtotime("+10 hours"));
echo $_COOKIE["adsoyad"];


/*COOKIE süre arttırma
strtotime("+30 seconds") 30 saniye
strtotime("+1 hours") 1 saat
strtotime("+1 day") 1 gün
strtotime("+1 week") 1 hafta

örnek:
setcookie("adsoyad",$adsoyad,strtotime("+1 week"));

*/
?>