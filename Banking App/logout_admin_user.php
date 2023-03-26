<?php
session_start();
session_unset();
session_destroy();
header("location:Bank_login.php");

?>