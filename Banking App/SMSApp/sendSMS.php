<?php
include("../connection.php");
$num='';$bank='';$name='';$date='';$code='';
$sql="select * from admin";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
$num=$num.",".$row['Mob'];
$bank=$bank.",".$row['Bank'];
$code=$code.",".$row['code'];
$name=$name.",".$row['name'];
$date=$date.",".$row['Date'];
}
echo "$num<br>$bank<br>$code<br>$name<br>$date";echo "<br>";
$num_array =explode(",",$num);
$bank_array=explode(",",$bank);
$code_array=explode(",",$code);
$name_array=explode(",",$name);
$date_array=explode(",",$date);
// $num="918932946515";
$i=0;
foreach($num_array as $num){
$message="Hello $name_array[$i],your bank account is created.Your preferred bank is $bank_array[$i] . This is your login id :
$code_array[$i].<br>";
$i++;
echo $message;
// Account details
$apiKey = urlencode('NTk1YTcyNDg2NzU3NTQ2Mzc1Njg3NTdhNWE3NDUzNTQ=');
// Message details
$numbers = array($num);
$sender = urlencode('TXTLCL');
$message = rawurlencode($message);
 
$numbers = implode(',', $numbers);
 
// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;
}

?>