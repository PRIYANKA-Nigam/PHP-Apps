<!doctype html>
<html>
    <head>
        <title>My website</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        </head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <h1 class="text-center card-header"><u><center> Quiz Zone</center></u></h1>
<?php
session_start(); 
include("connection.php");
include("function.php");
$user_data= check_login($con);
if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){
        $cnt=count($_POST['quizcheck']);
        echo "Out of 5, You have answered $cnt questions";
        $result=0; $i=1;
        $select=$_POST['quizcheck'];
       // print_r($select);
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
echo "<br> your total score is " .$result;
    }
}
$name=$user_data['user_name'];
$final="insert into loggedUser(username,totalques,answerscorrect) values('$name','5','$result')";
$qresult=mysqli_query($con,$final);

?>
<div class="m-auto d-block">
<a href="logout.php" class="btn btn-primary">LOGOUT</a>
</div><br>
</body>
</html>