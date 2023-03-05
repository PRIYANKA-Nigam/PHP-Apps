<!doctype html>
<html>
    <head>
        <title></title>
     </head>
    <body>
<div class="container" style="width: 1150px;height: 550px;line-height:3em;overflow:scroll;border:thin #000 solid;
padding:5px;">
    <form id="contact" action=""  method="post">
        <h3>Check Pallindrome</h3>
        <h4>
        <?php
         if(isset($_POST['submit'])){
            $wo = $_POST['pallin'];
            $revWo = strrev($wo);
            if($wo === $revWo){  //<div> is taken bcoz taking background-color:red; inside <p> was not applying
                echo "<div style='background-color:red;'><p style='color:green;'>Yes it is</p></div>";
            }else{
                echo "<div style='background-color:red;'><p style='color:green;'>No it's not</p></div>";
            }
        }
        if(isset($_POST['submit2'])){
            $leap=$_POST['leap'];
            if($leap%4==0)
            {
                echo "<div style='background-color:red;'><p style='color:green;'>Yes it is</p></div>";
            }else{
               echo "<div style='background-color:red;'><p style='color:green;'>No it's not</p></div>";
            }
         }
         if(isset($_POST['submit3'])){
            $leap=$_POST['rev'];
           echo "<div style='background-color:red;'><p style='color:green;'>".strrev($leap)."</p></div>";
         }
         if(isset($_POST['submit4'])){
            $leap=$_POST['sort'];
        $p=[];   
        for($i=0;$i<strlen($leap);$i++){
            if($leap[$i]!=" ")  {
                $p[]=$leap[$i];
            }
        }  
        sort($p);
      //  $str=var_export($p,true);
      //   for($i=0;$i<count($p);$i++){ //were printing as array ( 0 => 'd', 1 => 'g', 2 => 'r', 3 => 's', 4 => 't', 5 => 'w', )
         //  echo "<div style='background-color:red;'><p style='color:green;'>".str_replace("PHP_EOL",' ',$str)."</p></div>";
      //   }
       echo "<div style='background-color:red;'><p style='color:green;'>".implode(" ",$p)."</p></div>";
        //   echo "<pre>";
        //    print_r($p);
        //   echo "</pre>";
         }
         if(isset($_POST['submit5'])){
            $leap=$_POST['len'];
           echo "<div style='background-color:red;'><p style='color:green;'>".strlen($leap)."</p></div>";
         }
         if(isset($_POST['submit6'])){
            $leap=$_POST['type'];
            $v=0;$c=0;
            $s=strtolower($leap);
            for($i=0;$i<strlen($s);$i++){
                if($s[$i]=='a'||$s[$i]=='e'||$s[$i]=='i'||$s[$i]=='o'||$s[$i]=='u'){
                    $v++;
                }
                else if($s[$i]>='a' && $s[$i]<='z'){
                    $c++;
                }
            }
           echo "<div style='background-color:red;'><p style='color:green;'> Vowels : ",$v."</p></div>";
           echo "\n<div style='background-color:red;'><p style='color:green;'> Consonants : ",$c."</p></div>";
         }
         if(isset($_POST['submit7'])){
            $leap=$_POST['con'];
            $p=[];   
            for($i=0;$i<strlen($leap);$i++){
                if($leap[$i]!=" ")  {
                    $p[]=$leap[$i];
                }
            } 
            $z="";
            for($i=0;$i<count($p);$i++){
             switch($p[$i]){
                case 1:
                   $z.= "one ";break;
                    case 2:
                       $z.= "two ";break;
                    case 3:
                        $z.="three "; break;
                   case 4:
                    $z.="four "  ; break;
                    case 5:
                       $z.="five "   ;break;
                  case 6:
                    $z.="six ";break;
                    case 7:
                      $z.="seven "  ;break;
                   case 8:
                    $z.="eight "   ;break;
                    case 9:
                        $z.="nine ";break;
                   case 0:
                            $z.="zero ";break;
             
                   }
         }
           echo "<div style='background-color:red;'><p style='color:green;'>".$z."</p></div>";
         }
         if(isset($_POST['submit8'])){
            $leap=$_POST['case'];
           echo "<div style='background-color:red;'><p style='color:green;'>".strtoupper($leap)."</p></div>";
         }
         if(isset($_POST['submit9'])){
            $leap=$_POST['case'];
           echo "<div style='background-color:red;'><p style='color:green;'>".strtolower($leap)."</p></div>";
         }if(isset($_POST['submit10'])){
            $leap=$_POST['case'];
           echo "<div style='background-color:red;'><p style='color:green;'>".ucwords($leap)."</p></div>";
         }if(isset($_POST['submit11'])){
            $leap=$_POST['case'];
           echo "<div style='background-color:red;'><p style='color:green;'>".lcfirst($leap)."</p></div>";
         }if(isset($_POST['submit12'])){
            $leap=$_POST['case'];
           echo "<div style='background-color:red;'><p style='color:green;'>".ucfirst($leap)."</p></div>";
         }
         if(isset($_POST['submit13'])){
            $leap=$_POST['fact'];
            $f=1;
            for($i=1;$i<=$leap;$i++){
               $f=$f*$i;  
            }
           echo "<div style='background-color:red;'><p style='color:green;'>".$f."</p></div>";
         }
         if(isset($_POST['submit14'])){
            $leap=$_POST['ch'];
            if($leap%2==0)
            echo "<div style='background-color:red;'><p style='color:green;'>Even Number</p></div>";
            else 
            echo "<div style='background-color:red;'><p style='color:green;'>Odd Number</p></div>";
            $c=0;
            for($i=1;$i<=$leap;$i++){
               if($leap==1||$leap==2)
             {  echo "<div style='background-color:red;'><p style='color:green;'>Prime Number</p></div>";
                  break; }
               if($leap%$i==0)
                $c++;
            }
            if($c==2)
            echo "<div style='background-color:red;'><p style='color:green;'>Prime Number</p></div>";
         }
         if(isset($_POST['submit15'])){
            $leap=$_POST['age'];
            $b=new DateTime($leap);
            $c=new DateTime(date('m.d.y'));
            $d=$c->diff($b);
            printf("<div style='background-color:red;'><p style='color:green;'>age : %d years,%d month,%d days</p></div>",$d->y,$d->m,$d->d);
         }
         if(isset($_POST['submit16'])){
            $leap=$_POST['bin'];
           echo "<div style='background-color:red;'><p style='color:green;'>".decbin($leap)."</p></div>";
         }
         if(isset($_POST['submit17'])){
            $leap=$_POST['table'];
            for($i=1;$i<=10;$i++){
                $p=$leap*$i;
              echo "<div style='background-color:red;'><p style='color:green;'>{$leap}*{$i}=".$p."</p></div>";
            }
         }
         if(isset($_POST['submit18'])){
            $leap=$_POST['cnt'];
            echo "<div style='background-color:red;'><p style='color:green;'>Total Characters: ".strlen($leap)."</p></div>";
            echo "<div style='background-color:red;'><p style='color:green;'>Total lines: ".count(explode("\n",$leap))."</p></div>";
            echo "<div style='background-color:red;'><p style='color:green;'>Total words: ".count(explode(" ",$leap))."</p></div>";
          
         }
         if(isset($_POST['submit19'])){
            $n1=$_POST['prime'];
            $n2=$_POST['prime2'];
           $p=[];
            for($i=$n1;$i<=$n2;$i++){ 
                 $c=0;
                for($j=1;$j<=$i;$j++){
                    if($i%$j==0)
                    $c++;
                }
                if($c==2)
                  $p[]=$i;   
            }
            for($i=0;$i<count($p);$i++){
               echo "<div style='background-color:red;'><p style='color:green;'>".$p[$i]."</p></div>";echo '   ';
            }
         }
         if(isset($_POST['submit20'])){
            $leap=$_POST['arm'];
            $l=$leap;$sum=0;
            while($leap!=0){
               $d=$leap%10;
               $sum+=pow($d,3);
               $leap=$leap/10;
            }
            if($l==$sum)
            echo "<div style='background-color:red;'><p style='color:green;'>Yes it is</p></div>";
            else 
            echo "<div style='background-color:red;'><p style='color:green;'>No it's not</p></div>";
          
         }

?>
</h4>
        <fieldset>
            <!-- <textarea placeholder="Type data here ......" name="pallin"> </textarea> -->
            <input type="text" name="pallin">
</fieldset>
<fieldset>
<input type="submit" name="submit" value="Submit">
</fieldset>
<br><hr>
<h3>Check Leap Year</h3>
<fieldset>
            <input type="number" name="leap">
</fieldset>
<fieldset>
<input type="submit" name="submit2" value="Submit">
</fieldset>
<br><hr>
<h3>Reverse Character</h3>
<fieldset>
            <input type="text" name="rev">
</fieldset>
<fieldset>
<input type="submit" name="submit3" value="Submit">
</fieldset>
<br><hr>
<h3>Sort Character</h3>
<fieldset>
            <input type="text" name="sort">
</fieldset>
<fieldset>
<input type="submit" name="submit4" value="Submit">
</fieldset>
<br><hr>
<h3>Character Length</h3>
<fieldset>
            <input type="text" name="len">
</fieldset>
<fieldset>
<input type="submit" name="submit5" value="Submit">
</fieldset>
<br><hr>
<h3>Character count and Type</h3>
<fieldset>
            <input type="text" name="type">
</fieldset>
<fieldset>
<input type="submit" name="submit6" value="Submit">
</fieldset>
<br><hr>
<h3>Convert Number in Character</h3>
<fieldset>
            <input type="number" name="con">
</fieldset>
<fieldset>
<input type="submit" name="submit7" value="Submit">
</fieldset>
<br><hr>
<h3>Change Case of Character</h3>
<fieldset>
            <input type="text" name="case">
</fieldset>
<fieldset>
<input type="submit" name="submit8" value="Uppercase">
<input type="submit" name="submit9" value="Lowercase">
<input type="submit" name="submit10" value="Camelcase">
<input type="submit" name="submit11" value="1st Letter Lowercase">
<input type="submit" name="submit12" value="1st Letter Uppercase">
</fieldset>
<h3>Find Factorial</h3>
<fieldset>
            <input type="number" name="fact">
</fieldset>
<fieldset>
<input type="submit" name="submit13" value="Submit">
</fieldset>
<br><hr>
<h3>Check Number is Even/Odd/Prime</h3>
<fieldset>
            <input type="number" name="ch">
</fieldset>
<fieldset>
<input type="submit" name="submit14" value="Submit">
</fieldset>
<br><hr>
<h3>Calculate Age</h3>
<fieldset>
            <input type="date" name="age" placeholder="Enter date of birth">
</fieldset>
<fieldset>
<input type="submit" name="submit15" value="Submit">
</fieldset>
<br><hr>
<h3>Convert to Binary</h3>
<fieldset>
            <input type="number" name="bin">
</fieldset>
<fieldset>
<input type="submit" name="submit16" value="Submit">
</fieldset>
<br><hr>
<h3>Print Table</h3>
<fieldset>
            <input type="number" name="table">
</fieldset>
<fieldset>
<input type="submit" name="submit17" value="Submit">
</fieldset>
<br><hr>
<h3>Print words,characters,line count</h3>
<fieldset>
           <textarea rows="6" cols="60" name="cnt" value="Enter Text">
        </textarea>
</fieldset>
<fieldset>
<input type="submit" name="submit18" value="Submit">
</fieldset>
<br><hr>
<h3>Prime between intervals</h3>
<fieldset>
            <input type="number" placeholder="enter 1st" name="prime">
            <input type="number" placeholder="enter last" name="prime2">
</fieldset>
<fieldset>
<input type="submit" name="submit19" value="Submit">
</fieldset>
<br><hr>
<h3>Check Armstrong Number</h3>
<fieldset>
            <input type="number" placeholder="enter Number" name="arm">
</fieldset>
<fieldset>
<input type="submit" name="submit20" value="Submit">
</fieldset>
<br><hr>
</form>
        </div>
</body>
</html>