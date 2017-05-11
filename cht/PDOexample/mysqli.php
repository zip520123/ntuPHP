<?php

// 引入資料庫設定
require('./dbconfig.php');

//建立 mysqli 物件
$linkId = new mysqli(dbhost, username ,password, dbname);

if ($linkId->connect_errno)
{
    echo "conect problem <br>";
    echo "Errno : " . $linkId->connect_errno. "<br>";
    echo "Error : " . $linkId->connect_error. "<br>";
    exit;
}

//設定編碼
$linkId->set_charset("utf8");

$sql = "select * from books";
$result = $linkId->query($sql);

while ($row = $result->fetch_array()) {
    print_r($row);
}

$linkId->close();

?>