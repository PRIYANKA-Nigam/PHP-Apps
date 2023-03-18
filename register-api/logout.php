<?php
session_start();
if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);

}  
// or
// session_unset();
header("Location: login.php");
die;
?>