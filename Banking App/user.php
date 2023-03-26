<?php
session_start();
include("connection.php");
$name=$_SESSION['name'];
$accNo=$_SESSION['acc_num'];
$bal=$_SESSION['Balance'];
$bank=$_SESSION['Bank'];
?>
<!Doctype html>
<html>
    <head>
        <title>User Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
        <h1 class="text-center">Welcome <?=$_SESSION['name']?></h1>
        <div class="row">
            <div class="col-4">
    <div class="card" style="width: 18rem;">
<img src="image/Priyanka.jpg" class="card-img-top" alt="Admin">
<div class="card-body text-center">
<h5 class="card-title"><?=$_SESSION['name'] ?></h5>
<a href="logout_admin_user.php" class="btn btn-primary">Logout</a>
</div>
</div>
        <div class="col-8">
  <table border="2" class="container align-items-left">
    <tr>
        <thead>
        <th>S.No</th>
    <th>Name</th>
    <th>Mobile Number</th>
    <th>Bank</th>
    <th>Account Number</th>
    <th>Account Balance</th>
    <th>Transaction History</th>
    <th>Login Date</th>
        </thead>
    </tr>
    <tbody>
            <?php 
            $i=1;
            $sql="select * from user where name='$name' and  acc_num='$accNo'";
            $res=mysqli_query($con,$sql);
             while($row=mysqli_fetch_assoc($res)){ ?>
                        
                <tr>
                    <th scope="row"><?=$i  ?></th>
                    <td><?=$row['name'] ?></td>
                    <td><?=$row['mob'] ?></td>
                    <td><?=$row['Bank'] ?></td>
                    <td><?=$row['acc_num'] ?></td>
                    <td><?=$row['Balance'] ?></td>
                    <td><?=$row['mode'] ?></td>
                    <td><?=$row['date'] ?></td>
                </tr>
                <?php $i++;  }?>
            </tbody>
  </table>
        </div></div>
  <br>
  <div class="row">
    <div class="col-6">
  <div class="container " style="min-height:100vh" >
<form class="border shadow p-3 rounded" style="width:450px;" method="post" action="">
<h4 class="text-center p-3">Enter Amount to deposit</h4>
   <input  type="number" name="amount"><br>
    <button type="submit" class="btn btn-primary">Submit</button><br>  
<?php
if(isset($_POST['amount']) ){
    $a1=$_POST['amount'];
    $mode='Deposit';
            $bal=$bal+$a1;
            $sql="update user set Balance='$bal',mode='$mode' where name='$name' and acc_num='$accNo'";
            mysqli_query($con,$sql);
            echo "Account Balance Updated";
    }  
?>
</form>
  </div></div>
  <div class="col-6">
  <div class="container " style="min-height:100vh" >
<form class="border shadow p-3 rounded" style="width:450px;" method="post" action="">
<h4 class="text-center p-3">Enter Amount to Withdraw</h4>
   <input  type="number" name="amount2"><br>
    <button type="submit" class="btn btn-primary">Submit</button><br>  
<?php
if(isset($_POST['amount2']) ){
    $a2=$_POST['amount2'];
    $mode='Withdraw';
        $bal=$bal-$a2;
        $sql="update user set Balance='$bal',mode='$mode' where name='$name' and acc_num='$accNo'";
        mysqli_query($con,$sql);
        echo "Account Balance Updated";
    
    }  
?>
</form>
  </div></div>
</div>
    </body>
</html>