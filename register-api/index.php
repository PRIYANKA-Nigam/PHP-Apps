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
    hello , <?php echo $user_data['user_name'];
             echo "<br>";
    echo  $_SESSION['user_id']?>
    <img src="<?php echo $user_data['image_name']; ?>" width="100" height="100">
</body>
</html>