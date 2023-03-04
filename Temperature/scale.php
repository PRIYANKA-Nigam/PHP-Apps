<html>
        <style>
.a{
        position: relative;
        left:90px;
        top:-20px;       
}
.b{
        position: relative;
        left: -51px;      
}
input[type=submit]{
       background:#33475b;
       box-shadow:5px 5px 5px #eee;
       border-radius:45px;
       border-color:#0066A3;
       text-shadow:#000000;
       color:white;
       
        
}
                </style>
    <body align="center" style="background-color:grey; border-style:solid;border-width:20px;border-color:white;padding:0.25em">
        <h1><b><u>Scale Conversion</u></b></h1>
        <br><br>
        <form method="POST" >
        <input type="text" placeholder="Enter Value" name="c1">
        <select name="operation1">
<option value="cm">Centimeter</option>
<option value="in">Inches</option>
<option value="mm">Millimeter</option>
<option value="fo">Foot</option>
<option value="ya">Yard</option>
<option value="km">Kilometer</option>
<option value="mi">Miles</option>
<option value="m">Meter</option>
</select> 
<br><br>
<h2><b>To </b></h2>
<br><br>
<div class="b">
<input type="submit" value="Convert" name="c2" style="width: 180px"  >
</div>
<div class="a">
        <select name="operation2">
<option value="cm">Centimeter</option>
<option value="in">Inches</option>
<option value="mm">Millimeter</option>
<option value="fo">Foot</option>
<option value="ya">Yard</option>
<option value="km">Kilometer</option>
<option value="mi">Miles</option>
<option value="m">Meter</option>
</select> 
</div>
</form>
<?php
if(isset($_POST['c2'])){
        $num=$_POST['c1'];
        $conv=$_POST['operation2'];
        $from=$_POST['operation1'];
        //echo "<h1><b>The value in cm is {$num} </b></h1>";
        if($from=="cm"&&$conv=="cm"){
          $result=$num;
          echo "<h1><b>The value in cm is {$result} </b></h1>";
        }if($from=="cm"&&$conv=="in"){
             $result=($num*0.3937); 
             echo "<h1><b>The value in inches is {$result} </b></h1>";  
        }if($from=="cm"&&$conv=="mm"){
             $result= ($num*10);
        }if($from=="cm"&&$conv=="fo"){
                $result= ($num*0.3937)/12;
        }if($from=="cm"&&$conv=="ya"){
                $result= ($num*91.44);
        }if($from=="cm"&&$conv=="km"){
                $result= ($num/100000);
        }if($from=="cm"&&$conv=="mi"){
                $result= ($num/160900);
        }if($from=="cm"&&$conv=="m"){
                $result= ($num/100);
        }
        if($from=="in"&&$conv=="cm"){
                $result=($num*2.54);
        }if($from=="in"&&$conv=="in"){
                $result=$num;
        }if($from=="in"&&$conv=="mm"){
                $result=($num/0.03937);  
        }if($from=="in"&&$conv=="fo"){
                $result=($num/12);
        }if($from=="in"&&$conv=="ya"){
                $result=($num/36);
        }if($from=="in"&&$conv=="km"){
                $result=($num*2.54/100000);
        }if($from=="in"&&$conv=="mi"){
                $result=($num*1.578/100000);
        }if($from=="in"&&$conv=="m"){
                $result=($num*0.0254);
        }
        if($from=="mm"&&$conv=="cm"){
                $result=($num/10);
        }if($from=="mm"&&$conv=="in"){
                $result=($num*0.03937);
        }if($from=="mm"&&$conv=="mm"){
                $result=$num;
        }if($from=="mm"&&$conv=="fo"){
                $result=($num*0.03937)/12;
        }if($from=="mm"&&$conv=="ya"){
                $result=($num/914.4);
        }if($from=="mm"&&$conv=="km"){
                $result=($num/1000000);
        }if($from=="mm"&&$conv=="mi"){
                $result=($num*6.214/10000000);
        }if($from=="mm"&&$conv=="m"){
                $result=($num*0.001);
        }
        if($from=="fo"&&$conv=="cm"){
                $result=($num*30.48);
        }if($from=="fo"&&$conv=="in"){
                $result=($num*12);
        }if($from=="fo"&&$conv=="mm"){
                $result=($num*30.48*10);
        }if($from=="fo"&&$conv=="fo"){
                $result=$num;
        }if($from=="fo"&&$conv=="ya"){
                $result=($num/3);
        }if($from=="fo"&&$conv=="km"){
                $result=($num*0.000305);
        }if($from=="fo"&&$conv=="mi"){
                $result=($num*0.000189);
        }if($from=="fo"&&$conv=="m"){
                $result=($num*0.305);
        }
        if($from=="ya"&&$conv=="cm"){
                $result=($num*91.44);
        }if($from=="ya"&&$conv=="in"){
                $result=($num*36);
        }if($from=="ya"&&$conv=="mm"){
                $result=($num*914.4);
        }if($from=="ya"&&$conv=="fo"){
                $result=($num*3);
        }if($from=="ya"&&$conv=="ya"){
                $result=$num;
        }if($from=="ya"&&$conv=="km"){
                $result=($num*0.000914);
        }if($from=="ya"&&$conv=="mi"){
                $result=($num*0.000568);
        }if($from=="ya"&&$conv=="m"){
                $result=($num*0.914);
        }
        if($from=="km"&&$conv=="cm"){
                $result=($num*100000);
        }if($from=="km"&&$conv=="in"){
                $result=($num*39370.079);
        }if($from=="km"&&$conv=="mm"){
                $result=($num*1000000);
        }if($from=="km"&&$conv=="fo"){
                $result=($num*3281);
        }if($from=="km"&&$conv=="ya"){
                $result=($num*1093.613);
        }if($from=="km"&&$conv=="km"){
                $result=$num;
        }if($from=="km"&&$conv=="mi"){
                $result=($num/1.609);
        }if($from=="km"&&$conv=="m"){
                $result=($num*1000);
        }
        if($from=="mi"&&$conv=="cm"){
                $result=($num*160900);
        }if($from=="mi"&&$conv=="in"){
                $result=($num*63360);
        }if($from=="mi"&&$conv=="mm"){
                $result=($num*1609344);
        }if($from=="mi"&&$conv=="fo"){
                $result=($num*5280);
        }if($from=="mi"&&$conv=="ya"){
                $result=($num*1760);
        }if($from=="mi"&&$conv=="km"){
                $result=($num*1.609);
        }if($from=="mi"&&$conv=="mi"){
                $result=$num;
        }if($from=="mi"&&$conv=="m"){
                $result=($num*1609.344);
        }
        if($from=="m"&&$conv=="cm"){
                $result=($num*100);
        }if($from=="m"&&$conv=="in"){
                $result=($num*39.37);
        }if($from=="m"&&$conv=="mm"){
                $result=($num*1000);
        }if($from=="m"&&$conv=="fo"){
                $result=($num*3.281);
        }if($from=="m"&&$conv=="ya"){
                $result=($num*1.094);
        }if($from=="m"&&$conv=="km"){
                $result=($num/1000);
        }if($from=="m"&&$conv=="mi"){
                $result=($num/1609);
        }if($from=="m"&&$conv=="m"){
                $result=$num;
        }
}
?>
</body>
</html>