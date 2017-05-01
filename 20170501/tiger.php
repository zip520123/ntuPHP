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
        include("./game.php");
        $date = [getNumber() , getNumber(),getNumber()];
        for ($i=0;$i<count($date);$i++){
            show($i, $date[$i]);

        }
        if (judge($date[0],$date[1],$date[2])){
            echo "中";
        }else{
            echo "沒中";
        }
    ?>
</body>
</html>