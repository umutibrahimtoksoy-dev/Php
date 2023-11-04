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
    // Fonksiyonlarda global değişken kullanımı

    $b=10;

    function ekle($a)
    {
        global $b;
        return $a+$b;
    }
    echo ekle(20);
    ?>
</body>
</html>