<!Doctype html>
<html>
    <head>
        <title>calc</title></head>
        <body style="background-color:grey;>
<div class="screen-body-item">
<div class="app-form">
<form method="POST" >
<div class="app-form-group">
<input type="text" class="app-form-control" placeholder="Enter Number" name="num1">
</div></br></br>
<div class="app-form-group">
<input type="text" class="app-form-control" placeholder="Enter Number" name="num2">
</div> </br></br>
<div class="select-style">
<select name="operation">
<option value="add">ADD</option>
<option value="sub">SUBTRACT</option>
<option value="mult">MULTIPLY</option>
<option value="div">DIVIDE</option>
</select> 
</div> </br></br>
<div>
<input type="submit" name="submit" value="submit" class="app-form-button">
</div> </br></br>
</form>
</br>
<div class="app-form-group showdata">
<p> <h1><b><u>The Output is : </h1></b></u>
</br></br>
       <?php  
if(isset($_POST['submit'])){
    $num1=$_POST['num1']; 
    $num2=$_POST['num2']; 
    $operation=$_POST['operation'];
    switch($operation){
        case "add": $sum=$num1+$num2;
        echo "<h3><i>The addition of 2 number {$num1} and {$num2} is  {$sum}</h3></i>";  break;
        case "sub": $sub=$num1-$num2;
        echo "<h3><i>The subtraction of 2 number {$num1} and {$num2} is  {$sub}</h3></i>";  break;
        case "mult": $mul=$num1*$num2;
        echo "<h3><i>The Multiplication of 2 number {$num1} and {$num2} is  {$mul}</h3></i>";  break;
        case "div": $div=$num1/$num2;
        echo "<h3><i>The Division of 2 number  {$num1} and {$num2} is {$div}</h3></i>";  break;
        default :
        echo "Not Operation justified "; break;
    }
}

?>
</p></div>
</div></div>
</body>
</html>