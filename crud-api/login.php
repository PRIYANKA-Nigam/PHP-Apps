<?php

?>
<html>
    <head>
        <title>Login Page</title>
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
<h2>Login</h2><br>
<form action="new.php" method="post">
    <input type="text" name="name" placeholder="Username/Email" style="width:300px;height:40px;" ><br><br>
    <input type="password" name="pwd" placeholder="Password" style="width:300px;height:40px;" ><br><br><br>
    <input type="submit" name="Login" value="Login">
</form>
        </td></tr>
    </table>
<?php

?>
    </body>
</html>