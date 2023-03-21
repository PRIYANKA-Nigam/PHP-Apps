   <?php
include("connection.php");
include("function.php");
$username=$_GET['name'];
//echo $username;
$select ="select image_name from users where user_name='$username'";
$query=mysqli_query($con,$select);
$result = mysqli_fetch_assoc($query);

?>
<br>
<!-- <img src="<?php echo $result['image_name'];?> " height="50px" width="100px">  -->

<html>
    <head>
        <title>Edit</title>
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
  <h1 style="color:white"><label><b><u><center>User Profile</center></u></b></label><h1><br>
    <div id="box">
    <div class="a">
<img src="<?php echo $result['image_name'];?> " height="150px" width="150px"> 
<br><br>
<input type="text" value="<?php echo $username;?>" ><hr>
<form method="post">
<button type="submit" name="edit">Edit</button>
</form>
    </div>
    </div>
</div>
    <?php
  if(isset($_POST['edit'])){

    header("location:edit2.php?name=$username");
  }
    ?>
</body>
</html>

