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
     $price[0] = 6000;
        $price[1] = 15000;
        $price[2] = 12000;

        $products[0] = "Iphone 8";
        $products[1] = "sony z";
        $products[2] = "小米 r1";

        for ($i=0; $i < count($price) ; $i++) { 
            echo $products[$i]." 這隻手機售價為: ".$price[$i] ."<br>";
        }
        ?>
</body>
</html>