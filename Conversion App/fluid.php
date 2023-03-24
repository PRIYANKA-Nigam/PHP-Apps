<html>
<style>
            /* h2{ direction:rtl; //was moving to extreme right not immediate right
                padding:200px;
                } */
                .red {
                    position: relative;
                    left: 310px;
                    top: -150px;

                }
                .a {
                    position: relative;
                    left: 400px;
                    top: -385px;

                }
               
                
               
                </style>
    <body style="background-color:grey; border-style:solid;border-width:20px;border-color:white;padding:0.25em">
        <h1><u>Fluid Conversion</u></h1>
</body>
<form method="POST" >
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c1"> Gallon <br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c2"> Kilolitre<br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c3"> Liter<br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c4"> Deciliter<br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c5"> Centiliter<br><br>
        <input type="text" class="app-form-control" placeholder="Enter Value" name="c6"> Milliliter
      
        <h2><b>To </b></h2> <br>
        <select name="operation">
<option value="cm">Gallon</option>
<option value="in">Kiloliter</option>
<option value="mm">Liter</option>
<option value="fo">Deciliter</option>
<option value="ya">Centiliter</option>
<option value="km">Milliliter</option>
            </select>
<button type="submit" name="sub">submit</button> </br>
<input type="text" value="<?php echo $result; ?>" name="out">
         <div class="a">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Water_drop_001.jpg/1200px-Water_drop_001.jpg" 
        height="600" width="600" alt="Image resize">
            </div>
       
       <!-- <input type="button" class="app-form-control" placeholder="Converted Value" name="c7"> <br>     -->
      <!-- <div class="b"> -->
      <!-- <input type="button" class="app-form-control" placeholder="Converted Value" name="c7"> <br> -->
            <!-- </div>   -->
</form>
<?php
$data=$_POST['operation'];
$result=0;
if(isset($_POST['c1'])){
$num=$_POST['c1'];
echo '<p>'.$result.'</p>';
switch($data){
    case "cm":
        $result=$num; break;
     case "in"   :
         $result=$num/264.172;break;
     case "mm":
          $result=$num*4;
        case "fo":
          $result=$num*40;
            case "ya":
$result=$num*400;
         case "km":
            $result=$num*4000;

}
}
if(isset($_POST['c2'])){
    $num=$_POST['c2'];
    echo '<p>'.$result.'</p>';
    switch($data){
        case "cm":
            $result=$num*264.172; break;
         case "in"   :
             $result=$num;break;
         case "mm":
              $result=$num*1000;
            case "fo":
              $result=$num*10000;
                case "ya":
    $result=$num*100000;
             case "km":
                $result=$num*1000000;
    
    }

}
if(isset($_POST['c3'])){
    $num=$_POST['c3'];
    echo '<p>'.$result.'</p>';
    switch($data){
        case "cm":
            $result=$num/4; break;
         case "in"   :
             $result=$num/1000;break;
         case "mm":
              $result=$num;
            case "fo":
              $result=$num*10;
                case "ya":
    $result=$num*100;
             case "km":
                $result=$num*1000;
    
    }
}
if(isset($_POST['c4'])){
    $num=$_POST['c4'];
    echo '<p>'.$result.'</p>';
    switch($data){
        case "cm":
            $result=$num/40; break;
         case "in"   :
             $result=$num*10000;break;
         case "mm":
              $result=$num/10;
            case "fo":
              $result=$num;
                case "ya":
    $result=$num*10;
             case "km":
                $result=$num*100;
    
    }
}
if(isset($_POST['c5'])){
    $num=$_POST['c5'];
    echo '<p>'.$result.'</p>';
    switch($data){
        case "cm":
            $result=$num/400; break;
         case "in"   :
             $result=$num/1000000;break;
         case "mm":
              $result=$num/100;
            case "fo":
              $result=$num/10;
                case "ya":
    $result=$num;
             case "km":
                $result=$num*10;
    
    }
}
if(isset($_POST['c6'])){
    $num=$_POST['c6'];
    echo '<p>'.$result.'</p>';
    switch($data){
        case "cm":
            $result=$num/4000; break;
         case "in"   :
             $result=$num/1000000;break;
         case "mm":
              $result=$num/1000;
            case "fo":
              $result=$num/100;
                case "ya":
    $result=$num/10;
             case "km":
                $result=$num;
    
    }
}
if(isset($_POST['sub'])){
    $ans=$_POST['out'];
    echo '<p>'.$ans.'</p>';
}


?>
</body>
</html>