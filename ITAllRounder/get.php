<?php
include "connection.php";
$response=array();
    $query="select * from contacts order by 'phone' ASC";
    $res = mysqli_query($con,$query);
    if($res){
      $response['contacts']=array();
      while($row=mysqli_fetch_array($res)){
        $contact=array();
        $contact['id']= $row['id'];
        $contact['name']=$row['name'];
        $contact['phone']=$row['phone'];
        $contact['email']=$row['email'];
        array_push($response['contacts'],$contact);
      }
      $response['reqmsg']="Contact retrieved";
      $response['reqcode']="1";
    }else{
        $response['reqmsg']="Error retrieving Data";
        $response['reqcode']="0";
    }
$x= json_encode($response);
echo $x;

?>