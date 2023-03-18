<?php
session_start();

include("connection.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $img =$_FILES['img']['name'];
    $tmp_img= $_FILES['img']['tmp'];
    $folder='upload/'; 
        move_uploaded_file($tmp_img,$folder.$img);
   
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            $user_id=random_num(20);
           $query ="insert into users(user_id,user_name,password,image_name) 
           values('$user_id','$user_name','$password','$img')";
           mysqli_query($con,$query);
           header("Location: login.php");
           die;
    }else{
        echo "Please enter some valid information!";
    }
}

?>
<!doctype html>
<html>
    <head>
        <title>Signup</title>
</head>
<body>
   <style type="text/css">
    #text{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width:  300px;
    }
#button{
    padding: 10px;
    width: 100px;
    color: white;
    background-color:Lightblue;
    border: none;
}
#box{
    background-color: grey;
    margin: auto;
    width: 300px;
    padding: 20px;
}
    </style>
    <div id="box">
<form method="post" enctype="multipart/form-data">
    <div style="font-size: 20px; margin: 10px;color: white;">Signup</div>
    <input id="text" type="text" name="user_name"><br><br>
    <input id="text" type="password" name="password"><br><br>
    <input type="file" name="img"><br><br>
    <input id="button" type="submit" value="Signup"><br><br>
    <a href="login.php">Click to Login Page</a><br><br>
</form>
</div>
</body>
</html>