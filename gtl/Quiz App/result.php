<!doctype html>
<html>
    <head>
        <title>My website</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
        <style>
            
        a{
           
            margin-left: 220px;
        }

        </style>
        </head>
<body align="center">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <h1 class="text-center card-header navbar navbar-expand-lg bg-primary"><u> Quiz Zone</u></h1>
    <br>
<?php
session_start(); 
include("connection.php");
include("function.php");
$user_data= check_login($con);
if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck']) ){
        $cnt=count($_POST['quizcheck']);
        $q="select * from questions";
        $query=mysqli_query($con,$q);
        $num=mysqli_num_rows($query); //gives row count
        echo ("<div class=a>");
        echo ("<table border=2 style=border-width:6px;border-color:black;width:40%;height:50%;>");
        echo ("<tr >");
        echo ("<th bgcolor=red style=text-align:center;width:300px;height:40px;>");echo "RESULT";echo ("</th>");
        echo ("</tr>");
        echo ("<tr>");
        echo ("<td>"); echo $user_data['user_name'];echo ("</td>"); echo ("</tr>");
        echo ("<tr>");
        echo ("<td>"); echo "Out of $num, You have answered $cnt questions";echo ("</td>");
        echo ("</tr>");
        $result=0; $i=1;
        $select=$_POST['quizcheck'];
      
      //  print_r($select);echo ("</td>"); 
      
while($rows=mysqli_fetch_array($query)){
  //  print_r($rows['ans_id']);
$check = $rows['ans_id']==$select[$i];
if($check){
    $result++;
}
$i++;
}
echo ("<tr>");
echo ("<td>");echo " your total score is " .$result;echo ("</td>");
$p=$result*100/$num;
echo ("</tr>");
echo ("<tr>");
echo ("<td>");echo "Percentage : $p%";echo ("</td>"); echo ("</tr>");
if($p>=70)
{ $f="Pass";
$r="Good Job!!!"; }
else if($p>=50 && $p<70)
{$f="SatisFactory";
$r="Promoted. Needs Improvement!!!";
}
else 
{$f="Fail";
    $r="Bad Luck. Try Again !!!";
}
echo ("<tr>");
if($f=="Pass")
{ echo ("<td bgcolor=green>");echo "Status : $f";echo ("</td>"); echo ("</tr>"); }
if($f=="SatisFactory")
{echo ("<td bgcolor=lightblue>");echo "Status : $f";echo ("</td>"); echo ("</tr>");}
if($f=="Fail") {
    echo ("<td bgcolor=orange>");echo "Status : $f";echo ("</td>"); echo ("</tr>");
}
echo ("<tr>");
echo ("<td>");echo "Remark : $r";echo ("</td>"); echo ("</tr>");
echo ("</table>");
echo("</div>");
    }
}

$name=$user_data['user_name'];
     try
   { $final="insert into loggedUser(username,totalques,answerscorrect,status) values('$name','$num','$result','$f')";
    $qresult=mysqli_query($con,$final);
   }catch(mysqli_sql_exception $e){
     $e->getMessage();
   }
?>
<div style="position:absolute; right:-80px; top:50px;width: 800px; height: 500px;" >
<br>
<label>Total Questions</label><br>
<div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
  <div style="width: 5%;background:yellow;text-align:center;border:1px solid black;margin-top:auto"> <p><b><?php echo $num; ?></b></p> </div>
  <div class="progress-bar bg-warning" style="width: 100%"></div>
</div><br><hr>
<label>Correct Questions</label><br>
<div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
<div style="width: 5%;background:yellow;text-align:center;border:1px solid black;margin-top:auto"> <p><b><?php echo $result; ?> </b></p> </div>
  <div class="progress-bar bg-success" style="width: <?php echo $result*10; ?>%"></div>
</div> <br><hr>
<label>Incorrect Questions</label><br>
<div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
<div style="width: 5%;background:yellow;text-align:center;border:1px solid black;margin-top:auto"> <p><b><?php echo $num-$result; ?> </b></p> </div>
  <div class="progress-bar bg-danger" style="width: <?php echo ($num-$result)*10; ?>%"></div>
</div> <br><hr>
<label>Percentage</label><br>
<div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
<div style="width: 5%;background:yellow;text-align:center;border:1px solid black;margin-top:auto"> <p><b><?php echo $p; ?> </b></p> </div>
  <div class="progress-bar bg-info" style="width: <?php echo $p; ?>%"></div>
</div>
</div>
<br><br>
<div class="m-auto d-block">
<a href="logout.php" class="btn btn-primary">LOGOUT</a>
</div><br>

 



  
</body>
</html>