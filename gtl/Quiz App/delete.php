

   
<?php
include("connection.php");
$username=$_GET['name'];
//echo $username;
if(isset($_POST['del'])){
    $query ="delete from users where user_name='$username'";
    mysqli_query($con,$query);
    echo "Data Deleted ....";
    header("location:display.php");
  }

?>
<br>
<!-- <img src="<?php echo $result['image_name'];?> " height="50px" width="100px">  -->

<html>
    <head>
        <title>Signup</title>
</head>
<body>
<style type="text/css">
    input{
        height: 30px;
        border-radius: 5px;
        padding: 4px;
        text-align: center;
        border: solid thin #aaa;
        width:  150px;
    }
    button{
        height: 30px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width:  150px;
    }
#box{
    background-color: grey;
    margin: auto;
    width: 400px;
    height: 400px;
    padding: 20px;
}
.a{
    background-color: black;
    margin-top: 10px;
    text-align: center;
    height: 350px;
    width: 350px;
    border-radius: 50%; 
    /* for circle */
   
}
.b{ padding-top: 5px;
    padding-bottom: 30px;
    background-color: black;
    margin: auto;
    height: 560px;
    width: 550px;
   
   
}

    </style>
     <div class="b">
  <h1 style="color:white"><label><b><u><center>Delete User Profile</center></u></b></label><h1><br>
    <div id="box">
    <div class="a">
<img src="<?php echo $result['image_name'];?> " height="150px" width="150px"> 
<br><br>
<input type="text" value="<?php echo $username;?>" ><hr>
<form method="post" action="">
<input type="submit" name="del" value="Delete">
</form>
    </div>
    </div>
</div>
    <?php
  
    ?>
</body>
</html>

