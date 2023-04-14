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
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css');    ?>">
<style>
label{
    text-align: center;
    position: fixed;
    top: 0;
    left: 35%;
    /* top:10%; */
    color: purple;
}
section{
    height: 100vh;
    width: 200vh;
    display: flex;
    align-items: left;
    margin-top: 25px;
    margin-left: 320px;
    padding-left: 200px;
    padding-top: 20px;
    justify-content: center;
    text-transform: uppercase;
}
#s1{
    background: linear-gradient(-45deg,white 30%,yellow 40%);
}
#s2{
    background: linear-gradient(-45deg,lightblue 30%,yellow 0%);
}
#s3{
    background: linear-gradient(-45deg,lightgreen 30%,yellow 0%);
}
#s4{
    background: linear-gradient(-45deg,purple 30%,yellow 0%);
}
#s5{
    background: linear-gradient(-45deg,crimson 30%,yellow 0%);
}

</style>
</head>
<body >
   <div class="side-bar" >
    <div class="menu">
    <div> <span data-feather="home" class="align-text-bottom" style="margin-left:50px;font-size:30px">
     Kafka</span><hr></div>
        <div class="item"> <a href="#s1"><i class="fas fa-desktop"></i>What is Kafka?</a> </div>
        <div class="item">
             <a class="sub-btn" href="#s2"><i class="fas fa-table"></i>Kafka<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#s2" class="sub-item"><i class="far fa-star"></i>Producer</a>
                <a href="#s3" class="sub-item"><i class="far fa-star"></i>Consumer</a>
                <a href="#s4" class="sub-item"><i class="far fa-star"></i>Kafka Topics</a>
                <a href="#s4" class="sub-item"><i class="far fa-star"></i>Broker</a>
            </div>
            </div>
            <div class="item">
             <a class="sub-btn" href="#s2"><i class="fas fa-table"></i>Kafka APIs<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#s2" class="sub-item"><i class="far fa-star"></i>Producer APIs</a>
                <a href="#s3" class="sub-item"><i class="far fa-star"></i>Consumer APIs</a>
                <a href="#s4" class="sub-item"><i class="far fa-star"></i>Stream APIs</a>
                <a href="#s4" class="sub-item"><i class="far fa-star"></i>Connector APIs</a>
            </div>
            </div>
        <div class="item"> <a href="#"><i class="fas fa-desktop"></i>Kafka Connect</a> </div>
        <div class="item"> <a href="#"><i class="fas fa-info-circle"></i>Kafka Vs Rabbit MQ</a> </div>
        <div class="item"> <a href="#"><i class="fas fa-info-circle"></i>Kafka Vs Kafka Streams</a> </div>
        <div class="item"> <a href="#"><i class="fas fa-info-circle"></i>Kafka Vs Rest APIs</a> </div>
        <div class="item"> <a href="#"><i class="fas fa-th"></i>Requirement of message broker in microservices</a> </div>
        <!-- <div class="item" > <a class="sub-btn" href="#"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
                <a href="#" class="sub-item">Sub 1</a>
                <a href="#" class="sub-item">Sub 2</a>
                <a href="#" class="sub-item">Sub 3</a>
    </div>  </div>
        <div class="item"> <a href="#"><i class="fas fa-info-circle"></i>About</a> </div> -->
    </div>
   </div>
   <script type="text/javascript">
$(document).ready(function(){
$('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
});

});

</script>
<div >
<label><b>In-page navigation for sidebar elements</b></label><br><hr>
<div class="content" >
    <section id="s1" >
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
    <section id="s2">
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
    <section id="s3">
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
    <section id="s4">
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
    <section id="s5">
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
</div>
</body>
</html>