<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Admin Panel</title>
   
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel = "stylesheet" href  = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style3.css');    ?>">
  
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
   

    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Home</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" 
  aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </div>
  </div>
</header>
<!-- <div class="sidenav"> -->
<div class="container-fluid">
  <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="side-bar" >
    <div class="menu">
      <div class="position-sticky pt-3 sidebar-sticky">
      <div id="wrapper">
        <ul class="nav flex-column navbar-nav bg-gradient-primary  sidebar-dark accordion" 
        id="accordionSidebar" style="background:brown">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                </div>
              <span data-feather="home" class="align-text-bottom">
           Java</span>
            </a>
          </li>
          <li>
          <div class="item">
             <a class="sub-btn" href="#"><i class="fas fa-info-circle"></i>What is Java.<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#" class="sub-item">Datatypes</a>
                <a href="#" class="sub-item">Reserved Keywords</a>
                <a href="#" class="sub-item">Exceptions/Errors</a>
                <a href="#" class="sub-item">Generics</a>
                <a href="#" class="sub-item">Abstract classes vs Interface</a>
                <a href="#" class="sub-item">Super/this keyword</a>
                <a href="#" class="sub-item">Static/non-static members</a>
                <a href="#" class="sub-item">Superclass members</a>
                <a href="#" class="sub-item">JDK/JRE/JVM/JIT</a>
            </div>
            </div>
          </li>
          <hr class="sidebar-divider">
  <div style="margin:auto">
            <div class="dropdown open">
                <p class="border-none outline-none "  id="triggerId"
                data-aria-expanded="true">
                <i class="fas fa-info-circle"></i>
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#">Collections Framework</a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Concurrent Collection</a>
                <a class="dropdown-item" href="#">Traditional Collection</a>
            </div> 
        </div></div>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              VM Arguments
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
           Serialisation
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Java Applet Vs Applications
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Multithreading 
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
           Executor Framework
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Design pattern in java
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
           Compiler Vs Interpreter
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           OOPS concept
            </a>
          </li>
          <li class="nav-item">
  <hr class="sidebar-divider">
  <div style="margin:auto">
            <div class="dropdown open">
                <p class="border-none outline-none "  id="triggerId"
                data-aria-expanded="true">
                <i class="fas fa-info-circle"></i>
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#">Access/Non-access modifier</a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">visibilty scope</a>
                <a class="dropdown-item" href="#">Overriding rules</a>
            </div> 
        </div></div>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Enum
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Features of Java 8 to Java 19
            </a>
          </li>
          <li class="nav-item">
          <hr class="sidebar-divider">
          <div class="item">
             <a class="sub-btn" href="#"><i class="fas fa-info-circle"></i>Java 8<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#" class="sub-item"> Functional Interface</a>
                <a href="#" class="sub-item">Lambda Expression</a>
                <a href="#" class="sub-item"> Stream APIs</a>
                <a href="#" class="sub-item">Method Reference</a>
                <a href="#" class="sub-item"> Map-Reduce APIs</a>
                <a href="#" class="sub-item"> Default Methods in interface</a>
                <a href="#" class="sub-item"> Switch to Java 8</a>
            </div>
            </div>
          </li>
         
          <li class="nav-item">
  <hr class="sidebar-divider">
  <div style="margin:auto">
            <div class="dropdown open">
                <p class="border-none outline-none "  id="triggerId"
                data-aria-expanded="true">
                <i class="fas fa-info-circle"></i>
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#">Different Java Edition</a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Java SE Varsion History</a>
                <a class="dropdown-item" href="#"> Java SE Vs Java EE </a>
            </div> 
        </div></div>
          </li>
          <li class="nav-item">
  <hr class="sidebar-divider">
  <div style="margin:auto">
            <div class="dropdown open">
                <p class="border-none outline-none "  id="triggerId"
                data-aria-expanded="true">
                <i class="fas fa-info-circle"></i>
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#">   Class loader in Java</a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Class loader working and types</a>
                <a class="dropdown-item" href="#">  Static/Dynamic Loading </a>
            </div> 
        </div></div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Stackoverflow error in java
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
            Static block initialiser
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Shallow copy/Deep copy 
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
            Immutable Objects
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Garbage Collector 
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
           JDBC/JPA/JSP
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Java Card
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
           Java applications in realtime
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Frameworks
            </a>
          </li>
        </ul>

       
      </div>
      </div>
    </nav>
    </div></div>
    <!-- </div> -->
    <!-- <div class="main">
  <h2>Sidebar Dropdown</h2>
  <p>Some random text.. The next example will show you how to make the dropdown link functional.</p>
  <p>This sidebar is of full height (100%) and always shown.</p>
  <p>Some random text..</p>
</div> -->
<script type="text/javascript">
$(document).ready(function(){
$('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
});

});

</script>
  </body>
</html>