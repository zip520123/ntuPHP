<?php
session_start();

$userA = 'iverson';
$pwdA = '3345678';

$userInput = $_POST['id'];
$pwdInput = $_POST['pwd'];

if (($userA == $userInput) && ($pwdA == $pwdInput))
{
    $_SESSION['login'] = $userInput;
    echo "登入成功<a href='main.php'>主程式</a>";
} else {
    session_destroy();
    echo "登入失敗<a href='login.html'>在試一次</a>";
    header("location:login.html");
}

?>