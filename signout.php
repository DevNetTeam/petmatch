<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "classes/dbClass.php";
require_once "classes/User.php";
if (isset($_SESSION['user'])){
    session_destroy();
    header("Location: main.php");
    ob_end_flush();
    die();
}
//echo "signed out";
?>