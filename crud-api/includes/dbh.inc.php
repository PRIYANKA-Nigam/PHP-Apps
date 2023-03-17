<?php
$servername="localhost";
$username="root";
$password="";
$dbname="crud";
$link=mysqli_connect($servername,$username,$password,$dbname);
$conn=mysqli_select_db($link,$dbname);
if($conn){
    echo "Connection successful";
}else {
    die("Connection failed because ". mysqli_connect_error());
}
?>