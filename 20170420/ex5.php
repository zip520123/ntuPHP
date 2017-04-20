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
         $blood = $_GET['blood'];
    
        switch ($blood) {
            case 'A':
                echo "A 型血的 性格.......";
                break;
            case 'B':
                echo "B 型血的 性格.......";
                break;
            case 'O':
                echo "O 型血的 性格.......";
                break;
            case 'AB':
                echo "AB 型血的 性格.......";
                break;
            default:
                echo "血型不存在 輸入有誤";
                break;
        }
    
    ?>
</body>
</html>