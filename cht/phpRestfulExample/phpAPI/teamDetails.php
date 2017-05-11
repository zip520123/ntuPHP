<?php

if (!isset($_SERVER['PATH_INFO']))
    exit;
$codeTemp = explode('/', trim($_SERVER['PATH_INFO'] , '/'));
$code = $codeTemp[0];



session_start();
if ( !isset($_SESSION['user']) )
{
    header('HTTP/1.1 500 Internal Server');
    $json['msg'] = "Please login to access this information";
    echo json_encode($json);
    exit;
}


require_once("./dbconfig.php");

$linkDB = new PDO(dsn, username, password);

$sql = "select * from teamDetails where fifaCode = :code";
$dataModel = $linkDB -> prepare($sql);
$dataModel -> execute( ['code' => $code ] );

$result = $dataModel->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(array_shift($result),JSON_UNESCAPED_SLASHES);



?>