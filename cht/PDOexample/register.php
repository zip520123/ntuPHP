<?php

//引入資料庫設定
require('./dbconfig.php');

// 建立PDO 物件 來連線資料庫
$linkDb = new PDO(dsn,username,password);

//準備 sql 語法
$sql = "insert into userdata (userId,userPwd,userName , email,createDate) values (:userId,:userPwd,:userName , :email,:createDate) ";

// 將語法送入連線中就緒
$result = $linkDb->prepare($sql);

// 執行sql 並在此時將使用者資料給入
$status = $result->execute(
    [ 'userId' => $_POST['userId'] ,
      'userPwd'=> md5($_POST['userPwd']) ,
      'userName' => $_POST['userName'] ,
      'email' => $_POST['email'],
      'createDate' => date('Y-m-d') ]);

// 狀態會記錄 true or false 來看是否寫入成功
if ($status )
{
    echo "註冊成功";
    echo '<a href="login.html">登入</a>';
} else {
    echo $status;
    var_dump($result->errorInfo());
}

//關閉資料庫連線
$linkDb = null;

?>