<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
    $number = ['iverson' => 58,'T-mac' => 97,'kobe' => 48,
    'wade' => 25,'malo' => 36,'paul' => 44, 'Yao' => 10,
    'penny' => 96,'jackson' => 100,'Davice' => 7];

    foreach ($number as $key => $value) {
        echo $key ."--".$value . "<br>";
    }
    echo "<hr>";

    ksort($number);
    foreach ($number as $key => $value) {
        echo $key ."--".$value . "<br>";
    }
    echo "<hr>";

    arsort($number);
    foreach ($number as $key => $value) {
        echo $key ."--".$value . "<br>";
    }
    echo "<hr>";

    
    
    
    ?>
</body>
</html>