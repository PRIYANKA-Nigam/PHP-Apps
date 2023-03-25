<?php
include("connection.php");
if(isset($_SESSION['username']) && isset($_SESSION['id'])){
    $sql="select * from users order by id asc";
    $res=mysqli_query($con,$sql);
}else{
    header("Location:index.php");
}
?>