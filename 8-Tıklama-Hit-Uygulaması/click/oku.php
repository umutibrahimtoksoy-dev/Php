<?php
require_once("baglan.php");
$GelenID		=	Filtre($_GET["id"]);

$HitGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE okul SET gosterim_sayisi=gosterim_sayisi+1 WHERE id = ?");
$HitGuncelle->execute([$GelenID]);
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<table width="1000" border="0" cellpadding="0" cellspacing="0" align="center">
		<tr height="30">
			<td align="left"><b>Görüntüleme ve Hit Uygulaması</b></td>
			<td align="right"><a href="index.php" style="text-decoration: none; color: black;">Anasayfa</a></td>
		</tr>
	<?php
	$Sorgu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM ogrenci WHERE id = ?");
	$Sorgu->execute([$GelenID]);
	echo $KayitSayisi	=	$Sorgu->rowCount();
	$Kayit			=	$Sorgu->fetch(PDO::FETCH_ASSOC);

	if($KayitSayisi>0){
	?>
		<tr height="30">
			<td colspan="2" align="left"><h3><?php echo $Kayit["ad"]; ?><h3></td>
		</tr>
		<tr height="30">
			<td colspan="2" align="left"><?php echo $Kayit["vize"]; ?></td>
		</tr>
		<tr height="30">
			<td colspan="2" align="center">Bu makale <?php echo $Kayit["gosterim_sayisi"]; ?> defa görüntülendi.</td>
		</tr>
	<?php
	}
	else header("location:index.php");
	?>
	</table>
</body>
</html>
<?php
$VeritabaniBaglantisi	=	null;
?>