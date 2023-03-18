<?php
include('dbh.inc.php');


function emptyInputSignUp($name,$email,$username,$password,$password2){ 
    $result=false;
if(empty($name) || empty($email) ||empty($username) || empty($password)|| empty($password2)){
    $result=true;
}
else {
    $result=false;
}
return $result;
}

// function invalidUid($username){   
//     $result=false;
// if(!preg_match("/^[a-zA-Z0-9]*$/"), $username){
//     $result=true;
// }
// else {
//     $result=false;
// }
// return $result;

// }

function invalidemail($email){ 
    $result=false;
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $result=true;
}
else {
    $result=false;
}
return $result;
}

function pwdMatch($password,$password2){ $result=false;
if($password !== $password2){
    $result=true;
}
else {
    $result=false;
}
return $result;
}
function uidexists($conn,$username,$email){ 
    $sql="SELECT * FROM gtl WHERE uid=? OR email=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
header("location: ../signup.php?error=stmtfailed");
exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
 if($row=mysqli_fetch_assoc($resultData)){
  return $row;
 }
 else{
    $result=false;
return $result;
 }

 
}

function createuser($conn,$name,$email,$username,$password){ 
    $sql="INSERT INTO gtl(username,email,uid,userpwd) VALUES(?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
header("location: ../signup.php?error=stmtfailed");
exit();
    }

    $hashedPwd= password_hash($password,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$password);
    mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ../signup.php?error=none");
exit(); 
}

?>