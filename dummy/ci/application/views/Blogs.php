<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        </head>
    <body  >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="row">

                     
<div class="col-lg-6 mb-4">
   <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
          
      </div>
      <!-- Card Body -->
      <div class="card-body">
      <div class="row">
      <div class="col-lg-6 mb-4">
          <div class="card bg-primary text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/'?>'" style="cursor:pointer;">
                 Java
                 
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-success text-white shadow">
              <div class="card-body" >
                 C
                  
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-info text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/Spring'?>'" style="cursor:pointer;">
                 Spring
                 
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-warning text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/Git'?>'" style="cursor:pointer;">
                Git
                 
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-danger text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/JDBC'?>'" style="cursor:pointer;">
              JDBC
                
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-secondary text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/Azure'?>'" style="cursor:pointer;">
                 Azure
                 
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-light text-black shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/PHP'?>'" style="cursor:pointer;">
                 PHP
                
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-dark text-white shadow">
              <div class="card-body">
                 Android Studio
                 
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-primary text-white shadow">
              <div class="card-body">
                 SQL(Oracle/MySQL)
                  
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-success text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/Microservice'?>'" style="cursor:pointer;">
                 Microservices
                  
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-info text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/DevOps'?>'" style="cursor:pointer;">
                 DevOps
                  
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-warning text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/Kafka'?>'" style="cursor:pointer;">
                 Kafka
                 
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-danger text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/Maven'?>'" style="cursor:pointer;">
                  Maven/Gradle
                 
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-secondary text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/Api'?>'" style="cursor:pointer;">
                 APIs & Libraries
                 
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-light text-black shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/Jira'?>'" style="cursor:pointer;">
                 JIRA
                  
              </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
          <div class="card bg-dark text-white shadow">
              <div class="card-body" onclick="location.href='<?= base_url().'Blog/Jar'?>'" style="cursor:pointer;">
                  JAR/WAR/EAR files
                 
              </div>
          </div>
      </div>
  </div>
   


      </div>
  </div>
</div>
<div class="col-xl-6 col-lg-6">
  <div class="card shadow mb-12">
      <!-- Card Header - Dropdown -->
      <div
          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">In-use Languages(2023)</h6>
      </div>
      <!-- Card Body -->
<div class="card-body">
<?php  include('charts.php'); ?>
</div>
</div>
</div>   </div>
<?php 
        include('footer.php');
        ?>
</body>
</html>       