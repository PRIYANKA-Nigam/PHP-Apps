<?php
include "connection.php";
$response=array();
if(isset($_POST["id"],$_POST["name"],$_POST["phno"],$_POST["email"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $phno=$_POST["phno"];
    $email=$_POST["email"];
    $query="update contacts set name='$name',phone='$phno',email='$email' where id=".$id;
    $res=mysqli_query($con,$query);

    if($res){
      $response['id']=mysqli_insert_id($con);
      $response['reqmsg']="Contact Updated";
      $response['reqcode']="1";
    }else{
        $response['id']="NA";
        $response['reqmsg']="Error Updating Data";
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