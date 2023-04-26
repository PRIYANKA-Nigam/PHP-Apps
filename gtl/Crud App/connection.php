<?php
$servername="localhost";
$username="root";
$password="";
$dbname="crud";
$link=mysqli_connect($servername,$username,$password,$dbname);
$conn=mysqli_select_db($link,$dbname);
if($conn){
    echo "Connection successful";
}else {
    die("Connection failed because ". mysqli_connect_error());
}
?>
<html>
    <head>
  <style>
     h1{
        background:olive;
        color: black;
        text-shadow: 4px 4px  5px yellowgreen;
     }
    </style>
</head>
    <body align=center>
        <center>
            <br><br><hr>
            <h1><b><u>User Info</u></b></h1>
          <br><br> 
        <form action="connection.php" method="post">
            <table border="2" style="border-width:3px;border-color:black;width:40%;height:50%">
            <tr bgcolor="olivered"> 
                    <td></td>
                 </tr>
                <tr> <td>
                        Enter Username<br>
                        <input type="text" name="username" size="50">
                 </td></tr>
                 <tr bgcolor="olivered"> 
                    <td></td>
                 </tr>
                 <tr> <td>
                        Enter City<br>
                        <input type="text" name="city" size="50">
                 </td></tr>
                 <tr bgcolor="olivered"> 
                    <td></td>
                 </tr>
                 <tr> <td>
                        Enter Email<br>
                        <input type="text" name="email" size="50">
                 </td></tr>
                 <tr bgcolor="olivered"> 
                    <td></td>
                 </tr>
              <tr bgcolor="olivered">   
                 <td>
                        <input type="submit" name="submit1" value="Insert" style="width:95px;height:30px;" >
                        <input type="submit" name="submit2" value="Delete" style="width:95px;height:30px;">
                        <input type="submit" name="submit3" value="Update" style="width:95px;height:30px;">
                        <input type="submit" name="submit4" value="Display" style="width:95px;height:30px;">
                 </td>
                </tr>
                <tr bgcolor="olivered"> 
                    <td></td>
                 </tr>
</form> </center>
</body>
</html>
<?php
if(isset($_POST["submit1"])){
    $username=$_POST["username"];
    $city=$_POST["city"];
    $email=$_POST["email"];
    $query ="insert into mytable(username,city,email) values('$username','$city','$email')";
    mysqli_query($link,$query);
    echo "Data inserted";
}
if(isset($_POST["submit2"])){
    $username=$_POST["username"];
    $city=$_POST["city"];
    $email=$_POST["email"];
    $query ="delete from mytable where username='$username'";
    mysqli_query($link,$query);
    echo "Data Deleted ....";
}
if(isset($_POST["submit3"])){
    $username=$_POST["username"];
    $city=$_POST["city"];
    $email=$_POST["email"];
    $query ="update mytable set username='$username',city='$city',email='$email' where username='$username'";
    mysqli_query($link,$query);
    echo "Data Updated ....";
}
if(isset($_POST["submit4"])){
    $res=mysqli_query($link,"select * from mytable");
    echo ("<table border=2>");
    echo ("<tr>");
    echo ("<th>"); echo "name";echo ("</th>");
    echo ("<th>"); echo "city";echo ("</th>");
    echo ("<th>"); echo "email";echo ("</th>");
    echo ("</tr>");
while($row=mysqli_fetch_array($res)){
    echo ("<tr>");
    echo ("<td>"); echo $row['username'];echo ("</td>");
    echo ("<td>"); echo $row['city'];echo ("</td>");
    echo ("<td>"); echo $row['email'];echo ("</td>");
    echo ("</tr>");
}
echo ("</table>");
}
?>