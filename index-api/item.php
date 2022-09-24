<?php
$con=mysqli_connect("localhost","root","","dummy");

if($con){
    echo "DB Connected";
}
echo "<br>";

$request=$_SERVER['REQUEST_METHOD'];
print($request);
?>