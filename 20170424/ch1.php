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
    $b = $_POST['b'];

    $f = $_POST['f'];
    $totalb = 0;
    $totalf = 0;
    foreach ($b as $key => $value) {
        $totalb += $value;
    }
    foreach ($f as $key => $value) {
        $totalf += $value;
    }

    echo '阿寶'.$totalb.'<br>';
    echo '阿花'.$totalf.'<br>';
    if ($b > $f) {
        echo "阿寶大於阿花";

    }else{
        echo "阿花大於阿保";
    }
    echo "<hr>";
    print_r($_POST);
    echo "<hr>";
    var_dump($_POST);
    ?>
</body>
</html>