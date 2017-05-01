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
        require_once("./verify.php");
        // require_once("./user.php");
        $id = $_POST['id'];
        $pw = $_POST['pw'];
        $returnID = findUser($id );
        if ($returnID != "fail"){
            findPW($returnID , $pw);
        }else{
            echo "login fail";

        }
    ?>
</body>
</html>