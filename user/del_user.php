<?php
include_once("./include/connect.php");

$sql="delete from `users` where `id`=`` ";





$pdo->exec($sql);







unset($_SESSION['user']);

header("location:../");
?>