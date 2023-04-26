<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style>
          /* body{
            align:center;
          } */
.col{
    background: blueviolet;
    margin:4px ;
}
.col-1{
    background: black;
    width:0.1px;
}
.col-5{
  background: black;
  width: 400px;
  height: 160px;
}
.wrapper{
  margin-left:15px ;
}
</style>
    </head>
    <body  >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>

    <!-- Navigation bar -->

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get2Logics</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php">Home</a></li>
            <li><a class="dropdown-item" href="index.php">About Us</a></li>
            <li><a class="dropdown-item" href="index.php">Find Blogs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="signup.php">Sign Up</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row gx-5" >
    <div class="col">
     <div class="p-3" onclick="location.href='new.php';" style="cursor:pointer;">Fun Stuffs</div>
    </div>   <div class="col-1"></div>
    <div class="col">
      <div class="p-3" onclick="location.href='new.php';" style="cursor:pointer;">Series Stuffs</div>
    </div> <div class="col-1"></div>
    <div class="col">
      <div class="p-3" onclick="location.href='new.php';" style="cursor:pointer;">Gaming Stuffs</div>
    </div>  <div class="col-1"></div>
    <div class="col">
      <div class="p-3" onclick="location.href='new.php';" style="cursor:pointer;">Flick Stuffs</div>
    </div> <div class="col-1"></div>
  </div>
</div>
<hr>
<h1><center>Page Content</center></h1>
<br>
<div class="container text-center">
  <div class="row g-2">
    <div class="col-5" >
      <div class="p-3" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample" >
      <h1 style="color:white;"><center>Fun Stuffs</center></h1></div> 
      <div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div>
    </div>

    <div class="col-5 offset-1">
      <div class="p-3" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample">
      <h1 style="color:white;"><center>Series Stuffs</center></h1>
      <div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div>
    </div> 
    </div>
    <div class="col-5">
      <div class="p-3" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample">
      <h1 style="color:white;"><center>Gaming Stuffs</center></h1>
      <div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div>
    </div> 
    </div>
    <div class="col-5 offset-1">
      <div class="p-3" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample">
      <h1 style="color:white;"><center>Flick Stuffs</center></h1>
      <div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div>
    </div> 
    </div>
  </div>
</div>

<!-- <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-title="Popover title" 
    data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button> -->

    <br>
    <hr>
        <div class="wrapper">
      
                <h2>This is an introduction</h2>
                <p>This is the photo Gallery App. Here you will see all the content related to fun ,movies,Gaming
                  which are in trend and of interest to the users.
                <p>Here you will see all contents related to as : </p>
                </p> 
        <div class="wrapper"  >
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About Us</a></li>
                <li><a href="index.php">Find Blogs</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
              </ul>   
</div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" 
    aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/206359/pexels-photo-206359.jpeg?cs=srgb&dl=pexels-pixabay-206359.jpg&fm=jpg" 
      width="250" height="500" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/cc/18/8c/cc188c604e58cffd36e1d183c7198d21.jpg" width="400" height="400" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2013/07/18/10/56/railroad-163518__480.jpg" width="400" height="400" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/id/517188688/photo/mountain-landscape.jpg?s=612x612&w=0&k=20&c=A63koPKaCyIwQWOTFBRWXj_PwCrR4cEoOw2S9Q7yVl8="  
      width="400" height="400" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
      data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" 
      data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
<br><hr>

            <div class="row">
            <div class="card" style="width: 15rem;">
  <img src="image/p1.png" class="card-img-top" alt="This is a cartoon dancing with a moving ball">
  <div class="card-body">
    <h5 class="card-title">Sinchen</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="new.php" class="btn btn-primary">Go here</a>
  </div>
</div>
<div style="width:2rem;"></div>
<div class="card" style="width: 15rem;">
  <img src="image/p2.png" class="card-img-top" alt="This is a cartoon dancing with a moving ball">
  <div class="card-body">
    <h5 class="card-title">Tom</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="new.php" class="btn btn-primary">Go here</a>
  </div>
</div>
<div style="width:2rem;"></div>
<div class="card" style="width: 15rem;">
  <img src="image/p3.png" class="card-img-top" alt="This is a cartoon dancing with a moving ball">
  <div class="card-body">
    <h5 class="card-title">Jerry</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="new.php" class="btn btn-primary">Go here</a>
  </div>
</div>
<div style="width:2rem;"></div>
<div class="card" style="width: 15rem;">
  <img src="image/p4.png" class="card-img-top" alt="This is a cartoon dancing with a moving ball">
  <div class="card-body">
    <h5 class="card-title">Motu</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="new.php" class="btn btn-primary">Go here</a>
  </div>
</div>
<div style="width:2rem;"></div>
<div class="card" style="width: 15rem;">
  <img src="image/p5.png" class="card-img-top" alt="This is a cartoon dancing with a moving ball">
  <div class="card-body">
    <h5 class="card-title">Pokeman</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="new.php" class="btn btn-primary">Go here</a>
  </div>
</div>
            </div>

            <!-- Card Navigation -->
          <br>
          <br><hr>
          <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="https://github.com/PRIYANKA-Nigam">Github</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://twitter.com/PriyankaN2504">Twitter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://linkedin.com/in/priyanka-nigam-083247172">LinkedIn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="https://facebook.com/priyanka.nigam.9256">Facebook</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://hackerrank.com/ec_1634831038">Hackerrank</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://stackoverflow.com/users/14454060/priyanka-nigam">Stack Overflow</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Our Collaboration </h5>
    <p class="card-text">
      <p><strong>Thank you for visiting our site. </strong></p>
      Please do also follow us on the above sites.Your 1 follow 
      can help us reach to greater heights.We have good number of contents in the above sites with a awesome personal 
      portfolio.All the documents are earned with efforts and none are forged or bought from other sources.
      Kindly, check our page.It will boost our morale to give more exciting content for you and will also be 
      helpful for you to make understanding easier for you with demonstrative live examples.
    </p>
    <a href="#" class="btn btn-primary">Go Top</a>
  </div>
</div>
</body>
</html>


