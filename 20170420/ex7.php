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
        $i = 1;
        $j = 10;
        $k=1;
        while ($k <= 100) {
            echo "計算中i:$i<br>";
            if ($i > $j){
                break;
            }
            $i++;
            $j--;
            $k++;
        }
        echo "i :$i , j:$j";
    ?>
</body>
</html>