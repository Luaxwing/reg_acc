<?php 
// session_save_path("tmp");
// session_start();

// include "session_start();"
include_once("./include/connect.php");

unset($_SESSION['user']);

header('location:login_form.php');

?>