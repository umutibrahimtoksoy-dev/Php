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
    // function_exists() parantez içine yazılan fonksiyonun var olup olmadığını kontrol eder
    function yaz($a){
        return $a;
    }

    if(function_exists("yaz"))
       echo "fonksiyon var";
       else "fonksiyon yok";
       
    ?>
</body>
</html>