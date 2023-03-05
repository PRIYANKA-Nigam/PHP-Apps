<!doctype html>
<html>

<body>
 <form method="POST">
 <h1><b><u>Monthlies Tracker App</u></b></h1>
 <br>
 <hr>
 <br>
 <br>
 <h4><I>Enter Start Date</I></h4>
<fieldset>
    <input type="date" placeholder="Enter month Beginning date " name="arm">
</fieldset>
<fieldset>
<input type="submit" name="submit20" value="CHECK">
</fieldset>
<br><hr><hr>
</form>
<?php
if(isset($_POST['submit20'])){
    $date=$_POST['arm'];
    $dd=strtotime($date);
    if($date){
       
        $da= date('d',$dd);
        $m= date('m',$dd);
        $y= date('y',$dd);
        echo "Your last date was {$da}/{$m}/{$y}";
        echo "<br>";
    }else {
        echo 'invalid';
    }
    $dl=$da;
    switch($m){
        case 1: 
            $du=28+$dl;
            $dl=31-$du;
            if($dl>=0)
             { $dp=31-$dl;
                   echo "your successive date will be {$dp}/01/{$y}<br>";}
                else
               { 
                $dl=abs($dl);
                 echo "your successive date will be {$dl}/02/{$y}<br>";}
           
            case 2:
                $du=28+$dl;
                if($y%4==0)
                $dl=29-$du;
                else
                $dl=28-$du;
                if($dl>=0)
            { if($y%4==0)
                $dp=29-$dl;
                else
                $dp=28-$dl;  
                    echo "your successive date will be {$dp}/02/{$y}<br>";}
                else  { 
                    $dl=abs($dl);
                echo "your successive date will be {$dl}/03/{$y}<br>";}
              case 3:
                $du=28+$dl;
                $dl= 31-$du;
                if($dl>=0)
               { $dp=31-$dl;
                 echo "your successive date will be {$dp}/03/{$y}<br>";}
                else  { 
                    $dl=abs($dl);
                echo "your successive date will be {$dl}/04/{$y}<br>";}
           case 4:
            $du=28+$dl;
            $dl=30-$du;
            if($dl>=0)
          { $dp=30-$dl;
              echo "your successive date will be {$dp}/04/{$y}<br>";}
            else  { 
                $dl=abs($dl);
            echo "your successive date will be {$dl}/05/{$y}<br>";}
            case 5:
                $du=28+$dl;
                $dl= 31-$du;
                if($dl>=0)
              { $dp=31-$dl;
                  echo "your successive date will be {$dp}/05/{$y}<br>";}
                else  { 
                    $dl=abs($dl);
                echo "your successive date will be {$dl}/06/{$y}<br>";}
            case 6:
                $du=28+$dl;
                $dl=30-$du;
                if($dl>=0)
               { $dp=30-$dl;
                 echo "your successive date will be {$dp}/06/{$y}<br>";}
                else  { 
                    $dl=abs($dl);
                echo "your successive date will be {$dl}/07/{$y}<br>";}
            case 7:
                $du=28+$dl;
                $dl= 31-$du;
                if($dl>=0)
              { $dp=31-$dl;
                  echo "your successive date will be {$dp}/07/{$y}<br>";}
                else  { 
                    $dl=abs($dl);
                echo "your successive date will be {$dl}/08/{$y}<br>";}
             case 8:
                $du=28+$dl;
                $dl=30-$du;
            if($dl>=0)
          { $dp=30-$dl;
              echo "your successive date will be {$dp}/08/{$y}<br>";}
            else  { 
                $dl=abs($dl);
            echo "your successive date will be {$dl}/09/{$y}<br>";}
            case 9:
                $du=28+$dl;
                $dl= 31-$du;
                if($dl>=0)
             { $dp=31-$dl;
                   echo "your successive date will be {$dp}/09/{$y}<br>";}
                else  { 
                    $dl=abs($dl);
                echo "your successive date will be {$dl}/10/{$y}<br>";}
            case 10:
                $du=28+$dl;
                $dl=30-$du;
                if($dl>=0)
           { $dp=30-$dl;
                 echo "your successive date will be {$dp}/10/{$y}<br>";}
                else  { 
                    $dl=abs($dl);
                echo "your successive date will be {$dl}/11/{$y}<br>";}
            case 11:
                $du=28+$dl;
                $dl= 31-$du;
                if($dl>=0)
               {  $dp=31-$dl;
                 echo "your successive date will be {$dp}/11/{$y}<br>";}
                else  { 
                    $dl=abs($dl);
                echo "your successive date will be {$dl}/12/{$y}<br>";}
             case 12:
                $du=28+$dl;
                $dl=30-$du;
                if($dl>=0)
             { $dp=30-$dl;
                   echo "your successive date will be {$dp}/12/{$y}<br>";}
                else  { 
                    $dl=abs($dl);
                    $y=$y+1;
                    $m=$m+1;
                echo "your successive date will be {$dl}/01/{$y}<br>";}
               
    }
    $b=new DateTime($date);
    $c=new DateTime(date('m.d.y'));
    $d=$c->diff($b);
    echo "<br>";
    echo "<div style='background-color:red;'><p style='color:green;'>Today date is: ".date("D,d/m/y")."</p></div>";
    printf("<p style='color:green;'>Total days till today when u last experience this in the year
     : %d years,%d month,%d days</p>",$d->y,($d->m+1),$d->d);


}

?>
</body>
</html>