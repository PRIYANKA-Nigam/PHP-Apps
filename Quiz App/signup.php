<?php
session_start();

include("connection.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    //Warning: Undefined array key "img" in C:
    //Warning: Undefined array key "password" in C:\xampp\htdocs\register-api\signup.php on line 9 ->used isset 
    // to remove such warnings when no input is submitted through form


    $user_name=isset($_POST['user_name'])? $_POST['user_name']:null;
    $password=isset($_POST['password'])? $_POST['password']:null;
    $im=isset($_FILES['img'])?$_FILES['img']:null; 
    //on using print_r() image name will be printed along with ['tmp'] and a tmp folder 
    //will be created in our local.so always use in below format with $_FILES[][] for image priting

    $img =isset($_FILES['img']['name'])?$_FILES['img']['name']:null;
    $tmp_img=isset($_FILES['img']['tmp_name'])? $_FILES['img']['tmp_name']:null;
    $img_error=isset($_FILES['img']['error'])?$_FILES['img']['error']:null;
    $folder='upload/';  $final=$folder.$img;
    if($img_error==0){
        $final=$folder.$img;
        move_uploaded_file($tmp_img,$final);
    }
      
   
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        $query ="select * from users where user_name='$user_name' limit 1";
        $result= mysqli_query($con,$query);
        if(mysqli_num_rows($result)==0){
            $user_id=random_num(20);
            $query ="insert into users(user_id,user_name,password,image_name) 
            values('$user_id','$user_name','$password','$final')";
            mysqli_query($con,$query);
            header("Location: login.php");
            die;
        }else{
            echo "Username already taken.Kindly signup with different username";
        }
           
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
    padding: 55px;
}
.a{
    background-color: blueviolet;
    margin: auto;
    text-align: center;
    height: 375px;
    width: 650px;
    border-radius: 50%; 
    /* for circle */
}
.b{
    background-color: blueviolet;
    margin: auto;
    text-align: center;
    height: 60px;
    width: 150px;
    border-radius: 50%; 
}
    </style>
    <div class="a">
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
<br><br>
<div class="b">
<label><a href="display.php"><b>View Registered Profiles</b></a></label>
</div>
</div>
</body>
</html>