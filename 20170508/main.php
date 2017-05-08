<?php
    session_start();
    if (!isset($_SESSION['login'])){
        header("location:login.html");
        exit;
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
    歡迎光臨 <?= $_SESSION['login']?>
</body>
</html>