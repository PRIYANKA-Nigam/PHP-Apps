<?php
include("connection.php");
$myfile = fopen("words.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("words.txt"));
$str= fread($myfile,filesize("words.txt"));
//echo $str;
fclose($myfile);


$pair_array =explode(".",$str);
// $json = json_encode($resultJ);
$i=0; $str='';$key='';
foreach($pair_array as $p){    
$result = str_replace( array("-","– "), '":"', $p);
// $resultJ[$i] = explode(':', $result);
$resultJ[$i]=$result;
  $i++;
$keywords = preg_split('[:]', $result);
$key=$key.",".$keywords[0];
$str=$str.",".$keywords[1];
$keywords=[];  
}
$keys=explode(",",$key); //gave words as key
$values=explode(",",$str); //value as its translation
// echo $str;
$i=0;
foreach($keys as $a){
    $sql="insert into dictionary(word,meaning) values('$a','$values[$i]')";
    mysqli_query($con,$sql);
    $i++;
}
$resultJ=str_replace("\n","",$resultJ);
$resultJ=str_replace("\r","",$resultJ);
$resultJ=str_replace("\t","",$resultJ);
$resultJ=str_replace("’","",$resultJ);


$myJSON = json_encode($resultJ); //WAS not interpreting hindi code.Jence used below line
$myJSON = json_encode($resultJ,JSON_UNESCAPED_UNICODE);
$myJSON=str_replace(array("\\"), "", $myJSON);
// $myJSON=str_replace(array("[", "]"), "", $myJSON);

$myJSON=json_encode($resultJ,JSON_PRETTY_PRINT);
echo "<pre>$myJSON</pre>";

?>

