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
               $input = 'money';

        $word['dragon'] = "龍，遠古生物";
        $word['gun'] = "槍，武器遠距離攻擊";
        $word['money'] = "錢，買東西用";
        $word['cat'] = "貓，四腳動物會抓老鼠，叫聲喵";
        $word['dog'] = "狗，四腳動物會顧家， 叫聲旺";

        echo "使用者目前的輸入為: ". $input."<br>";
        echo "查詢結果 : ". $word[$input];
    ?>
</body>
</html>