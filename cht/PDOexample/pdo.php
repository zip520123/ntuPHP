<?php

require('dbconfig.php');

$pdo = new PDO(dsn,username,password);

$sql = "select * from userdata where userName = :userName";
$result = $pdo->prepare($sql);
$result->execute(['userName' => '艾佛森']);

foreach ($result as $value) {
    echo $value['userName']."<br>";
}





?>