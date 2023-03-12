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
<button type="submit">submit</button> </br>
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
$result=0;
if(isset($_POST['c1'])){
$data=$_POST['operation'];
$num=$_POST['c1'];
echo '<p>'.$result.'</p>';
switch($data){
    case "cm":
        $result=$num; break;
     case "in"   :
         $result=$num/264.172;break;
     case "mm":

        case "fo":

            case "ya":

         case "km":

}
}
if(isset($_POST['c2'])){

}
if(isset($_POST['c3'])){

}
if(isset($_POST['c4'])){

}
if(isset($_POST['c5'])){

}
if(isset($_POST['c6'])){

}
echo '<p>'.$result.'</p>';

?>
</body>
</html>