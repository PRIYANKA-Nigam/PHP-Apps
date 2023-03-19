<!DOCTYPE html>
<html>
    <head>
        <title>Display Users</title>
        <style>
        input{
            margin: auto;
            display: block;
            width: 50px;
            height: 50px;
        }
        table{
            margin: auto;
           
        }
            </style>
    </head>
    <body>
        <h1><u><center>Registered Users</center></u></h1><br>
        <table border="2">
            <thead style="background-color:black;color:white">
            <tr>
                <th>S.No. </th>
                <th>User Id</th>
                <th>UserName</th>
                <th>Password</th>
                <th>Registration Date </th>
                <th>User Image</th>
            </tr>  </thead>
            <tbody>
                <?php
              include 'connection.php';
              $select ="select * from users";
              $query=mysqli_query($con,$select);
              $result=mysqli_fetch_array($query);
            
              while($result=mysqli_fetch_array($query)){   
                ?>
                <tr>
               
                    <td style="background-color:black;color:white"><?php echo $result['id'];?></td>
                    <td><?php echo $result['user_id'];?></td>
                    <td><?php echo "<b>";echo $result['user_name'];echo "</b>";?></td>
                    <td><?php echo $result['password'];?></td>
                    <td><?php echo $result['date'];?></td>
                    <td><img src="<?php echo $result['image_name'];?>" height="50px"> </td>
                      <td style="background-color:green;color:black;width:80px;text-align:center">
                      <a href="edit.php?name=<?=$result['user_name']; ?>">Edit</a></td> 
                      <td style="background-color:red;color:black;width:80px;text-align:center">
                      <a href="delete.php?name=<?=$result['user_name']; ?>">Delete</a></td>
                </tr>
                <?php 
              }
               ?>
            </tbody>
        </table>
        <br>
        <form method="post" action="signup.php">
        <input type="submit" name="back" value="Back" style="background-color:black;color:white;">
        </form>
        <?php 
         if(isset($_POST['back'])){
            header("location:signup.php");
         }
        ?>
    </body>
</html>