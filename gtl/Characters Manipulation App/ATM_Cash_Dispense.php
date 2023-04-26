<!doctype html>
<html>
    <style>
.a{
    position: relative;
    left: 600px;
    top: -20px;
}
        </style>
    <body>
 <form method="POST">
 <h1><b><u>ATM Cash Dispenser</u></b></h1>
 <br>
 <hr>
 <br>
 <h4><I>Enter some amount in denomination of 100,500</I></h4>
 <br>
<fieldset>
            <input type="number" placeholder="enter Amount" name="arm">
</fieldset>
<fieldset>
<input type="submit" name="submit20" value="Submit">
</fieldset>
<br><hr><hr>
<br>
<!-- <fieldset>
<center><I>Thank you for your patience. We are dispensing your amount in cash.</I></center>
</fieldset> -->
<br>
<br>
<br>
<div class="a">
<input type="submit" name="submitnow" value="CLOSE">
</div>
</form>
<?php
if(isset($_POST['submit20'])){
    echo "<center><I>Thank you for your patience. We are dispensing your amount in cash.</I></center>";
    $amount = $_POST['arm'];
    $cash=$amount;
    $d=0;
    if($amount%500!=0){
        $d=$amount%500;  //in 100
        $amount=$amount/500;
        $rem=(500*$amount); //in 500
    }
    $c=$d/100;
    echo "<h3>";
    echo "<center><b><div style='background-color:red;'><p style='color:green;'>Your Wholesome amount was ",$cash."</p></div></b></center>";
    echo "<center><u><i><p style='color:green;'>
    You will receive ",intval($amount)." notes in multiple of 500 and ",$c." notes in multiple of 100</p></I></u></center>";
    echo "</h3>";    //used intval() b'coz decimal value was also coming 
}
if(isset($_POST['submitnow'])){
    echo '<script type="text/javascript">';
    echo 'alert("Thankyou for using our services")';
    echo '</script>';
}
?>
</body>
</html>