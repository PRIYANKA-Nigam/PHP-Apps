<?php
include "connection.php";
$response=array();
if(isset($_POST["name"])){
    $id=$_POST["id"];
    $query="delete from contacts where id=".$id;
    $res = mysqli_query($con,$query);
    if($res){
      $response['id']=mysqli_insert_id($con);
      $response['reqmsg']="Contact Deleted";
      $response['reqcode']="1";
    }else{
        $response['id']="NA";
        $response['reqmsg']="Error Deleting Data";
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