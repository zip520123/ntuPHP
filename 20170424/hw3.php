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
        print_r($_POST);
        $dict = ["apple"=>"蘋果","orange"=>"橘子","watermelon"=>"西瓜","strawberry"=>"草莓","pineapple"=>"鳳梨"];
        $input = $_POST["input"];

        echo "$input"." ".$dict[$input];
        foreach ($dict as $key => $value) {
            echo "<br>$key , $value";
            if ($key == $input) {
                echo '<table border="1">';
                echo "<tr><td>英文</td><td>中文</td></tr>";
                echo "<tr><td>$key</td><td>$value</td></tr>";
                echo '</table>';
                exit;
            }
        }
        echo "水果字典中沒有$input";
    ?>

    </table>
    
</body>
</html>