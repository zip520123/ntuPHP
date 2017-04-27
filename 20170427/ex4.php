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
        $array = range(1,10);
        foreach ($array as $key => $value) {
            echo "$array[$key]";
        }
        
        shuffle($array);
        echo "<hr>";
        foreach ($array as $key => $value) {
            echo "$array[$key]";
        }
    ?>
</body>
</html>