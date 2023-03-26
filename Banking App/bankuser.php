<?php
include("connection.php");
if(isset($_SESSION['name']) && isset($_SESSION['Bank'])){
    $bank=$_SESSION['Bank'];
    $sql="select * from user where Bank='$bank' order by date asc";
    $res=mysqli_query($con,$sql);
}else{
    header("Location:Bank_login.php");
}
?>