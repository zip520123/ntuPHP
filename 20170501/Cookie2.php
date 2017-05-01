<?php
$count = 1;
    if (isset($_COOKIE['count'])){
        $count = $_COOKIE['count']+1;
        setcookie('count' , $count);
    }else{
        setcookie('count',$count);
        $message = "現在你cookie未設定，不過等下來你就有設定了";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= $count ?>
</body>
</html>