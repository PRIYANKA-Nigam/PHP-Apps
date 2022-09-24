<?php
session_start(); //to access a session this method is used

include("connection.php");
include("function.php");
$user_data= check_login($con);
$_SESSION;   //session is a global variable that can be access by any page of a website

?>


<!doctype html>
<html>
    <head>
        <title>My website</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>This is the index page</h1>
    <br>
    hello , <?php echo $user_data['user_name'];  ?>
</body>
</html>