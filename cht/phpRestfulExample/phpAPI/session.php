<?php
session_start();
if ( !isset($_SESSION['user']) )
{
    header('HTTP/1.1 500 Internal Server');
    $json['msg'] = "Please login to access this information";
    echo json_encode($json);
    exit;
}

$json['loginStatus'] = true;
$json['user'] = $_SESSION['user'];

echo json_encode($json);
?>