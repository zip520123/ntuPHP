<?php
    $folder = "./img/";

    date_default_timezone_set("Asia/Taipei");
    echo var_dump($_FILES);
    
    $fileNameElemant = explode("." ,$_FILES['file']['name']);

    $path = $folder.$fileNameElemant[0].date('YmdHis').'.'.$fileNameElemant[1];
    move_uploaded_file($_FILES['file']['tmp_name'],$path);
    
?>
<img src ="<?= $path ; ?>" alt = "剛剛上傳的圖">