<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Java Blogs</title>
   
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
  <style>
   .container{
    background: rgba(255, 255  , 255, 0.1);
    backdrop-filter: blur(15px);
    width: 180px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    /* overflow-y: auto; */
    transition: 0.6s ease;
    transition-property: left;
}
.container #sidebarMenu{
    width: 100%;
    margin-top: 20px;
}
      label{
    text-align: center;
    position: fixed;
    top: 0;
    left: 35%;
    font-size: 50px;
    /* top:10%; */
    color: white;
}
section{
    height: 100vh;
    width: 170vh;
    display: inline-flexbox;
    align-items: left;
    margin-top: 35px;
    margin-left: 250px;
    padding-left: 200px;
    padding-top: 50px;
    justify-content: center;
    text-transform: uppercase;
}
#j1{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#j2{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#j3{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#j4{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#j5{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}

   </style> 
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
<div class="container">
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
             <a class="sub-btn" href="#j1"><i class="fas fa-info-circle"></i>What is Java.<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#j2" class="sub-item">Datatypes</a>
                <a href="#j3" class="sub-item">Reserved Keywords</a>
                <a href="#j4" class="sub-item">Exceptions/Errors</a>
                <a href="#j5" class="sub-item">Generics</a>
                <a href="#j6" class="sub-item">Abstract classes vs Interface</a>
                <a href="#j7" class="sub-item">Super/this keyword</a>
                <a href="#j8" class="sub-item">Static/non-static members</a>
                <a href="#j9" class="sub-item">Superclass members</a>
                <a href="#j10" class="sub-item">JDK/JRE/JVM/JIT</a>
            </div>
            </div>
          </li>
          <hr class="sidebar-divider">
  <div style="margin:auto">
            <div class="dropdown open">
                <p class="border-none outline-none "  id="triggerId"
                data-aria-expanded="true">
                <i class="fas fa-info-circle"></i>
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#j11">Collections Framework</a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#j12">Concurrent Collection</a>
                <a class="dropdown-item" href="#j13">Traditional Collection</a>
            </div> 
        </div></div>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j14">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              VM Arguments
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j15">
              <span data-feather="file" class="align-text-bottom"></span>
           Serialisation
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j16">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Java Applet Vs Applications
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j17">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Multithreading 
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j18">
              <span data-feather="file" class="align-text-bottom"></span>
           Executor Framework
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j19">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Design pattern in java
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j20">
              <span data-feather="file" class="align-text-bottom"></span>
           Compiler Vs Interpreter
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j21">
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
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#j22">Access/Non-access modifier</a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#j23">visibilty scope</a>
                <a class="dropdown-item" href="#j24">Overriding rules</a>
            </div> 
        </div></div>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j25">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Enum
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j26">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Features of Java 8 to Java 19
            </a>
          </li>
          <li class="nav-item">
          <hr class="sidebar-divider">
          <div class="item">
             <a class="sub-btn" href="#j27"><i class="fas fa-info-circle"></i>Java 8<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#j28" class="sub-item"> Functional Interface</a>
                <a href="#j29" class="sub-item">Lambda Expression</a>
                <a href="#j30" class="sub-item"> Stream APIs</a>
                <a href="#j31" class="sub-item">Method Reference</a>
                <a href="#j32" class="sub-item"> Map-Reduce APIs</a>
                <a href="#j33" class="sub-item"> Default Methods in interface</a>
                <a href="#j34" class="sub-item"> Switch to Java 8</a>
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
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#j35">Different Java Edition</a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#j36">Java SE Varsion History</a>
                <a class="dropdown-item" href="#j37"> Java SE Vs Java EE </a>
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
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#j38">   Class loader in Java</a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#j39">Class loader working and types</a>
                <a class="dropdown-item" href="#j40">  Static/Dynamic Loading </a>
            </div> 
        </div></div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#j41">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Stackoverflow error in java
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j42">
              <span data-feather="file" class="align-text-bottom"></span>
            Static block initialiser
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j43">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Shallow copy/Deep copy 
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j44">
              <span data-feather="file" class="align-text-bottom"></span>
            Immutable Objects
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j45">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Garbage Collector 
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j46">
              <span data-feather="file" class="align-text-bottom"></span>
           JDBC/JPA/JSP
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j47">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Java Card
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j48">
              <span data-feather="file" class="align-text-bottom"></span>
           Java applications in realtime
            </a>
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#j49">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Frameworks
            </a>
          </li>
        </ul>

       
      </div>
      </div>
    </nav>
    </div></div>
    <div style="margin-top:5px;padding-top:10px;">
    <label style="background:black"><b>Java Content</b></label><br><hr>
<div class="content" >
    <section id="j1" >
<h1>i clicked for s1.u also tap for it.</h1>
What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 
1500s, when an unknown printer took a galley of type and scrambled it to 
make a type specimen book. 
It has survived not only five centuries, but also the leap into electronic 
typesetting, remaining essentially unchanged. It was popularised in the 
1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker 
including versions of Lorem Ipsum.

"But I must explain to you how all this mistaken idea of denouncing 
pleasure and praising pain was born and I will give you a complete 
account of the system, and expound the actual teachings of the great 
explorer of the truth, the master-builder of human happiness. No one 
rejects, dislikes, or avoids pleasure itself, because it is pleasure, 
but because those who do not know how to pursue pleasure rationally 
encounter consequences that are extremely painful. Nor again is there 
anyone who loves or pursues or desires to obtain pain of itself, 
because it is pain, but because occasionally circumstances occur in 
which toil and pain can procure him some great pleasure. To take a 
trivial example, which of us ever undertakes laborious physical exercise, 
except to obtain some advantage from it? But who has any right to find 
fault with a man who chooses to enjoy a pleasure that has no annoying 
consequences, or one who avoids a pain that produces no resultant pleasure?"
    </section>
    <section id="j2">
<h1>i clicked for s2</h1>
It is a long established fact that a reader will be distracted by the 
readable content of a page when looking at its layout. The point of 
using Lorem Ipsum is that it has a more-or-less normal distribution of 
letters, as opposed to using 'Content here, content here', making it 
look like readable English. Many desktop publishing packages and web 
page editors now use Lorem Ipsum as their default model text, and a 
search for 'lorem ipsum' will uncover many web sites still in their 
infancy. Various versions have evolved over the years, sometimes by 
accident, sometimes on purpose (injected humour and the like).
    </section>
    <section id="j3">
<h1>i clicked for s3</h1>
Where can I get some?
There are many variations of passages of Lorem Ipsum available, 
but the majority have suffered alteration in some form, by injected 
humour, or randomised words which don't look even slightly believable. 
If you are going to use a passage of Lorem Ipsum, you need to be sure 
there isn't anything embarrassing hidden in the middle of text. All 
the Lorem Ipsum generators on the Internet tend to repeat predefined 
chunks as necessary, making this the first true generator on the Internet. 
It uses a dictionary of over 200 Latin words, combined with a handful of 
model sentence structures, to generate Lorem Ipsum which looks reasonable. 
The generated Lorem Ipsum is therefore always free from repetition, 
injected humour, or non-characteristic words etc.
    </section>
    <section id="j4">
<h1>i clicked for s4</h1>
The standard Lorem Ipsum passage, used since the 1500s
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
culpa qui officia deserunt mollit anim id est laborum."
    </section>
    <section id="j5">
<h1>i clicked for s5</h1>
"At vero eos et accusamus et iusto odio dignissimos ducimus qui 
blanditiis praesentium voluptatum deleniti atque corrupti quos 
dolores et quas molestias excepturi sint occaecati cupiditate 
non provident, similique sunt in culpa qui officia deserunt 
mollitia animi, id est laborum et dolorum fuga. Et harum quidem 
rerum facilis est et expedita distinctio. Nam libero tempore, 
cum soluta nobis est eligendi optio cumque nihil impedit quo 
minus id quod maxime placeat facere possimus, omnis voluptas 
assumenda est, omnis dolor repellendus. Temporibus autem quibusdam 
et aut officiis debitis aut rerum necessitatibus saepe eveniet ut 
et voluptates repudiandae sint et molestiae non recusandae. Itaque 
earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
voluptatibus maiores alias consequatur aut perferendis doloribus 
asperiores repellat."
    </section>
</div> </div>
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