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
    $a1 = 'allan';
    $a1pw = '1234';

    $a2 = 'bill';
    $a2pw = '5678';
    $getA = $_POST['account'];
    $getP = $_POST['pw'];
    if ( $getA == $a1 && $getP == $a1pw){
        echo "<p> 登入成功 $a1";
    }elseif( $getA == $a2 && $getP == $a2pw){
        echo "<p> 登入成功 $a2";
    }else{
        echo "<p> 登入失敗";

    }
    ?>
</body>
</html>