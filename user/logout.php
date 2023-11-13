<?php 
session_save_path("tmp");
session_start();
unset($_SESSION['user']);

header('location:login_form.php');

?>