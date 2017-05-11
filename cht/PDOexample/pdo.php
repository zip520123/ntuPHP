<?php

require('dbconfig.php');

$pdo = new PDO(dsn,username,password);

$sql = "select * from books where booksName = :booksName";
$result = $pdo->prepare($sql);
$result->execute(['booksName' => '一粥刊']);

foreach ($result as $value) {
    echo $value['booksName']."<br>";
}





?>