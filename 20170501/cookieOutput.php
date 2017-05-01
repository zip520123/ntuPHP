
<?php 
    $msg = "";
    if (isset($_COOKIE['login'])){
        $msg = "已經登入";
    }else{
        setcookie('login',true , date('U')+10);
        $msg = "尚未登入";
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
    <?php
        echo $msg
    ?>
</body>
</html>