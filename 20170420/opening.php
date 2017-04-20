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
        $math = 75;
        $chinese = 95;
        $english = 85;
        $total = $math + $chinese + $english;

        $avg = $total / 3 ;
        echo "成績為$math $chinese $english <br>";
        echo "總成績$total $avg";
        echo "<hr>"
    ?>
</body>
</html>