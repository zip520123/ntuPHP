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
        
        foreach ($_POST['sport'] as $key => $value) {
            echo "<br>$value";
        }
    
    ?>
</body>
</html>