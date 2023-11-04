<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bir{
        display: inline;
        color: red;
        background-color: black;
    }
    </style>
</head>
<body>

    <?php 
    //for döngüsünü html ile iç içe çalıştırma

    for ($i=0; $i<10 ; $i++) { 
        ?>
          <div class="bir">
            <?php echo $i;?>
          </div> 
        <?php
    }
    
    
    ?>
    <br><br><hr>
    <select name="" id="">
       <?php 
          for ($i=1; $i <=81 ; $i++) { 
              ?> 
              <option value=""><?php echo $i; ?></option> 
              <?php
          }



       ?>

       <?php
       $dizi = ["elma","armut","üzüm","kavun","karpuz","emrah","udemy"];

       echo $dizi[0];
       for ($i=0; $i <=5; $i++) { 
           echo $dizi[i];
       }        
       ?>
    </select>
  

</body>
</html>