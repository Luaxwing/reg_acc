<?php
include_once("./include/connect.php");
// $dsn="mysql:host=localhost;charset=utf8;dbname=member";
// $pdo= new PDO($dsn,'root', '');
$acc=htmlspecialchars(trim($_POST['acc']));

$sql="insert into `users`(`acc`,`pw`,`name`,`email`,`address`)
                   values('{$acc}','{$_POST['pw']}','{$_POST['name']}',
                   '{$_POST['email']}','{$_POST['adress']}') ";

$pdo->exec($sql);

header("Location:../index.php");