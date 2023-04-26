<?php 
include('connect.php');
?>
<!DOCTYPE HTML>
<HTML>
    <head>

        <title>weekly task </title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
       integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
    <h1><b><center>weekly Routine</center></b></h1>
    <br>
    <br>
    <center><input type="submit" name="submit2" value="VIEW"/></center> 
    <?php
    if(isset($_POST['submit2'])){
        header("Location:firstPage.php");
    }
    ?>
    <br><br><hr>
    <div class="container-fluid">
        <div class="row">
        <div class="col offset-1" >05:15am</div>
        <div class="col ">08:20am</div>
        <div class="col">10:00am</div>
        <div class="col">12:30pm</div>
        <div class="col">01:30pm</div>
        <div class="col">04:00pm</div>
        <div class="col">06:40pm</div>
        <div class="col">08:00pm</div>
        <div class="col">11:00pm</div>
        <div class="col">12:00pm</div>
        <div class="col">12:30pm</div>
        </div>
        <div class="row ">Monday
        <div class="col" id="head1">Wake up</div>
        <div class="col col-1" id="head">BreakFast</div>
        <div class="col col-3" id="head2">Office</div>
        <div class="col" id="head">Lunch</div>
        <div class="col" id="head">Walk</div>
        <div class="col" id="head">Snacks</div>
        <div class="col" id="head">Dinner</div>
        <div class="col" id="head">Novel</div>
        <div class="col" id="head">Sleep</div>
        </div>
        <div class="row">Tuesday
        <div class="col" id="head1">Wake up</div>
        <div class="col col-1" id="head">BreakFast</div>
        <div class="col" id="head2">Office</div>
        <div class="col col-2" id="head2">Apps</div>
        <div class="col" id="head">Lunch</div>
        <div class="col" id="head">Walk</div>
        <div class="col" id="head">Snacks</div>
        <div class="col" id="head">Dinner</div>
        <div class="col" id="head">Novel</div>
        <div class="col" id="head">Sleep</div>
        </div>
        <div class="row">Wednesday
        <div class="col" id="head2">Wake up</div>
        <div class="col col-1" id="head">BreakFast</div>
        <div class="col" id="head2">Office</div>
        <div class="col col-2" id="head2">Apps</div>
        <div class="col" id="head">Lunch</div>
        <div class="col" id="head">Walk</div>
        <div class="col" id="head">Snacks</div>
        <div class="col" id="head">Dinner</div>
        <div class="col" id="head">Novel</div>
        <div class="col" id="head">Sleep</div>
        </div>

        <div class="row">Thursday
        <div class="col" id="head1">Wake up</div>
        <div class="col col-1" id="head">BreakFast</div>
        <div class="col" id="head">Office</div>
        <div class="col col-2" id="head2">Apps</div>
        <div class="col" id="head">Lunch</div>
        <div class="col" id="head">Walk</div>
        <div class="col" id="head">Snacks</div>
        <div class="col" id="head">Dinner</div>
        <div class="col" id="head">Novel</div>
        <div class="col" id="head">Sleep</div>
        </div>
        <div class="row">Friday
        <div class="col" id="head3">Wake up</div>
        <div class="col col-1" id="head2">BreakFast</div>
        <div class="col" id="head">Office</div>
        <div class="col col-2" id="head2">Apps</div>
        <div class="col" id="head">Lunch</div>
        <div class="col" id="head">Walk</div>
        <div class="col" id="head">Snacks</div>
        <div class="col" id="head">Dinner</div>
        <div class="col" id="head">Novel</div>
        <div class="col" id="head">Sleep</div>
        </div>
        <div class="row">Saturday
        <div class="col" id="head1">Wake up</div>
        <div class="col col-1" id="head">BreakFast</div>
        <div class="col col-3" id="head">Apps</div>
        <div class="col" id="head2">Lunch</div>
        <div class="col col-2" id="head2">Outdoor</div>
        <div class="col" id="head">Dinner</div>
        <div class="col" id="head">Novel</div>
        <div class="col" id="head">Sleep</div>
        </div>
        <div class="row">Sunday
        <div class="col" id="head1">Wake up</div>
        <div class="col col-1" id="head">BreakFast</div>
        <div class="col col-3" id="head">Apps</div>
        <div class="col" id="head2">Lunch</div>
        <div class="col col-2" id="head2">Outdoor</div>
        <div class="col" id="head">Dinner</div>
        <div class="col" id="head">Novel</div>
        <div class="col" id="head">Sleep</div>
        </div>
</div>

<?php
$day=$_POST['choose']??'no data passed';
$task=$_POST['task']??'no data passed';
$date=$_POST['date']??'no data passed';
$b=new DateTime($date);
echo "Data Saved to Database....";
$d=$b->format('Y-m-d-H-i-s');
//echo "date". $b->format('Y-m-d\TH:i'); 
//echo "date". $b->format('Y-m-d H:i:s');
echo "<br>";
echo "Day : $day  <br>Task : $task <br>DateTime :".$b->format('Y-m-d H:i:s') ;
echo "<br>";
$insert="INSERT into task(day,task,date) values(?,?,?)";
$st=$conn->prepare($insert);
echo "<br>";

$st->bind_param("sss",$day,$task,$d);
$st->execute();
$st->close();
$conn->close();
// $table ='<table><tr><th class="table">Day : </th><td>'.$day.'</td><td>'.$day.'</td><td>'.$day.'</td><td>'.$day.'</td><td>'.$day.'</td></tr>
// <tr><th>Task :</th><td>'.$task.'</td><td>'.$task.'</td><td>'.$task.'</td><td>'.$task.'</td><td>'.$task.'</td><td>'.$task.'</td><tr> </table> ';
//           echo $table;
       
//

?>
</form>
</body>
</html>
