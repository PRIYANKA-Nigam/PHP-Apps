<?php
date_default_timezone_set('GMT');
include './database/db.php';
$status = false;
$msg = 'something went wrong';

if(isset($_POST['cat_id'])){
    post_record();
}
else if(isset($_POST['cat_id']) && isset($_POST['author'])){
    delete_record();
}
else{
    get_record();
}




function get_record(){
    global $con,$status,$msg;

    $sql = 'SELECT * FROM  posts';

    $result  = mysqli_query($con,$sql);
    if($result){
        $count = mysqli_num_rows($result); // get row count here
        
        while($row = mysqli_fetch_object($result)){
            $data[] = $row;
        }
    
        $status = true;
        $msg = 'data found ';
    
        $res_array = array('status'=>$status,'count'=>$count,'data'=>$data);// minor mistake i did just colon
        echo json_encode($res_array);
    }
    else{
        $res_array = array('status'=>$status,'msg'=>$msg);// minor mistake i did just colon
        echo json_encode($res_array);
    }
}



function post_record(){
    global $con,$status,$msg;

    //echo 'hello'; die();

    $cate_id = $_POST['cat_id'];
    $title = $_POST['title'];
    $body  = $_POST['body'];
    $author = $_POST['author'];
    $created_at =  date("Y-m-d,h:m:s");

    $sql = "INSERT INTO posts(category_id,title,body,author,created_at)VALUES('$cate_id','$title','$body','$author','$created_at')";

    $result  = mysqli_query($con,$sql);


    $status = true;
    $msg = 'data inserted';
    if($result){
        $res_array = array('status'=>$status,'msg'=>$msg);// minor mistake i did just colon
        echo json_encode($res_array);
    }
    else{
        echo 'error';
    }
}


// function delete_record(){
//     global $con,$status,$msg;
//     $cate_id = $_POST['cat_id'];
//     $sql= "delete from mytable where category_id='$cate_id'";
//     $result  = mysqli_query($con,$sql);
//     $status = true;
//     $msg = 'data deleted';
//     if($result){
//         $res_array = array('status'=>$status,'msg'=>$msg);// minor mistake i did just colon
//         echo json_encode($res_array);
//     }
//     else{
//         echo 'error';
//     }

// }




?>