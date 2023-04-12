<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Maven Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
 <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/5.3/examples/dashboard/dashboard.css">
    

    

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
     
      .container{
    background: rgba(255, 255  , 255, 0.1);
    backdrop-filter: blur(15px);
    width: 300px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto;
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
    margin-left: 350px;
    padding-left: 270px;
    padding-top: 50px;
    justify-content: center;
    text-transform: uppercase;
}
#m1{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m5{
    background: linear-gradient(-50deg,lightblue 40%,yellow 40%);
}
#m3{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#m4{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#m6{
    background: linear-gradient(-50deg,crimson 40%,yellow 40%);
}

    </style>

    
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>



<div class="container">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
          Maven
            </a>
          </li>
       
          <hr class="sidebar-divider">
             <li class="nav-item">
            <a class="nav-link" href="#m1">
              <span data-feather="file" class="align-text-bottom"></span>
          What is Maven.
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m1">
              <span data-feather="file" class="align-text-bottom"></span>
         Maven Vs Gradle
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="#m3">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
         Maven Lifecycle Methods
            </a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="#m3">
              <span data-feather="file" class="align-text-bottom"></span>
            mvn build
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m4">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
         mvn clean
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m5">
              <span data-feather="file" class="align-text-bottom"></span>
           mvn install
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m6">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           mvn deploy
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m7">
              <span data-feather="file" class="align-text-bottom"></span>
           mvn test
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m8">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
          mvn package
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m9">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
          mvn verify
            </a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="#m11">
              <span data-feather="file" class="align-text-bottom"></span>
         Maven Commands
            </a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="#m11">
              <span data-feather="file" class="align-text-bottom"></span>
          clean install -x
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m12">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
          mvn clean -x
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m13">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           mvn clean install
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m14">
              <span data-feather="file" class="align-text-bottom"></span>
         Maven Profiles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m15">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
         Global Profiles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m16">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
        Local Profiles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m17">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
          User defined Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m18">
              <span data-feather="file" class="align-text-bottom"></span>
          Ways to run a spring boot application.
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  </div></div>
<label><b>Maven</b></label><br><hr>
<div class="content" >
    <section id="m1" >
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
    <section id="m3">
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
    <section id="m4">
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
    <section id="m5">
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
    <section id="m6">
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
   </div>
</body></html>