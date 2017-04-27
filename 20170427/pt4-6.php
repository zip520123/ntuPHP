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
    date_default_timezone_set("Asia/Taipei");
    $year = date("Y")-1911;
    $month = date("m");
    $day = date("d");

    $s = "今天是民國 $year 年 $month 月 $day 日<br>";
    $am = "早上";
    if (date("a") == "pm" ){
        $am = "晚上";
    }
    $hour = date("H");
    $min = date("i");
    $sec = date("s");
    $s1 = "現在是 $am $hour 點 $min 分 $sec 秒";
        echo $s." ". $s1;
    ?>
</body>
</html>