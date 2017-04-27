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

        $array = [0,0,0,0,0,0];
        $i = 0;
        while ($i < 10000) {
            $array[rand(0,5)]++;
            $i++;
        }
        $j = 0;
        echo "<br>";
        while ($j < 6) {
            echo "點數".($j+1)."共出現$array[$j]次 機率".$array[$j]/100;
            echo "%<br>";
            $j++;
        }
        
    ?>
</body>
</html>