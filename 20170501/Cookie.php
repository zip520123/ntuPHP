<?php
    if (isset($_COOKIE['user'])){
        $message = "hi 你是: ".$_COOKIE['user']."歡迎入站";
    }else{
        setcookie('user',"iverson",date('U')+60);
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
    <?= $message ?>
</body>
</html>