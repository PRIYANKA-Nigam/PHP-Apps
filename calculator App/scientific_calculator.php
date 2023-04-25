<?php
$conn = mysqli_connect("localhost","root","","calculator");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<?php
if(isset($_POST['sub']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$oprtr=$_POST['sub'];
	if($oprtr=="+")
		$ans=$num1+$num2;
	else if($oprtr=="-")
		$ans=$num1-$num2;
	else if($oprtr=="x")
		$ans=$num1*$num2;
	else if($oprtr=="/")
		$ans=$num1/$num2;
		else if($oprtr=="%")
		$ans=$num1%$num2;
	else if($oprtr=="cos")
		$ans=cos($num1);
	else if($oprtr=="sin")
		$ans=sin($num1);
	else if($oprtr=="tan")
		$ans=tan($num1);
	else if($oprtr=="e")
		$ans=exp($num1);
	else if($oprtr=="log")
		$ans=log($num1);
	else if($oprtr=="pi")
		$ans=pi($num1);
	else if($oprtr=="pow")
		$ans=pow($num1,$num2);
	else if($oprtr=="sqrt")
		$ans=sqrt($num1);
		else if($oprtr=="cqrt")
		$ans=pow($num1,1/3);
		else if($oprtr=="!"){
			$factorial = 1;  
for ($x=$num1; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
} 
$ans=$factorial;
		}
		else if($oprtr=="rad")
		$ans=rad2deg($num1);
		else if($oprtr=="deg")
		$ans=deg2rad($num1);
	else if($oprtr=="max")
		$ans=max($num1,$num2);
	else if($oprtr=="min")
		$ans=min($num1,$num2);
		else if($oprtr=="CC")
		$ans=" ";
}
		$sql = "INSERT INTO `scientific` (`id`, `number1`, `number2`, `operator`, `result`) VALUES (NULL, '$num1', '$num2', '$oprtr', '$ans') ";
	if ($conn->query($sql) === TRUE){
    echo "Answers and Values are Saved.";
    } 
    else {
    echo "Error whilst saving Answers and Values: " . $sql . "<br>" . $conn->error;
    }

?>
<?php
if(isset($_POST['answer']))
{
$sql = "SELECT * FROM scientific";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0){
		echo "<br><center><b>All Answers:<b></center><br>";
        echo "<center><table style='border: 2px dashed grey;'>";
            echo "<tr>";
                echo "<th>First Number:</th>";
                echo "<th>Second Number:</th>";
                echo "<th>Operator</th>";
                echo "<th>Result</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['number1'] . "</td>";
                echo "<td>" . $row['number2'] . "</td>";
                echo "<td>" . $row['operator'] . "</td>";
                echo "<td>" . $row['result'] . "</td>";
            echo "</tr>";
        }
        echo "</table></center>";
        mysqli_free_result($result);
    } else{
        echo "Don't have any saved data in the database.";
    }
}
?>
<html>
	<body>
<form method="post" action="">
<h1>Scientific Calculator</h1><br>
<p>*Please Enter Numbers in the First Field Only For Math Functions.</p>
1st Number: <input name="num1" value=""><br>
2nd Number: <input name="num2" value=""><br>
<tr>
<td><input type="submit" name="sub" value="+"></td>
<td><input type="submit" name="sub" value="-"></td>
<td><input type="submit" name="sub" value="x"></td>
<td><input type="submit" name="sub" value="/"></td>
</tr><br>
<tr>
<td><input type="submit" name="sub" value="%"></td>
<td><input type="submit" name="sub" value="!"></td>
<td><input type="submit" name="sub" value="="></td>
<td><input type="submit" name="sub" value="e"></td>

</tr><br>
<tr>
<td><input type="submit" name="sub" value="pi"></td>
<td><input type="submit" name="sub" value="log"></td>
<td><input type="submit" name="sub" value="pow"></td>
</tr><br>
<tr>
<td><input type="submit" name="sub" value="cc"></td>
<td><input type="submit" name="sub" value="sqrt"></td>
<td><input type="submit" name="sub" value="cqrt"></td>

</tr><br>
<tr>
<td><input type="submit" name="sub" value="sin"></td>
<td><input type="submit" name="sub" value="cos"></td>
<td><input type="submit" name="sub" value="tan"></td>
</tr><br>
<tr>

<td><input type="submit" name="sub" value="rad"></td>
<td><input type="submit" name="sub" value="deg"></td>
</tr><br>
<tr>
<td><input type="submit" name="sub" value="max"></td>
<td><input type="submit" name="sub" value="min"></td>

</tr>

<br>Answer: <input type='text' value="<?php echo $ans; ?>"><br>
</form><div class="button">
<form method="post">
	<input class="get" type="submit" name="answer" value="Retrieve Data">
</form> </body></html>



