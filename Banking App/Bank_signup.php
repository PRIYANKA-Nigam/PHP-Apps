<!DOCTYPE html>
<html>
    <head>
        <title>Bank Registration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="container-fluid">
        <div class="row "><h1 class="text-center"><u>Bank Invoice</u></h1></div>
    <div class="row">
<div class="col">
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh" >
    <form class="border shadow p-3 rounded" style="width:450px;" action="" method="post">
    <h1 class="text-center p-3">Admin LOGIN</h1>
    <div class="mb-3">
    <label for="Username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="username">
 </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Contact Number</label>
    <input type="text" name="num"  class="form-control" >
  </div>
  <div class="mb-1">
    <label class="form-label">Select Bank Type:</label>
  </div>
  <select class="form-select mb-3" aria-label="Default select example" name="role">
  <option selected value="HDFC Bank">HDFC Bank</option>    
    <option value="ICICI Bank">ICICI Bank</option>
    <option value="State Bank of India">State Bank of India</option>
    <option value="Union Bank of India">Union Bank of India</option>
    <option value="Punjab National Bank">Punjab National Bank</option>
    <option value="Bank of Baroda">Bank of Baroda</option>
    <option value="Central Bank of India">Central Bank of India</option>
    <option value="Axis Bank">Axis Bank</option>
    <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
    <option value="IDBI Bank">IDBI Bank</option>
    <option value="Yes Bank">Yes Bank</option>
    <option value="City Union Bank">City Union Bank</option>
    <option value="Citibank">Citibank</option>
    <option value="Canara Bank">Canara Bank</option>
    <option value="UCO Bank">UCO Bank</option>
    <option value="Federal Bank">Federal Bank</option>
  </select>
  <button type="submit" class="btn btn-primary">Signup</button>
    <a href="Bank_login.php">Click to Login Page</a><br><br>
</form>
    </div> </div>
    <div class="col">
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh" >
    <form class="border shadow p-3 rounded" style="width:450px;" action="" method="post">
    <h1 class="text-center p-3">User LOGIN</h1>
    <div class="mb-3">
    <label for="Username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="usernames">
 </div>
  <div class="mb-3">
  <label for="exampleInputNumber" class="form-label">Contact Number</label>
    <input type="text" name="nums"  class="form-control" >
  </div>
  <div class="mb-3">
  <label for="exampleInputNumber" class="form-label">Min Amount to Open Account</label>
    <input type="number" name="amount"  class="form-control" >
  </div>
  <div class="mb-1">
    <label class="form-label">Select Bank Type:</label>
  </div>
  <select class="form-select mb-3" aria-label="Default select example" name="roles">
    <option selected value="HDFC Bank">HDFC Bank</option>    
    <option value="ICICI Bank">ICICI Bank</option>
    <option value="State Bank of India">State Bank of India</option>
    <option value="Union Bank of India">Union Bank of India</option>
    <option value="Punjab National Bank">Punjab National Bank</option>
    <option value="Bank of Baroda">Bank of Baroda</option>
    <option value="Central Bank of India">Central Bank of India</option>
    <option value="Axis Bank">Axis Bank</option>
    <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
    <option value="IDBI Bank">IDBI Bank</option>
    <option value="Yes Bank">Yes Bank</option>
    <option value="City Union Bank">City Union Bank</option>
    <option value="Citibank">Citibank</option>
    <option value="Canara Bank">Canara Bank</option>
    <option value="UCO Bank">UCO Bank</option>
    <option value="Federal Bank">Federal Bank</option>
  </select>
  <button type="submit" class="btn btn-primary">Signup</button>
    <a href="Bank_login.php">Click to Login Page</a><br><br>
</form>
    </div> </div>
    </div>  </div>
    <?php
    include("connection.php");
    require_once("login_function.php");
    if(isset($_POST['username']) && isset($_POST['num']) && isset($_POST['role'])){
      $username=$_POST['username'];
      $mob=$_POST['num'];
      $type=$_POST['role'];
      $code=random_num(10);
      if(!empty($username) && !empty($mob))
     { $sql="insert into admin(name,Mob,Bank,Code) values('$username','$mob','$type','$code')";
      mysqli_query($con,$sql);
      echo "You are registered with $type.A Unique Login Code will be shared to you on your mobile number $mob";}
      else{
        echo "All fields are required";
      }
    
    }
  
    if(isset($_POST['usernames']) && isset($_POST['nums']) && isset($_POST['roles']) && isset($_POST['amount'])){
      $username=$_POST['usernames'];
      $mob=$_POST['nums'];
      $type=$_POST['roles'];
      $bal=$_POST['amount'];
      $accNo=random_num(10);
      if(!empty($username) && !empty($mob))
      {if($bal>=2000 ) 
     { $sql="insert into user(name,mob,Bank,acc_num,Balance) values('$username','$mob','$type','$accNo','$bal')";
      mysqli_query($con,$sql);
      echo "You are registered with $type.Account Number will be shared to you on your mobile number $mob";}
      else{
        echo "Please make a minimum deposit of 2000 to register";
      }}else{
        echo "All fields are required";
      }
    }

?>
    </body>
</html>