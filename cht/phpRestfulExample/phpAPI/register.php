<?php

require_once('dbconfig.php');

$userId = $_POST['userId'];
// $userPwd = $_POST['userPwd'];
// $userPwd = md5($_POST['userPwd']);
// $userPwd = hash('md5' , $_POST['userPwd']);
$userPwd = hash('sha256' , $_POST['userPwd']);
// $userPwd = password_hash($_POST['userPwd'] , PASSWORD_DEFAULT );
$userNmae = $_POST['userName'];

$pdo = new PDO( dsn , username , password);

$sqlUserExist = "select * from user where userId = :userId";
$dataModel = $pdo -> prepare($sqlUserExist);
$dataModel -> execute([ 'userId' => $userId ]);

if(!empty($dataModel->fetchAll()))
{
    header('HTTP/1.1 500 Internal Server');
    echo json_encode(['msg' => "your account already exist"]);
    exit;
}

$sqlCreatUser = "insert into user (userId , userPwd , userName) values (:userId , :userPwd , :userName)";
$dataModel = $pdo -> prepare($sqlCreatUser);
if ( $dataModel -> execute( ['userId' => $userId , 'userPwd' => $userPwd , 'userName' => $userNmae ] ) )
{
    echo json_encode(['msg' => " create user $userId susscess "]);
    exit;
}
?>