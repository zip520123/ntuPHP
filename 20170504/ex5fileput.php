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
    
        $filename = "word.txt";
        file_put_contents($filename , "姓名,生日\n");
        file_put_contents($filename , "22,11,11\n");

        // $filename = "word.csv";

        // $getData = file_get_contents($filename);

        // echo $getData;
    ?>
    <a href ="<?= $filename?>">檔案檢視</a>


</body>
</html>