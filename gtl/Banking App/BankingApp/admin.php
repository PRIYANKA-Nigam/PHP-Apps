<?php
session_start();
include("../connection.php");
if(isset($_SESSION['name']) && isset($_SESSION['code'])){
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
    <div class="card" style="width: 18rem;">
<img src="../image/P3.png" class="card-img-top" alt="Admin" width="100px" height="170px">
<div class="card-body text-center">
<h5 class="card-title"><?=$_SESSION['name'] ?></h5>
<a href="logout_admin_user.php" class="btn btn-primary">Logout</a>
</div>
</div>
    <?php include("bankuser.php");
        if(mysqli_num_rows($res)>0){?>
      
        <h1 class="display-4 fs-1">Members</h1>
        <table class="table" style="width:32rem;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mob</th>
                    <th scope="col">Bank</th>
                    <th scope="col">acc_num</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Mode</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $i=1;
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
                    <td style="background-color:green;color:black;width:80px;text-align:center">
                      <a href="view_user.php?name=<?=$row['acc_num']; ?>&num=<?=$row['name']; ?>">VIEW</a></td> 
                </tr>
                <?php $i++;  }?>
            </tbody>
        </table>
        <?php   }?>
   
    </body>
</html>
<?php  }else{
    header("Location:Bank_login.php");
}
?>