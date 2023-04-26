<?php
include "connection.php";
$response=array();
if(isset($_POST["name"],$_POST["phno"],$_POST["email"])){
    $name=$_POST["name"];
    $phno=$_POST["phno"];
    $email=$_POST["email"];
    $query="insert into contacts(name,phone,email) values('$name','$phno','$email')";
    $res = mysqli_query($con,$query);
    if($res){
      $response['id']=mysqli_insert_id($con);
      $response['reqmsg']="Contact Inserted";
      $response['reqcode']="1";
    }else{
        $response['id']="NA";
        $response['reqmsg']="Error Inserting Data";
        $response['reqcode']="0";
    }
}else {
    $response['id']="NA";
    $response['reqmsg']="Incomplete Request";
    $response['reqcode']="0";
}
$x= json_encode($response);
echo $x;

?>