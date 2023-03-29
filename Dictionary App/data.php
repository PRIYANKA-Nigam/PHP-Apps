<?php
include("connection.php");
$url="simple_english_dictionary.json";
//echo $url."<br>"; will print simple_english_dictionary.json
$json_str=file_get_contents($url);
//echo $json_str."<br>";
$skey='';
$sval='';
$json_array=json_decode($json_str,true);
foreach($json_array as $key => $value){
  // echo $key;
  //echo $value;
  $skey.=$key.",";
  $sval.=$value.",";
    $a_key=array($key);
    $a_val=array($value);
   
  //  echo "<br><br>";
    // echo $value;
}
$key_array =explode(",",$skey);
$val_array=explode(",",$sval);
//print_r(json_decode($json_array));
$i=0;
foreach($key_array as $a){
    $sql="insert into dictionary(word,meaning) values('$a','$val_array[$i]')";
    mysqli_query($con,$sql);
    $i++;
}


?>