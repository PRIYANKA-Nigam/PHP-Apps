<?php
$con=mysqli_connect("localhost","root","") or die("I cannot connect to the database".mysql_errno());
mysqli_select_db($con,"itallrounder");
mysqli_query($con,"SET NAMES 'utf8'");


?>