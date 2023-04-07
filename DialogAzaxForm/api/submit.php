<?php
$servername="localhost";
$username="root";
$password="";
$dbname="phprest";
$link=mysqli_connect($servername,$username,$password,$dbname);
$conn=mysqli_select_db($link,$dbname);
$con = new mysqli($servername,$username,$password,$dbname)
if($conn){
    echo "Connection successful";
}else {
    die("Connection failed because ". mysqli_connect_error());
}
if(isset($_POST['name']) && $_POST['name']!='' && isset($_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $num =$_POST['num'];
    $profile = $_POST['pro'];
}
$sql="insert into post2(name,title,body,author) values('$name','$email','$num','$profile')";

if($con->query($sql) === true){
    $response['success']=true;
}
echo json_encode($response);

?>