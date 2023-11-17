<?php
session_save_path("tmp");
session_start();

$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
if(isset($_SESSION['user'])){
    $sql="select * from `users` where `acc` = '{$_SESSION['user']}' ";
}


// this is a page to copying session_start
?>