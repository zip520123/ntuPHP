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
        $fileName = "grade.txt";

        $dataTitle = "姓名,國文,英文,數學\n";
        $dataRaw = "80,90,80\n";
        $fop = fopen($fileName,"w+");

        fwrite($fop,$dataTitle);
        fwrite($fop,$dataRaw);
        fclose($fop);
        echo "完成";

    ?>
</body>
</html>