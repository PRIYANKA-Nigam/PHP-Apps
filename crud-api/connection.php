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
    <body>
        <form action="connection.php" method="post">
            <table border="2">
                <tr> <td>
                        Enter Username<br>
                        <input type="text" name="username">
                 </td></tr>
                 <tr> <td>
                        Enter City<br>
                        <input type="text" name="city">
                 </td></tr>
                 <tr> <td>
                        Enter Email<br>
                        <input type="text" name="email">
                 </td></tr>
                 <tr> <td>
                        <input type="submit" name="submit1" value="Insert">
                        <input type="submit" name="submit2" value="Delete">
                        <input type="submit" name="submit3" value="Update">
                        <input type="submit" name="submit4" value="Display">
                 </td>
                </tr>
</form>
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