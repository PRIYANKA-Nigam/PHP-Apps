<!Doctype html>
<html>
    <head>
        <title>convertor App</title> </head>
        <body style="background-color:powderblue;">
            <br>
            <div>
<h1 style="background-color:tomato;"><center><b>Convertor App</b></center></h1>
</div>
<form method="POST">
    <ul>
<li>Temperature Conversion - <input type="submit" value="click" name="tem" /></li><hr size="8" width="100%" color="tomato"><br>
<li>Scale Conversion - <input type="submit" value="click" name="scale"/></li><hr size="8" width="100%" color="tomato"><br>
<li>Weight Conversion - <input type="submit" value="click" name="weight"/></li><hr size="8" width="100%" color="tomato"><br>
<li>Currency Conversion - <input type="submit" value="click" name="currency"/></li><hr size="8" width="100%" color="tomato"><br>
<li>Fluid Conversion - <input type="submit" value="click" name="fluid"/></li><hr size="8" width="100%" color="tomato"><br>
</ul>
</form>
<?php
if(isset($_POST['tem'])){
//header("Location:/Conversion App/temperature.php",true,301);//301 moved permanently
header("Location:/Conversion App/temperature.php");
exit();
//   session_start(); //to access a session this method is used
// include("temperature.php"); //using these 2 lines will also show data of temperature.php in this file.
 
}
else if(isset($_POST['scale'])){
    header("Location:/Conversion App/scale.php");
    exit();  
}
else if(isset($_POST['weight'])){
    header("Location:/Conversion App/weight.php");
    exit();  
}
else if(isset($_POST['currency'])){
    header("Location:/Conversion App/currency.php");
    exit();  
}
else if(isset($_POST['fluid'])){
    header("Location:/Conversion App/fluid.php");
    exit();  
}
?>
</body>
</html>