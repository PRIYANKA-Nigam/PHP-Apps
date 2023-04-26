<!DOCTYPE html>
<html>
    <head>
    <title>Display Images</title>
    <style media="screen">
embed{
    border: 2px solid black;
}
.div1{ margin-left: 100px;
}
        </style>
    </head>
    <body>
      
      <div class="div1" >
        <?php
include("connection.php");

    $sql="select * from multipleimageupload";
$query=mysqli_query($con,$sql);
while($info=mysqli_fetch_array($query)){
    ?>
    <img src="files/<?php  echo $info['imageName']; ?>"  width="400" height="400">
    <?php

}
 
?>
      </div>
    </body>
</html>