<?php
// start session 
session_start();
// check whether the session variable SESS_MEMBER_ID is present or not 
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['user_id'];
?>