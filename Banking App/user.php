<?php
session_start();
include("connection.php");
$name=$_SESSION['name'];
$accNo=$_SESSION['acc_num'];
$bal=$_SESSION['Balance'];
$bank=$_SESSION['Bank'];
$amo=isset($_POST['amount'])?$_POST['amount']:null;
$q="select * from user where name='$name' and acc_num='$accNo'";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($res)){
    // $acc=$row['acc_num'];
$balance=$row['Balance'];
$mode=$row['mode'];
$query="insert into user_history(acc_num,Balance,Amount,Mode) values('$accNo','$balance','$amo','$mode')";
mysqli_query($con,$query);

}


?>
<!Doctype html>
<html>
    <head>
        <title>User Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script> //on refreshing page data was getting manipulated with the last value of input field.to prevent that it is added
        //now on refresh form data value will be 0 or null.
           if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
           }
            </script>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="row">
    <div class="col-10">
        <div class="row">
        <h1 class="text-center">Welcome <?=$_SESSION['name']?></h1>
        </div>
        <br><br><br>
        <div class="row">
        <table border="2" class="container align-items-left" style="width:77rem;margin-left:10px">
    <tr>
        <thead>
        <th>S.No</th>
    <th>Name</th>
    <th>Mobile Number</th>
    <th>Bank</th>
    <th>Account Number</th>
    <th>Account Balance</th>
    <th>Transaction History</th>
    <th>Registration Date</th>
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

        </div>
    </div>
            <div class="col-2">
            <div class="container  " style="min-height:10vh;padding-right:5px" >
    <div class="card" style="width: 10rem;">
<img src="image/Priyanka.jpg" class="card-img-top" alt="Admin">
<div class="card-body text-center">
<h5 class="card-title"><?=$_SESSION['name'] ?></h5>
<a href="logout_admin_user.php" class="btn btn-primary">Logout</a>
</div> </div>
</div> </div>    
  <br><br>
  <br><br>
  <div class="container-fluid " style="min-height:50vh;margin-left:430px" >
<form class="border shadow p-3 rounded" style="width:600px;" method="post" action="">
<h4 class="text-center p-1">Enter Amount to deposit/Withdraw</h4>
   <input  type="number" name="amount" value="<?php echo $rand; ?>"><br>
   <div class="mb-1">
    <label class="form-label">Select Bank Type:</label>
  </div>
  <select class="form-select mb-3" aria-label="Default select example" name="role">
  <option selected value="Deposit">Deposit</option>    
    <option value="Withdraw">Withdraw</option>
  </select><br>
    <button type="submit" class="btn btn-primary" name="depo" >Deposit</button> 
    <button type="submit" class="btn btn-primary" name="with">Withdraw</button><br>  
<?php
 $sql="select Balance from user where name='$name' and  acc_num='$accNo'";
 $res=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($res);
 $balance=$row['Balance'];
 $a1=isset($_POST['amount'])?$_POST['amount']:0;
$mode=isset($_POST['role'])?$_POST['role']:null;
if(isset($_POST['depo'])){
       // $mode='Deposit';
            $balance=$balance+$a1;
             if($a1!=0 && $mode!='')
          { $sql="update user set Balance='$balance',mode='$mode' where name='$name' and acc_num='$accNo'";
           mysqli_query($con,$sql);
           echo "Deposited";}
           }
  else if(isset($_POST['with'])){
        //   $mode='Withdraw';
        if(($balance-$a1)>2000)
           { $balance=$balance-$a1;
            if($a1!=0 && $mode!='')
            { $sql="update user set Balance='$balance',mode='$mode' where name='$name' and acc_num='$accNo'";
             mysqli_query($con,$sql);
             echo "Withdrawn";}}
          else {
            echo "Sorry! Can't withdraw";
          }   
        }
       
      
       
     
?>
</form>
  </div>
  <hr>
  <table border="2" class="container align-items-left" style="margin:auto;margin-left:100px;width:72rem">
    <tr>
        <thead>
        <th>S.No</th>
    <th>Account Balance</th>
    <th>Amount</th>
    <th>Transaction History</th>
    <th>Login Date</th>
        </thead>
    </tr>
    <tbody>
 <?php
  $i=1;
  $sql="select * from user_history where acc_num='$accNo'";
  $res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){ ?>
                        
    <tr>
        <th scope="row"><?=$i  ?></th>
        <td><?=$row['Balance'] ?></td>
        <td><?=$row['Amount'] ?></td>
        <td><?=$row['Mode'] ?></td>
        <td><?=$row['Date'] ?></td>
    </tr>
    <?php $i++;  }
  ?>


<?php $i++;?>
  </tbody></table>
    </body>
</html>