<!-- <?php
echo md5("1234"); //admin
echo "<br>";
echo md5("abcd"); //user
?> -->
<?php
session_start();
include("../connection.php");
if(!isset($_SESSION['username']) && !isset($_SESSION['id'])){
?>
<!Doctype Html>
<html>
    <head>
    <title>Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh" >
    <form class="border shadow p-3 rounded" style="width:450px;" action="check_login.php" method="post">
    <h1 class="text-center p-3">LOGIN</h1>
    <?php
      if(isset($_GET['error'])){ ?>
  <div class="alert alert-danger" role="alert">
      <?=$_GET['error']?>
    </div>
    <?php 
      } ?>
  <div class="mb-3">
    <label for="Username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="username">
 </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-1">
    <label class="form-label">Select User Type:</label>
  </div>
  <select class="form-select mb-3" aria-label="Default select example" name="role">
    <option selected value="user">User</option>    
    <option value="admin">Admin</option>
  </select>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </body>
</html>
<?php  }else{
    header("Location:home.php");
}
?>