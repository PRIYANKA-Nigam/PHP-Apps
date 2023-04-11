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
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style4.css');    ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style5.css');    ?>">
</head>
<body>
<div class="container-fluid">
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
              <span style="color:white;margin-left:28px">
			  Basic properties</span>
                  </div></li>
				  <hr class="sidebar-divider">
		  <li>
            <div id="popular" class="mainmenu" >
              <span style="color:white;margin-left:28px">
			  pom.xml</span>
                  </div></li>
				  <hr class="sidebar-divider">
		  <li>
            <div id="popular" class="mainmenu" >
              <span style="color:white;margin-left:28px">
			  application.properties/application.yml</span>
                  </div></li>
				  <hr class="sidebar-divider">
		  <li>
		  <div id="popular" class="mainmenu">
	<a href="#">@SpringBootApplication <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#">@SpringBootApplication</a>
		<li><a href="#">@EnableAutoCOnfiguration</a>
		<li><a href="#">@ComponentScan</a>
		<li><a href="#">@Configuration</a>
		</li></ul>
	</div>
</div>
		  </li>
		  <hr class="sidebar-divider">
		  <li>
            <div id="popular" class="mainmenu" >
              <span style="color:white;margin-left:28px">
			  Spring DevTools</span>
                  </div></li>
				  <hr class="sidebar-divider">
		
	  <li>
<div id="popular" class="mainmenu">
	<a href="#">Stereotype Annotations <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#">@controller</a>
		<li><a href="#">@service</a>
		<li><a href="#">@repository</a>
		<li><a href="#">@Component</a>
		<li><a href="#">@ResponseBody</a>
		</li></ul>
	</div>
</div> </li>
<hr class="sidebar-divider">
<li>
<div id="popular" class="mainmenu" >
              <span style="color:white;margin-left:28px">
        @value annotation</span>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="popular" class="mainmenu" >
              <span style="color:white;margin-left:28px">
         Actuator</span>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="popular" class="mainmenu" >
              <span style="color:white;margin-left:28px">
        Spring MVC</span>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="popular" class="mainmenu" >
              <span style="color:white;margin-left:28px">
         Rest Template</span>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="popular" class="mainmenu" >
              <span style="color:white;margin-left:28px">
        UUID</span>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="recent" class="mainmenu">
	<a href="#">Spring IOC Container <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#">Bean</a>
		<li><a href="#">Container</a>
		<li><a href="#">AOP</a>
		</li></ul>
	</div>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="category" class="mainmenu">
	<a href="#">Common Spring Exception  <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#">NoSuchBeanDefinition</a>
		<li><a href="#">NoUniqueBeanDefinition</a>
		<li><a href="#">BeanInstantiation Exception</a>
		<li><a href="#">Application Context Exception</a>
		</li></ul>
	</div>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="category" class="mainmenu">
	<a href="#">Comparison & Contrast  <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#"> Path param Vs Request param</a>
		<li><a href="#"> Easy Loading Vs Lazy Loading</a>
		<li><a href="#"> Easy initialisation Vs Lazy initialisation</a>
		<li><a href="#">JPA repository Vs Crud repository</a>
		<li><a href="#">  Spring MVC Vs Spring Boot</a>
		<li><a href="#"> Spring MVC Vs Spring Webflux</a>
		<li><a href="#">  Spring 3 Vs Spring 4</a>
		<li><a href="#"> Spring-boot-starter-web Vs Spring-boot-starter-tomcat</a>
		</li></ul>
	</div>
</div></li>
<hr class="sidebar-divider">
<li>
<div id="category" class="mainmenu">
	<a href="#">Starter Dependencies <i class="fas fa-angle-right dropdown"></i></a>
	<div class="submenu">
		<ul>
		<li><a href="#">Spring-boot-starter-tomcat</a>
		<li><a href="#">spring-boot-starter-jetty</a>
		<li><a href="#">spring-boot-starter-undertow</a>
		<li><a href="#">Spring-boot-starter-web</a>
		<li><a href="#">spring-boot-starter-actuator</a>
		<li><a href="#">spring-boot-starter-data-jpa</a>
		<li><a href="#">spring-boot-starter-jdbc</a>
		<li><a href="#">spring-boot-starter-ldap</a>
		<li><a href="#">spring-boot-starter-test</a>
		<li><a href="#">spring-boot-starter-thymeleaf</a>
		<li><a href="#">spring-boot-starter-data-cassandra</a>
		<li><a href="#">spring-boot-starter-data-mongodb</a>
		<li><a href="#">spring-boot-starter-data-redis</a>
		<li><a href="#">spring-boot-starter-webflux</a>
		<li><a href="#">spring-boot-starter-log4j2</a>
		</li></ul>
	</div>
</div></li>
<hr class="sidebar-divider">
		  <div id="popular" class="mainmenu" >
              <span style="color:white;margin-left:28px">
			  @bean Vs @component</span>
</div></li>


</ul>
	  </div></div>

</div>
	</nav></div></div>
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