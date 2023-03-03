<!doctype html>
<html>
    <head>
        <title>temp</title>
    <style>
     *{margin:0; padding:0; box-sizing:border-box; }
     h1{text-align:center; line-height: 20vh; }
     .main-div{
        width: 100%;
        height:20vh;
        display:flex;
        justify-content:space-around;
        align-items:center;
     }
     form {
  text-align: center;
}
        </style>
    </head>
        <body style="background-color:grey; border-style:solid;border-width:20px;border-color:white;padding:0.25em" >
          <header>
            <h1><b><u>Temperature Conversion</u></b></h1>
            <div class="main-div">
                <div class="left-side">
                    <img src="https://media.istockphoto.com/vectors/thermometer-illustration-vector-in-flat-design-vector-id1184482788?k=20&m=1184482788&s=612x612&w=0&h=S8JQNqWUZ9S1XxAWXcO-qKZkQcpt98unTZ-KZCY7Umw=" height="200" width="200" alt="Image resize">
</div>
</div>
</header>

<br><br><br>
<div class="right-side">
<form method="POST">
 <input type="text" name="num" placeholder="enter Temperature value">
</br>
    <div class="selection">
</br><br><br>
        <label>Celcius</label>
        <input type="radio" name="units" value="cel">
        <label>Fahrenheit</label>
        <input type="radio" name="units" value="fah">
</div>
</br>
<input type="submit" name="submit" value="Convert Now" class="btn">
</form>
<p>
    <?php
if(isset($_POST['submit'])){
    $num=$_POST['num'];
    $temp=$_POST['units'];
    if($temp=="cel"){
        $result= $num*9/5+32;
        echo "<center><h1><b><i><u>The conversion value in fahrenheit is " .$result."F</center></h1></b></i></u>";
    }
    else{
        $result= ($num-32)*5/9;
        echo "<center><h1><b><i><u>The conversion value in celcius is " .$result."C</center></h1></b></i></u>";
    }
}
    ?>
</body>
</html> 