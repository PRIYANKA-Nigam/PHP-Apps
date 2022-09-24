<?php
include 'item.php';
echo "<br>";
$response=array();
if($con){
    $sql="select * from item";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Content-type: JSON");  //to display the data in json
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['name']=$row['name'];
            $response[$i]['dob']=$row['dob'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "DB Connection Failed";
}
$a=10;
echo $a;

echo "First Php Project";

?>