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
    
    $number = [58,97,48,25,36,44,10,96,100,7];

    foreach ($number as $value) {
        echo $value . " ,";
    }
    echo "<hr>";

    sort($number);
    foreach ($number as $value) {
        echo $value . " ,";
    }
    echo "<hr>";

    rsort($number);
    foreach ($number as $value) {
        echo $value . " ,";
    }
    echo "<hr>";

    
    
    
    ?>
</body>
</html>