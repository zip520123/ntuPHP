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

        $age = 65;
        $tax = 1500;
        if ($age < 18){
            echo "未成年稅金原價";
        }elseif ($age >= 18 && $age < 30){
            echo "已成年";
            $tax*= 1.1;

        }elseif ($age >= 30 && $age < 40){
            echo "30 ~ 40歲 2成";
            $tax *=1.2;
        }elseif ($age >= 40 && $age < 65){
            echo "40 ~ 65歲 2成1";
            $tax *=1.21;

        }else{
            echo "退休";
            $tax = 0;
        }
        echo "要繳稅".$tax
    ?>
</body>
</html>