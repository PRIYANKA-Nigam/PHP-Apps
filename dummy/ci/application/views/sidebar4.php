<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel = "stylesheet" href  = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css');    ?>">
    <script src='main.js'></script>
 

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
<!-- 
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>     -->
<div class="container-fluid">
    <div class="row">
        
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
<div class="side-bar" >
        <div class="d-flex flex-column justify-content-between col-auto bg-dark min-vh-100">
            <div class="mt-4">
                <a class="text-white d-none d-sm-inline text-decoration-none d-flex align-items-center ms-4" role="button">
                    <span class="fs-5">Microservice</span>
                </a>
                <hr class="text-white">
                <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-house"></i>
                            <span class="ms-2 d-none d-sm-inline">What is microservice.</span>
                        </a>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">Fault Tolerance in microservice</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#" class="nav-link active text-white" aria-current="page">Rate Limiting</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Circuit Breaker</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Bulk Head</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Time Limiting</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">Different Architectures</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#" class="nav-link active text-white" aria-current="page">Monolithic Architecture</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Service Oriented Architecture</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Microservice Architecture</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">Comparison & Contrast</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#" class="nav-link active text-white" aria-current="page">Monolithic Vs Microservice</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Microservices Vs APIs</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Rest APIs Vs Streaming APIs</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Rest APIs Vs Restful APIs</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">JAR Vs WAR files</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">API Vs WebHooks Vs Websockets</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page" >
                        <i class="fa fa-users"></i>
                        <span class="ms-2 d-none d-sm-inline">API Gateway</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page" >
                        <i class="fa fa-users"></i>
                        <span class="ms-2 d-none d-sm-inline">Eureka Server</span>
                    </a>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">Service Registry/Discovery</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#" class="nav-link active text-white" aria-current="page">Service Registry</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Server side service discovery</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">Client side service discovery</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link" >Need of jar files in spring boot applications.</a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link" >How to see where and how jar file is generated for a given artifact.</a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link" >Whare jar file is generated inside target folder.</a>
                    </li>
                    <li class="nav-item diabled">
                    <a href="#" class="nav-link" aria-current="page">Disabled</a>
                    </li>
                </ul>
            </div>
            <div style="margin:auto">
            <div class="dropdown open">
                <a class="btn border-none outline-none text-white dropdown-toggle" type="button" id="triggerId"
                data-aria-expanded="false">
                <i class="fa fa-user"></i><span class="ms-1 d-none d-sm-inline">Priyanka</span>
            </a>
           
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
            </div> 
        </div></div>
        </div>
</div>
    </nav>
    </div>
</div>
</body>
</html>