<?php
session_start();
include("connection.php");
if(isset($_SESSION['username']) && isset($_SESSION['id'])){
?>


<!Doctype Html>
<html>
    <head>
    <title>Home Page</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh" >
    <?php 
if($_SESSION['role']=='admin'){ ?>
<div class="card" style="width: 18rem;">
<img src="image/Priyanka.jpg" class="card-img-top" alt="Admin">
<div class="card-body text-center">
<h5 class="card-title"><?=$_SESSION['name'] ?></h5>
<a href="logout.php" class="btn btn-primary">Logout</a>
</div>
</div>
<div class="p-3">
    <?php include("members.php");
    if(mysqli_num_rows($res)>0){?>
  
    <h1 class="display-4 fs-1">Members</h1>
    <table class="table" style="width:32rem;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">User name</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $i=1;
         while($row=mysqli_fetch_assoc($res)){ ?>
                    
            <tr>
                <th scope="row"><?=$i  ?></th>
                <td><?=$row['username'] ?></td>
                <td><?=$row['name'] ?></td>
                <td><?=$row['role'] ?></td>
            </tr>
            <?php $i++;  }?>
        </tbody>
    </table>
    <?php   }?>
</div>
<?php }else{   ?>
    <div class="card" style="width: 18rem;">
<img src="image/baby.jpg" class="card-img-top" alt="Admin">
<div class="card-body text-center">
<h5 class="card-title"><?=$_SESSION['name'] ?></h5>
<a href="logout.php" class="btn btn-primary">Logout</a>
</div>
</div>
<?php  } ?>
    </div>
    </body>
</html>
<?php  }else{
    header("Location:index.php");
}
?>