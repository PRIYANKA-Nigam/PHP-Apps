<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
//header('Access-Control-Allow-Methods:POST');
//initialising api
include_once('../core/initialise.php');

//instantiate post

$post =new Post($db);
$result=$post->read();
//get row count 
$num= $result->rowCount();
if($num>0){
    $post_arr =array();
    $post_arr['data'] =array();
    while($row=$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post_item =array(
            'id' =>$id,
            'title' =>$title,
            'body' =>html_entity_decode($body),
            'author'=>$author,
            'category_id'=>$category_id,
            'category_name'=>$category_name
        );
        array_push($post_arr['data'],$post_item);
    }
    //convert to json
    echo json_encode($post_arr);   //convert array to string
    //  json_decode -> convert json to array
}else {
      echo json_encode(array('message'=> 'No posts found.'));
      //or  echo json_encode(['message'=>'No posts found.'])
}


?>