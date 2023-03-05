


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div>
        <form action="" method = "POST">
        <input type="number"name = "a"  required ></br>
            <select name="operation1"></br>
                <option value="cm">Centimeter</option>
                <option value="in">Inches</option>
                <option value="mm">Millimeter</option>
                <option value="fo">Foot</option>
                <option value="ya">Yard</option>
                <option value="km">Kilometer</option>
                <option value="mi">Miles</option>
                <option value="m">Meter</option>
            </select> 
            <h2>To</h2>
           <!-- <input type="number"name = "b"required></br> -->
          
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
        <button type="submit">submit</button> </br>
        </form>
    
    </div>


    <?php

        if(isset($_POST['a'])){
            $num  = $_POST['a'];
          //  $b  = $_POST['b'];
            $conv=$_POST['operation2'];
            $from=$_POST['operation1'];
            $result=0;
           // $result  = $a * $b;
               //echo "<h1><b>The value in cm is {$num} </b></h1>";
            if($from=="cm"&&$conv=="cm"){
                $result=$num;
              //  echo "<h1><b>The value in cm is {$result} </b></h1>";
            }if($from=="cm"&&$conv=="in"){
                $result=($num*0.3937); 
              //  echo "<h1><b>The value in inches is {$result} </b></h1>";  
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
            echo '<p>'.$result.'</p>';
        }

    ?>
</body>
</html>





