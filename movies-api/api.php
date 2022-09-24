<?php

include 'db.php';

//http://127.0.0.1/movies-api/api.php

$sql = "SELECT * FROM users";
$result = mysqli_query($con,$sql);
if($result){
    while($row = mysqli_fetch_object($result)){
        $data[] = $row;
    }
}

//$array = array('name'=>'priyanka','age'=>22,'profession'=>'developer');
echo json_encode($data);

?>