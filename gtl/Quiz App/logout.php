<?php
session_start();
if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);

}  
// or
// session_unset();
// session_destroy();
header("Location: login.php");
die;
?>