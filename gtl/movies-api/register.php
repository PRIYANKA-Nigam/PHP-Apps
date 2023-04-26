<?php

//http://127.0.0.1/movies-api/register.php?first_name=john&last_name=henry&email=jogn@gmail.com&password=123456
include 'db.php';

if(isset($_GET['first_name']) and isset($_GET['last_name']) and isset($_GET['email']) and isset($_GET['password']) ){

    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = "INSERT INTO users (first_name,last_name,email,password)VALUES('$first_name','$last_name','$email','$password')";

    $result = mysqli_query($con,$sql);
    if($result){
        $res_array = array('status'=>true,'msg'=>'data inserted successfully');
        echo json_encode($res_array);
    }
}
else{
      echo 'invalid parameter';
}




// for post request
if(isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['email']) and isset($_POST['password']) ){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (first_name,last_name,email,password)VALUES('$first_name','$last_name','$email','$password')";

    $result = mysqli_query($con,$sql);
    if($result){
        $res_array = array('status'=>true,'msg'=>'data inserted successfully');
        echo json_encode($res_array);
    }
}
else{
      echo 'invalid parameter';
}

?>