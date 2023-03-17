
<html>
    <head>
        <title>signup Page</title>
        <style>
       table{
        margin-left: 350px;
        margin-top: 50px;
       }   
       

      </style>
    </head>
    <body align="center">  
    <table border="4" style="border-width:6px;border-color:black;width:40%;height:50%;">  
    <tr bgcolor="olivered" style="text-align:center"> 
        <td>
<h2>Sign Up</h2><br>
<form action="includes/sign.inc.php" method="post">
  
    <input type="text" name="name" placeholder="full name" style="width:300px;height:40px;" ><br><br>
    <input type="text" name="email" placeholder="Email" style="width:300px;height:40px;" ><br><br>
    <input type="text" name="uid" placeholder="Username" style="width:300px;height:40px;" ><br><br>
    <input type="password" name="pwd" placeholder="Password" style="width:300px;height:40px;" ><br><br>
    <input type="password" name="pwdrepeat" placeholder="Confirm Password" style="width:300px;height:40px;" ><br><br><br>
    <input type="submit" name="signup" value="Sign Up">
    
</form>
</td> </tr>
</table>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['uid'];
    $password=$_POST['pwd'];
    $password2=$_POST['pwdrepeat'];

   
}   


?>

</body>
</html>


    