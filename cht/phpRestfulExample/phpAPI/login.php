<?php

if ($_SERVER['REQUEST_METHOD'] != "POST")
    exit;


$userInputId = $_POST['username'];
// $userInputPwd = $_POST['password'];
// $userInputPwd = md5($_POST['password']);
// $userInputPwd = hash('md5' , $_POST['password']);
$userInputPwd = hash('sha256' , $_POST['password']);
// $userInputPwd = password_hash($_POST['password'] , PASSWORD_DEFAULT );

require_once('./dbconfig.php');

$linkDB = new PDO(dsn , username , password);

$sqlUserExist = "select * from user where userId = :userAcount and userPwd = :userPassword";
$dataModel = $linkDB -> prepare($sqlUserExist);
$dataModel -> execute([
    'userAcount' => $userInputId,
    'userPassword' => $userInputPwd
]);


session_start();
if ( count( $dataModel -> fetchAll(PDO::FETCH_ASSOC ) ) != 1)
{
    header('HTTP/1.1 500 Internal Server fuck');
    $json['msg'] = 'Unable to login';

    session_destroy();
} else {
    $json['loginStatus'] = true;
    $json['user'] = $userInputId;
    $_SESSION['user'] = $userInputId;
}

echo json_encode($json);



?>