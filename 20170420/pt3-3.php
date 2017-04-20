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
        $cht = $_POST['cht'];
        $math = $_POST['math'];
        $en = $_POST['en'];
        $total = $cht + $math + $en;
        $avg = $total / 3; 
        echo "<p>"."國文:".$_POST['cht'];
        echo "<p>"."數學:".$_POST['math'];
        echo "<p>"."英文:".$_POST['en'];
        echo "<p>"."總分:".$total."平均".$avg;

    ?>
          
    <br>
</body>
</html>