<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
       //error_reporting(0);
       $dizi =array("elma","armut","üzüm","kavun","karpuz","emrah","udemy");     
       $toplam= count($dizi);
       for ($i=0; $i <=$toplam-1; $i++) { 
           echo $dizi[$i]."<br>";
       }        
?>
</body>
</html>