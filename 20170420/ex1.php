<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
      <?php
    
        $price = 100;
         //$price = $price +1;
        echo $price++;
        echo "<br>";
        echo $price;

        echo "<hr>";

        $price1 = 100;
        echo ++$price1;
        echo "<br>";
        echo $price1;

        $x = 10;
        $y = 2;

      echo "<hr>";
        $z = $y*($x++);
        echo " x : ". $x ." y : ". $y . " z: ".$z;

        echo "<hr>";

        $word = "大三元輸球";
        $word .= "<br>";
        echo $word;

        echo "他拿了51分";
        


    
    ?>
</body>
</html>