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
        $word['money'] = "錢";


             $price[0] = 6000;
        $price[1] = 15000;
        $price[2] = 12000;

        $products[0] = "Iphone 8";
        $products[1] = "sony z";
        $products[2] = "小米 r1";
 foreach($products as $index => $value)
        {
            echo "第".$index."支手機:" . $value."價格為".$price[$index]."<br>";
        }
        echo "<br>";
       foreach($products as $value)
        {
            echo "第".$index."支手機:" . $value."價格為".$price[$index]."<br>";
        }
    ?>
</body>
</html>