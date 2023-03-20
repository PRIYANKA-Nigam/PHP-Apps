<?php
session_start(); //to access a session this method is used

include("connection.php");
include("function.php");
$user_data= check_login($con);
$_SESSION;   //session is a global variable that can be access by any page of a website

?>


<!doctype html>
<html>
    <head>
        <title>My website</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            .a{
                /* margin: auto; */
                float: right;
                background-color:blueviolet;
                display: block;
                padding: 10px;
                width: 130px;
                height: 150px;
                margin-left: 50px;
                text-align: center;
            }
            </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <h1 class="text-center text-primary"><u><center>Welcome to Quiz Zone</center></u></h1>
    <div style="position: absolute;right:10px;top:2px;padding-top:20px;" >
   <h3> <a href="logout.php">Logout</a> </h3></div>
    <div class="a">
  
    <img src="<?php echo $user_data['image_name']; ?>" width="100" height="100">
    <h2> <?php 
    echo  $_SESSION['user_id']?>  </h2>
    </div>
    <div class="container">
        <div class="col-xl-8col-lg-8 col-md-8 col-sm-8 m-auto d-block>
<div class="card">
<h4 class="text-center card-header">Welcome  <?php echo $user_data['user_name'];?> ,You have to select only one answer in each of the questions.
Best of Luck :)</h4>
</div><br>
<form action="result.php" method="post">
<?php
for($i=1;$i<6;$i++){
$q="select * from questions where qid=$i";
$query=mysqli_query($con,$q);
while($rows=mysqli_fetch_array($query)){
    ?>
    <div class="card">
        <h4 class="card-header"><?php echo $rows['question'];?></h4>
      <?php
      $q="select * from answers where ans_id=$i";
      $query=mysqli_query($con,$q);
      while($rows=mysqli_fetch_array($query)){
          ?>
          <div class="card-body">
            <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid']; ?>" >
            <?php
           echo $rows['answer'];
            ?>
          </div>

     
   
    <?php
      }
    }
}
?>
<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
</form>
</div>
    </div> <br><br>
    <div class="m-auto d-block">
        <a href="logout.php" class="btn btn-primary">LOGOUT</a>
    </div><br>
    <h5 class="text text-center">@2023</h5>
    </div>
</body>
</html>