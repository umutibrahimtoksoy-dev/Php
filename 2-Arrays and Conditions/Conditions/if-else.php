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
    // kısa if kullanımı
    $say=800;
    echo $say=='800' ? 'doğru' : "yanlış";
    echo "<br><br>";

    $deger = "elma";


    ?>
    <select name="" id="">
    <option value="" <?php echo $deger=='armut' ? 'selected' : '' ?>>Armut</option>
    <option value="" <?php echo $deger=='elma' ? 'selected' : '' ?>>Elma</option>
    </select>
</body>
</html>