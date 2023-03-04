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
            if($wo === $revWo){
                echo "Yes it is";
            }else{
                echo "No it's not";
            }
        }
        if(isset($_POST['submit2'])){
            $leap=$_POST['leap'];
            if($leap%4==0)
            {
                echo "Yes it is";
            }else{
                echo "No it's not";
            }
         }
         if(isset($_POST['submit3'])){
            $leap=$_POST['rev'];
           echo strrev($leap);
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
        for($i=0;$i<count($p);$i++){
           echo $p[$i];
        }
        //   echo "<pre>";
        //    print_r($p);
        //   echo "</pre>";
         }
         if(isset($_POST['submit5'])){
            $leap=$_POST['len'];
           echo strlen($leap);
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
           echo "Vowels : ",$v;
           echo "<br>";
           echo "\nConsonants : ",$c;
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
           echo $z;
         }
         if(isset($_POST['submit8'])){
            $leap=$_POST['case'];
           echo strtoupper($leap);
         }
         if(isset($_POST['submit9'])){
            $leap=$_POST['case'];
           echo strtolower($leap);
         }if(isset($_POST['submit10'])){
            $leap=$_POST['case'];
           echo ucwords($leap);
         }if(isset($_POST['submit11'])){
            $leap=$_POST['case'];
           echo lcfirst($leap);
         }if(isset($_POST['submit12'])){
            $leap=$_POST['case'];
           echo ucfirst($leap);
         }
         if(isset($_POST['submit13'])){
            $leap=$_POST['fact'];
            $f=1;
            for($i=1;$i<=$leap;$i++){
               $f=$f*$i;  
            }
           echo $f;
         }
         if(isset($_POST['submit14'])){
            $leap=$_POST['ch'];
            if($leap%2==0)
            echo "Even Number";
            else 
            echo "Odd Number";
            $c=0;
            for($i=1;$i<=$leap;$i++){
               if($leap==1||$leap==2)
             {  echo "Prime Number";
                  break; }
               if($leap%$i==0)
                $c++;
            }
            if($c==2)
            echo "Prime Number";
         }
         if(isset($_POST['submit15'])){
            $leap=$_POST['age'];
            $b=new DateTime($leap);
            $c=new DateTime(date('m.d.y'));
            $d=$c->diff($b);
            printf('age : %d years,%d month,%d days',$d->y,$d->m,$d->d);
         }
         if(isset($_POST['submit16'])){
            $leap=$_POST['bin'];
           echo decbin($leap);
         }
         if(isset($_POST['submit17'])){
            $leap=$_POST['table'];
            for($i=1;$i<=10;$i++){
                $p=$leap*$i;
              echo "{$leap}*{$i}=".$p."<br>";
            }
         }
         if(isset($_POST['submit18'])){
            $leap=$_POST['cnt'];
            echo "Total Characters: ".strlen($leap)."<br>";
            echo "Total lines: ".count(explode("\n",$leap))."<br>";
            echo "Total words: ".count(explode(" ",$leap))."<br>";
          
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
               echo $p[$i];echo '   ';
            }
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
</form>
        </div>
</body>
</html>