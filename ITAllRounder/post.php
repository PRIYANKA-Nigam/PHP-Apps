<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');
// $data=file_get_contents("php://input");
// echo $data.' success ';

$data= json_decode(file_get_contents("php://input"));
print_r($data);

echo $data->name;

include "connection.php";
// if(isset(($data->name))){ //isset checks whether the given variable passed inside is null or  not
//     echo json_encode(['status'=>'failed','msg'=>'Proper Contact details  not given !!!!!!!!!']);
//.................. not working if else with isset()
// }else{

    $query="Insert into contacts(name,phone,email)";
    $query.="Values('$data->name','$data->phone','$data->email')";
    $run=mysqli_query($con,$query);
    if($run){
        echo json_encode(['status'=>'success','msg'=>'Contact Added ........']);
    }else{
        echo json_encode(['status'=>'success','msg'=>'Contact not Added ........']);
    }



?>