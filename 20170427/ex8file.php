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
        $path = "./img/";
        $path = $path . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'] , $path);

    ?>
    <img src="<?=$path?>" alt= "" >
</body>
</html>