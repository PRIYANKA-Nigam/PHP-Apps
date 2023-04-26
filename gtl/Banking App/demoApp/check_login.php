<?php
session_start();
include("../connection.php");
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])){
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
$username=test_input($_POST['username']);
$password=test_input($_POST['password']);
$role=test_input($_POST['role']);

if(empty($username)){
    header("Location:index.php?error=Username is required");
}else if(empty($password)){
    header("Location:index.php?error=Password is required");
}else{
    //hashing pwd
   $password=md5($password);
    $sql="select * from users where username='$username' and password='$password'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)===1){
        $row=mysqli_fetch_assoc($res);
       if($row['password']===$password && $row['role']==$role){
        $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];
        $_SESSION['role']=$row['role'];
        $_SESSION['username']=$row['username'];
        header("Location:home.php");
       }else{
        header("Location:index.php?error=Incorrect Username or password");
       }

    }else{
        header("Location:index.php?error=Incorrect Username or password");
    }


}
}else{
    header("Location:index.php");
}
?>