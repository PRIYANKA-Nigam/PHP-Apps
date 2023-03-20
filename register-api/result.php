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
    <h1 class="text-center card-header navbar navbar-expand-lg bg-body-tertiary"><u> Quiz Zone</u></h1>
    <br>
<?php
session_start(); 
include("connection.php");
include("function.php");
$user_data= check_login($con);
if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){
        $cnt=count($_POST['quizcheck']);
        echo ("<div class=a>");
        echo ("<table border=2 style=border-width:6px;border-color:black;width:40%;height:50%;>");
        echo ("<tr >");
        echo ("<th bgcolor=red style=text-align:center;width:300px;height:40px;>");echo "RESULT";echo ("</th>");
        echo ("</tr>");
        echo ("<tr>");
        echo ("<td>"); echo $user_data['user_name'];echo ("</td>"); echo ("</tr>");
        echo ("<tr>");
        echo ("<td>"); echo "Out of 5, You have answered $cnt questions";echo ("</td>");
        echo ("</tr>");
        $result=0; $i=1;
        $select=$_POST['quizcheck'];
      
      //  print_r($select);echo ("</td>"); 
        $q="select * from questions";
        $query=mysqli_query($con,$q);
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
$p=$result*100/5;
echo ("</tr>");
echo ("<tr>");
echo ("<td>");echo "Percentage : $p";echo ("</td>"); echo ("</tr>");
if($p>=60)
$f="Pass";
else if($p>=50 && $p<60)
$f="SatisFactory ... ";
else 
$f="Fail";
echo ("<tr>");
echo ("<td>");echo "Status : $f";echo ("</td>"); echo ("</tr>");
echo ("</table>");
echo("</div>");
    }
}
$name=$user_data['user_name'];
$final="insert into loggedUser(username,totalques,answerscorrect) values('$name','5','$result')";
$qresult=mysqli_query($con,$final);

?>
<br><br>
<div class="m-auto d-block">
<a href="logout.php" class="btn btn-primary">LOGOUT</a>
</div><br>



  
</body>
</html>