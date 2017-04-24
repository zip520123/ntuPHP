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
    
        $num = 0;
        $count = 0;

        do {
            if (++$num%3 == 0){
                if (++$count == 9){
                    echo "第".$count ."個3的倍數為: " .$num ."<br>";
                    echo "結束程式";
                    exit;
                } else {
                    echo "第".$count ."個3的倍數為: " .$num ."<br>";
                }

            }
        } while ($num <= 1000);
    

        echo "檢查exit會不會執行，溜馬輸球4-0";
    ?>
    ?>
</body>
</html>