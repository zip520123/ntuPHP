<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="hw4back.php" method="get" enctype="multipart/form-data">
        <p>請輸入要查詢的中英文單字：<input type="text" name="vocabulary" placeholder = "中英文皆可"></p>
        <input type="hidden" name="all" value="false">
        <button type="submit">送出查詢</button>
    </form>
    <?php
    require_once("hw4dict.php");
        echo "<p>或直接瀏覽單字列表";
        $array = range('A','Z');
        foreach ($array as $key => $value) {
            // echo "$value";
            $keyLower = strtolower($value);
            $needContinue = false;
            foreach ($dict as $dictKey => $dictValue) {
                $dictKeyLower = strtolower(substr($dictKey,0,1));
                if ($dictKeyLower == $keyLower) {
                    echo '<a href="hw4back.php?vocabulary='.$value.'&all=true">'.$value.'</a>';
                    echo " ";
                    $needContinue = true;
                    break;
                                        
                }
            }
            if ($needContinue){
                continue;
            }
            echo "$value";
            echo " ";
            
        }
    ?>
</body>
</html>