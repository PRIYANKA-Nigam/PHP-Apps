<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style2.css');    ?>">
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
/* #d1{
    background: linear-gradient(-5deg,white 90%,yellow 0%);
}
#d2{
    background: linear-gradient(-5deg,lightblue 90%,yellow 0%);
}
#d3{
    background: linear-gradient(-5deg,lightgreen 90%,yellow 0%);
}
#d4{
    background: linear-gradient(-5deg,purple 90%,yellow 0%);
}
#d5{
    background: linear-gradient(-5deg,crimson 90%,yellow 0%);
} */

</style>
</head>
<body >
    <!-- <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div> -->
   <div class="side-bar" >
    <!-- <div class="close-btn">
        <i class="fas fa-times"></i>
    </div> -->
    <div class="menu">
        <div> <span data-feather="home" class="align-text-bottom" style="color:white;margin-left:50px;font-size:30px">
        DevOps</span><hr></div>
        <div class="item"> <a href="#d1"><i class="fas fa-desktop"></i>Cloud Computing</a> </div>
        <div class="item"> <a href="#d2"><i class="fas fa-desktop"></i>Virtualisation</a> </div>
        <div class="item">
             <a class="sub-btn" href="#d3"><i class="fas fa-table"></i>Virtualisation types<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#d3" class="sub-item"><i class="far fa-star"></i>Application Virtualisation</a>
                <a href="#d4" class="sub-item"><i class="far fa-star"></i>Network Virtualisation</a>
                <a href="#d5" class="sub-item"><i class="far fa-star"></i>Desktop Virtualisation</a>
                <a href="#d6" class="sub-item"><i class="far fa-star"></i>Storage Virtualisation</a>
                <a href="#d7" class="sub-item"><i class="far fa-star"></i>Server Virtualisation</a>
                <a href="#d8" class="sub-item"><i class="far fa-star"></i>Data Virtualisation</a>
            </div>
            </div>
        <div class="item"> <a href="#d9"><i class="fas fa-th"></i>Virtual Machine</a> </div>
    <div class="item"> <a href="#d10"><i class="fas fa-th"></i>Container</a> </div>
    <div class="item"> <a href="#d11"><i class="fas fa-th"></i>Container Runtime</a> </div>
    <div class="item"> <a href="#d12"><i class="fas fa-th"></i>Virtual Machine Vs Container</a> </div>
    <div class="item" > <a class="sub-btn" href="#d13"><i class="fas fa-cogs"></i>Kubernetes<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
                <a href="#d13" class="sub-item"><i class="far fa-star"></i>Kubelet</a>
                <a href="#d14" class="sub-item"><i class="far fa-star"></i>Kube proxy</a>
                <a href="#d15" class="sub-item"><i class="far fa-star"></i>Kubectl</a>
                <a href="#d16" class="sub-item"><i class="far fa-star"></i>Minikube</a>
    </div>  </div>
        <div class="item" > <a class="sub-btn" href="#d17"><i class="fas fa-cogs"></i>Docker<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
                <a href="#d17" class="sub-item"><i class="far fa-star"></i>Docker image</a>
                <a href="#d18" class="sub-item"><i class="far fa-star"></i>Dangling images</a>
                <a href="#d19" class="sub-item"><i class="far fa-star"></i>Docker Hub</a>
                <a href="#d20" class="sub-item"><i class="far fa-star"></i>Docker Swarm</a>
                <a href="#d21" class="sub-item"><i class="far fa-star"></i>Docker Compose</a>
                <a href="#d22" class="sub-item"><i class="far fa-star"></i>Docker Registry</a>
    </div>  </div>
    <div class="item"> <a href="#d23"><i class="fas fa-info-circle"></i>Is Docker hub a registry or repository?</a> </div>
    <div class="item"> <a href="#d24"><i class="fas fa-info-circle"></i>Kubernetes Vs Docker compose</a> </div>
    <div class="item"> <a href="#d25"><i class="fas fa-info-circle"></i>Kubernetes Vs Docker swarm</a> </div>
    <div class="item" > <a class="sub-btn" href="#d26"><i class="fas fa-cogs"></i>Docker-Kubernetes twinning<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
                <a href="#d26" class="sub-item"><i class="far fa-star"></i>Docker without Kubernetes using Docker compose</a>
                <a href="#d27" class="sub-item"><i class="far fa-star"></i>Kubernetes without Docker using other container runtimes</a>
        </div></div>
    <div class="item"> <a href="#d28"><i class="fas fa-info-circle"></i>Container without Docker</a> </div>
    </div>
   </div>
   <!-- <section class="main">
    <h1>Sidebar Menu with <br>Sub-Menus</h1> -->
    <label><b>DevOps KT</b></label><br><hr>
<div class="content" >
    <section id="d1" >
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
    <section id="d2">
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
    <section id="d3">
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
    <section id="d4">
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
    <section id="d5">
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
   <!-- </section> -->
   <script type="text/javascript">
$(document).ready(function(){
$('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
});
//jquery to expand & collapse the side-bar
$('.menu-btn').click(function(){
    $('.side-bar').addClass('active');
    $('.menu-btn').css("visibility","hidden");
});

// $('.close-btn').click(function(){
//     $('.side-bar').toggleClass('active');
//     // $('.menu-btn').css("visibility","visible");
// });

$(".close-btn").on('click', function() {
   $(".side-bar").toggleClass('active');
});
});


</script>
</body>
</html>