<?php 
// session_save_path("tmp");
// session_start();

// include "session_start();"
include_once("./include/connect.php");

$acc=$_POST['acc'];
$pw=$_POST['pw'];

// $dsn="mysql:host=localhost;charset=utf8;dbname=member";
// $pdo=new PDO($dsn,'root','');

// ---1
// $sql="select * from users where `acc` = '$acc' && `pw` = '$pw'";
$sql="select count(*) from users where `acc` = '$acc' && `pw` = '$pw'";
// $user=$pdo->query($sql)->fetch();

// ---2
$user=$pdo->query($sql)->fetchColumn();
// 如果查詢結果為真，會回傳有效值。如果為假，則不傳值

print_r($user);

// ---1
// if($user["acc"]==$acc && $user['pw']==$pw){
//     $_SESSION['user']=$acc;
//     header('location:../index.php');
// }else{
//     header('location:login_form.php?error=帳號密碼錯誤');
// }

// ---2
// 如果$user有值，為TRUE；否則為FALSE
if($user){
    $_SESSION['user']=$acc;
    header('location:../index.php');
}else{
    header('location:login_form.php?error=帳號密碼錯誤');
}

?>