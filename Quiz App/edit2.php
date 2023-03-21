<?php
session_start();

include("connection.php");
include("function.php");
$username=$_GET['name'];
//echo $username;
$id=0;
$query="select * from users where user_name='$username'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0){
 $user=mysqli_fetch_array($res);
 $id=$user['user_id'];
}
if(isset($_POST['up'])){
    $user_name=isset($_POST['user_name'])? $_POST['user_name']:null;
    $password=isset($_POST['password'])? $_POST['password']:null;
    $im=isset($_FILES['img'])?$_FILES['img']:null; 
   

    $img =isset($_FILES['img']['name'])?$_FILES['img']['name']:null;
    $tmp_img=isset($_FILES['img']['tmp_name'])? $_FILES['img']['tmp_name']:null;
    $img_error=isset($_FILES['img']['error'])?$_FILES['img']['error']:null;
    $folder='upload/';  $final=$folder.$img;
    if($img_error==0){
        $final=$folder.$img;
        move_uploaded_file($tmp_img,$final);
    }
    $query="UPDATE users SET  user_name='$user_name', password='$password',image_name='$final'
     where user_id='$id'";
     $query_run=mysqli_query($con,$query);
     if($query_run){
        mysqli_query($con,$query);
        header("Location: display.php");
        die;
     }else{
        echo "User Not updated";
        header("Location: display.php");
     }


}


?>
<!doctype html>
<html>
    <head>
        <title>Update User</title>
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
    margin-top: 50px ;
    margin-left: 110px;
    width: 300px;
    padding: 70px;
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
    </style>
    <div class="a">
    <div id="box">
        <?php 
         $query="select * from users where user_name='$username'";
         $res=mysqli_query($con,$query);
         if(mysqli_num_rows($res)>0){
          $user=mysqli_fetch_array($res);
        //  print_r($user);
        ?>
        
<form method="post" enctype="multipart/form-data">
    <div style="font-size: 20px; margin: 10px;color: white;">Update Profile</div>
    <input id="text" type="text" name="user_name" value="<?php echo $user['user_name'] ?>"><br><br>
    <input id="text" type="password" name="password" value="<?php echo $user['password'] ?>"><br><br>
    <input type="file" name="img" value="<?php echo $user['image_name'] ?>"><br><br>
    <input id="button" type="submit" name="up" value="Update"><br><br>
    <!-- <a href="login.php">Click to Login Page</a><br><br> -->
</form>
        <?php

         }else{
            echo "No profile found to update";
         }

        ?>

</div> 
</div>
</body>
</html>