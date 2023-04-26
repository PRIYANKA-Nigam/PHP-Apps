<?php

$con = mysqli_connect('127.0.0.1','root','','movies');
if($con){
    echo 'connected to database';
}
else{
    echo 'failed to connect';
}

?>