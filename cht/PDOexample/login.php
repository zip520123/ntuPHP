<?php

//引入資料庫設定
require("./dbconfig.php");

// 建立PDO 物件 來連線資料庫
$linkDb = new PDO(dsn,username,password);

//準備 sql 語法
$sql = "select * from userdata where userId = :userId and userPwd = :userPwd ";

//將語法匯入資料庫連線之中 由$result來取得資料庫查詢結果
$result = $linkDb->prepare($sql);

//執行sql查詢 並將使用者的表單資料送入
$result->execute(
    ['userId' => $_POST['id'] ,
     'userPwd' => md5( $_POST['pwd'] )]
);

//從result 中匯出結果
$row = $result->fetchAll();

//關閉連線
$linkDb = null;

if (empty($row)){
    echo "登入失敗 帳密錯誤";
    exit;
} else {
    setcookie('login', true);
    echo "登入成功";
    echo "<a href='index.php'>首頁</a>";
}

?>