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
        $fileName = "data.txt";
        // $fop = fopen($fileName,"w+");
        if ($fop = fopen($fileName,"w+")){
            echo "開檔成功";
        }else{
            echo "開檔失敗";
            exit;
        }
    ?>
</body>
</html>