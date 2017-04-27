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
        $word = "Iverson";

        echo strtolower($word);
        echo "<hr>";
        echo strtoupper($word);

        $word1 = "                   Paul Gergeo           ";
        echo "<hr>!!!".$word1."!!!<hr>";

        $word2 = "an apple a day, keeps the Doctor away!!<br>";
        echo str_replace('apple','orange',$word2);
        echo "<hr>";

        $word3 = "2017/04/27";
        echo str_replace('/','',$word3);
    
    
    ?>
</body> 
</html>