<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JDBC Blogs</title>
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
    <style>
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
    width: 200vh;
    display: inline-flexbox;
    align-items: left;
    margin-top: 35px;
    margin-left: 350px;
    padding-left: 350px;
    padding-top: 130px;
    justify-content: center;
    text-transform: uppercase;
}
#j1{
    background: linear-gradient(-5deg,white 60%,yellow 0%);
}
#j2{
    background: linear-gradient(-5deg,lightblue 60%,yellow 0%);
}
#j3{
    background: linear-gradient(-5deg,lightgreen 60%,yellow 0%);
}
#j4{
    background: linear-gradient(-5deg,purple 60%,yellow 0%);
}
#j5{
    background: linear-gradient(-5deg,crimson 60%,yellow 0%);
}

</style>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  

<div class="container-fluid">
    <div class="row">
        
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
<div class="side-bar" >
        <div class="d-flex flex-column justify-content-between col-auto bg-dark min-vh-100">
            <div class="mt-4">
                <a class="text-white d-none d-sm-inline text-decoration-none d-flex align-items-center ms-4" role="button">
                    <span class="fs-5">JDBC</span>
                </a>
                <hr class="text-white">
                <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                    
                    <li class="nav-item">
                        <a href="#j1" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-house"></i>
                            <span class="ms-2 d-none d-sm-inline">What is jdbc.</span>
                        </a>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">JDBC Statements</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#j2" class="nav-link active text-white" aria-current="page">Prepared Statement</a>
                        </li>
                        <li class="nav-item">
                        <a href="#j3" class="nav-link text-white">Statement</a>
                        </li>
                        <li class="nav-item">
                        <a href="#j4" class="nav-link text-white">Callable Statement</a>
                        </li>
                      </ul>
                    </li>
                   
                    <li class="nav-item">
                    <a href="#j5" class="nav-link text-white" aria-current="page" >
                        <i class="fa fa-users"></i>
                        <span class="ms-2 d-none d-sm-inline">JDBC Drivers</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="#j6" class="nav-link text-white" aria-current="page" >
                        <i class="fa fa-users"></i>
                        <span class="ms-2 d-none d-sm-inline">ResultSet</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="#j7" class="nav-link" >Class.forName() Vs RegisterDriver class</a>
                    </li>
                    <li class="nav-item">
                    <a href="#j8" class="nav-link" >JDBC Architecture</a>
                    </li>
                    <li class="nav-item">
                    <a href="#j9" class="nav-link" >Types of files we can acsess using JDBC. </a>
                    </li>
                    <li class="nav-item diabled">
                    <a href="#" class="nav-link" aria-current="page">Disabled</a>
                    </li>
                </ul>
            </div>
            
        </div>
</div>
    </nav>
    </div>
</div>
<label><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br><hr>
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
</div>
</body>
</html>