<?php
require_once("baglan.php");
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
		<tr height="30">
			<td colspan="2"></td>
		</tr>
		<tr height="30" bgcolor="#990000">
			<td align="left" style="color: white;">&nbsp;Makale Başlığı</td>
			<td align="right" style="color: white;">Gösterim Sayısı&nbsp;</td>
		</tr>
		<?php
		$Sorgu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM ogrenci");
		$Sorgu->execute();
        $KayitSayisi	=	$Sorgu->rowCount();
		$Kayitlar		=	$Sorgu->fetchAll(PDO::FETCH_ASSOC);
		if ($KayitSayisi>0) {
			foreach($Kayitlar as $satirlar){        
		?>
		<tr><td align = "left"><a href="oku.php?id=<?php echo $satirlar["id"] ?>"><?php echo $satirlar["ad"] ?></a></td><td align = "right"><?php echo $satirlar["gosterim_sayisi"] ?></td></tr>
		

		<?php 
			}
		}
		?>
	</table>
</body>
</html>
<?php
$VeritabaniBaglantisi	=	null;
?>