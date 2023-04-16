<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style4.css');    ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style5.css');    ?>">
<style>
       .container{
    background: rgba(255, 255  , 255, 0.1);
    backdrop-filter: blur(15px);
    width: 400px;
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
    margin-left: 280px;
    padding-left: 210px;
    padding-top: 50px;
    justify-content: center;
    text-transform: uppercase;
}
#s1{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#s2{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#s3{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#s4{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#s5{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}


  </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
<div class="container">
  <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
<div class="side-bar" >
<div class="menu">
      <div class="position-sticky pt-3 sidebar-sticky">
      <div id="wrapper">
        <ul class="nav flex-column navbar-nav bg-gradient-primary  sidebar-dark accordion" 
        id="accordionSidebar" >
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                </div>
              <span data-feather="home" class="align-text-bottom" style="color:white">
          Spring Boot</span>
            </a>
          </li>
		  <li>
            <div id="popular" class="mainmenu" >
			<a href="#s1" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
			  Basic properties</span></a>
                  </div></li>
				  <!-- <hr class="sidebar-divider"> -->
		  <li>
            <div id="popular" class="mainmenu" >
			<a href="#s2" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
			  pom.xml</span></a>
                  </div></li>
				  <!-- <hr class="sidebar-divider"> -->
		  <li>
            <div id="popular" class="mainmenu" >
			<a href="#s3" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
			  application.properties/application.yml</span></a>
                  </div></li>
				  <hr class="sidebar-divider">
		  <li>
		  <div id="popular" class="mainmenu">
	<a href="#s4">@SpringBootApplication <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#s4">@SpringBootApplication</a>
		<li><a href="#s5">@EnableAutoCOnfiguration</a>
		<li><a href="#s6">@ComponentScan</a>
		<li><a href="#s7">@Configuration</a>
		</li></ul>
	</div>
</div>
		  </li>
		  <!-- <hr class="sidebar-divider"> -->
		  <li>
            <div id="popular" class="mainmenu" >
			<a href="#s8" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
			  Spring DevTools</span></a>
                  </div></li>
				  <hr class="sidebar-divider">
		
	  <li>
<div id="popular" class="mainmenu">
	<a href="#s9">Stereotype Annotations <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#s9">@controller</a>
		<li><a href="#s10">@service</a>
		<li><a href="#s11">@repository</a>
		<li><a href="#s12">@Component</a>
		<li><a href="#s13">@ResponseBody</a>
		</li></ul>
	</div>
</div> </li>
<!-- <hr class="sidebar-divider"> -->
<li>
<div id="popular" class="mainmenu" >
<a href="#s14" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
        @value annotation</span></a>
</div></li>
<!-- <hr class="sidebar-divider"> -->
<li>
<div id="popular" class="mainmenu" >
<a href="#s15" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
         Actuator</span></a>
</div></li>
<!-- <hr class="sidebar-divider"> -->
<li>
<div id="popular" class="mainmenu" >
<a href="#s16" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
        Spring MVC</span></a>
</div></li>
<!-- <hr class="sidebar-divider"> -->
<li>
<div id="popular" class="mainmenu" >
<a href="#s17" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
         Rest Template</span></a>
</div></li>
<!-- <hr class="sidebar-divider"> -->
<li>
<div id="popular" class="mainmenu" >
<a href="#s18" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
        UUID</span></a>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="recent" class="mainmenu">
	<a href="#s19">Spring IOC Container <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#s20">Bean</a>
		<li><a href="#s21">Container</a>
		<li><a href="#s22">AOP</a>
		</li></ul>
	</div>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="category" class="mainmenu">
	<a href="#s23">Common Spring Exception  <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#s23">NoSuchBeanDefinition</a>
		<li><a href="#s24">NoUniqueBeanDefinition</a>
		<li><a href="#s25">BeanInstantiation Exception</a>
		<li><a href="#s26">Application Context Exception</a>
		</li></ul>
	</div>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="category" class="mainmenu">
	<a href="#s27">Comparison & Contrast  <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#s27"> Path param Vs Request param</a>
		<li><a href="#s28"> Easy Loading Vs Lazy Loading</a>
		<li><a href="#s29"> Easy initialisation Vs Lazy initialisation</a>
		<li><a href="#s30">JPA repository Vs Crud repository</a>
		<li><a href="#s31">  Spring MVC Vs Spring Boot</a>
		<li><a href="#s32"> Spring MVC Vs Spring Webflux</a>
		<li><a href="#s33">  Spring 3 Vs Spring 4</a>
		<li><a href="#s34"> Spring-boot-starter-web Vs Spring-boot-starter-tomcat</a>
		</li></ul>
	</div>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="category" class="mainmenu">
	<a href="#s35">Starter Dependencies <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#s35">Spring-boot-starter-tomcat</a>
		<li><a href="#s36">spring-boot-starter-jetty</a>
		<li><a href="#s37">spring-boot-starter-undertow</a>
		<li><a href="#s38">Spring-boot-starter-web</a>
		<li><a href="#s39">spring-boot-starter-actuator</a>
		<li><a href="#s40">spring-boot-starter-data-jpa</a>
		<li><a href="#s41">spring-boot-starter-jdbc</a>
		<li><a href="#s42">spring-boot-starter-ldap</a>
		<li><a href="#s43">spring-boot-starter-test</a>
		<li><a href="#s44">spring-boot-starter-thymeleaf</a>
		<li><a href="#s45">spring-boot-starter-data-cassandra</a>
		<li><a href="#s46">spring-boot-starter-data-mongodb</a>
		<li><a href="#s47">spring-boot-starter-data-redis</a>
		<li><a href="#s48">spring-boot-starter-webflux</a>
		<li><a href="#s49">spring-boot-starter-log4j2</a>
		</li></ul>
	</div>
</div></li>
<!-- <hr class="sidebar-divider"> -->
		  <div id="popular" class="mainmenu" >
		  <a href="#s50" class="nav-link text-white" aria-current="page">
              <span style="color:white;margin-left:28px">
			  @bean Vs @component</span></a>
</div></li>


</ul>
	  </div></div>

</div>
	</nav></div></div>
	<label><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br>
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
<script type="text/javascript">
$(document).ready(function() {
	$(".mainmenu").click(function() {
		if ($(this).children("div.submenu").css("display") == "none") {
			$(this).css('background-image', 'url(m.png)');
			$(this).children("div.submenu").show();
		} else {
			$(this).css('background-image', 'url(p.png)');
			$(this).children("div.submenu").hide();
		}
	});
});
</script>
</body>
</html>