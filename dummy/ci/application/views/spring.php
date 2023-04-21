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
    height: auto;
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
<h1>Spring Boot Basic properties.</h1>
<b>Spring Boot - </b> Spring Boot helps developers create applications that just run. 
Specifically, it lets you create standalone applications that run on their own, 
without relying on an external web server, by embedding a web server such as 
Tomcat or Netty into your app during the initialization process.<br>

<b>Advantages of Spring Boot</b><br>
Spring Boot works well with several servlet containers.<br>
Bootstrapping saves memory space.<br>
Decreased boilerplate code.<br>
No XML configuration required.<br>
WAR files are not required.<br>
POM dependency management.<br>
A large community of helpful users.<br>



<b><i>Node. js is single-threaded. Also, you don't have to worry about 
	the problems associated with managing multiple threads — whereas, 
	in the Spring Boot world, Java web applications are used to running 
	everything on multiple threads.</i>
</b>
    </section>
    <section id="s2">
<h1>pom.xml</h1><br>
A Project Object Model or POM is the fundamental unit of work in Maven. 
It is an XML file that contains information about the project and 
configuration details used by Maven to build the project.<br>
The pom. xml file contains information of project and configuration 
information for the maven to build the project such as dependencies, 
build directory, source directory, test source directory, plugin, 
goals etc. Maven reads the pom. xml file, then executes the goal.<br>
<b>dependency -</b>The pom. xml describes the project's dependencies 
and tells you how to build it. (Dependencies are third-party software 
required by the project. Some common examples are JUnit and JDBC.<br>
<i>The POM file should be in the project’s root directory.Maven reads the pom.xml file.
Downloads dependencies into local repository.
Execute life cycles, build phases and goals.
Execute plugins.</i>

    </section>
    <section id="s3">
<h1> application.properties/application.yml</h1><br>
<b>application.properties -></b><br>
application.properties’ or ‘application.yml’ files  reduces your development 
effort by minimizing the amount of XMLs that you were writing in a standard 
Spring project. Under this file , we accommodate the common properties of our 
project in the form of key-value pairs in these files. Other than the main 
application.properties file  .<br>
this file is auto detected in a Spring Boot Application. It is placed inside 
“src/main/resources” directory. <br>

Pre-defined keys<br>
Spring framework provides several common default properties to specify inside 
application.properties such as to support database, email, JPA, Hibernate,  Logging, AOP etc.<br>
Programmer-defined Keys<br>

 ‘application.properties’ file is loaded using code by adding it in starter/main class. <br>
 @PropertySource(“classpath:application.properties”)<br>
 @Value - To read one key from the properties .<br>
 if  the key is not present in the 
 properties file and we try to read using @Value() then it will throw an Exception:<br>
IllegalArgumentException.<br>

create and load multiple properties files in the application
@PropertySource({ "classpath:abc.properties", "classpath:pqr.properties", "classpath:xyz.properties", "....",  })<br>

If we define the same key with different values in different properties files, which one will be selected?<br>

In this case, the last loaded properties file key will ñ
 considered.( The value of xyz.properties file key will load )<br>


Sometimes, we need to create custom properties 
files in order to fulfil the business requirements. It is placed inside 
“src/main/resources” directory. It stores various properties in key=value 
format. These properties are used to provide input to Spring container object, 
which behaves like one time input or static data. it reduces XML based 
configurations and customize them to simple properties.<br>
 <b>----------------------</b><br>
<b>Create custom property file -></b><br>
1) Create your custom file at the same location (‘src/main/resources’)<br>
2) Apply @PropertySource annotation at starter/runner class. as @PropertySource(“classpath:xyz.properties”)<br>
😊😊_________________<br>
read keys of the properties file<br>
1) @value -- To read one key from the properties file, It’s like @Value(“${key}”)<br>
2) @ConfigurableProperties<br>
__________________<br>
<b>application.properties -</b>Properties files are used to keep 'N' number 
of properties in a single file to run the application in a different environment. 
In Spring Boot, properties are kept in the application. properties file,<br>
<b>application.properties Vs application.yml</b><br>
<table border="2" style="width:400px;height:400px">
	<tr>
		<th>application.properties</th><th>application.yml</th>
	</tr>
	<tbody>
		<tr>
			<td>stores data in sequential format</td>
			<td>stores data in hierarchical format</td>
		</tr>
		<tr>
			<td>supports only key-value pairs (basically string values)</td>
			<td>supports key-value pair, as well as map, list & scalar type values.</td>
		</tr>
		<tr>
			<td>is specifically used by Java</td>
			<td>can be used by other languages (eg Java, Python, ROR, etc)</td>
		</tr>
		<tr>
			<td>When managing multiple configuration profiles, .properties requires you to create .properties file per every profile</td>
			<td>you can create a section for each specific profile inside a single .yml file</td>
		</tr>
	
	</tbody>
</table>
    </section>
    <section id="s4">
<h1>@SpringBootApplication</h1><br>
Spring Boot @SpringBootApplication annotation is used to mark a 
configuration class that declares one or more @Bean methods and 
also triggers auto-configuration and component scanning. It's 
same as declaring a class with @Configuration, @EnableAutoConfiguration 
and @ComponentScan annotations.<br>
@SpringBootApplication also provides aliases to customize the attributes 
of @EnableAutoConfiguration and @ComponentScan.<br>



    </section>
    <section id="s5">
<h1>@EnableAutoCOnfiguration</h1><br>
@EnableAutoConfiguration: enable Spring Boot’s auto-configuration mechanism.Auto-configuration
 refers to creating beans automatically by scanning the classpath.<br>
 The @EnableAutoConfiguration annotation enables Spring Boot to auto-configure 
 the application context. Therefore, it automatically creates and registers 
 beans based on both the included jar files in the classpath and the beans 
 defined by us.<br>
 <b>@EnableAutoConfiguration Vs @ComponentScan </b><br>
 @EnableAutoConfiguration annotation tells Spring Boot to "guess" how you will want 
 to configure Spring, based on the jar dependencies that you have added. For example, 
 If HSQLDB is on your classpath, and you have not manually configured any database 
 connection beans, then Spring will auto-configure an in-memory database.<br>

@ComponentScan tells Spring to look for other components, configurations, and services 
in the specified package. Spring is able to auto scan, detect and register your beans 
or components from pre-defined project package. If no package is specified current 
class package is taken as the root package.<br>

    </section>
	<section id="s6" >
<h1>@ComponentScan</h1><br>
@ComponentScan: enable @Component scan on the package where the application is located.<br>
Typically, in a Spring application, annotations like @Component, @Configuration, @Service, 
@Repository are specified on classes to mark them as Spring beans. The @ComponentScan 
annotation basically tells Spring Boot to scan the current package and its sub-packages 
in order to identify annotated classes and configure them as Spring beans.<br>
<b>@ComponentScan enables Spring to scan for things like configurations, controllers, services, and other components we define.

In particular, the @ComponentScan annotation is used with @Configuration annotation to specify the package for Spring to scan for components</b>
    </section>
    <section id="s7">
<h1>@Configuration</h1><br>
<b>@Configuration -> </b> method annotated with this returns the bean of the class that is managed by the 
IOC container . It marks that class as a bean .
@Configuration: allow to register extra beans in the context or import additional configuration classes.<br>
Designates the class as a configuration class for Java configuration. In addition to beans 
configured via component scanning, an application may desire to configure some additional 
beans via the @Bean annotation .<br>
<br>
<b>Difference between @SpringBootApplication vs @EnableAutoConfiguration annotations in Spring Boot?</b><br>

Even though both @SpringBootApplication and @EnableAutoConfiguration can be used 
to enable the auto-configuration feature of Spring Boot, there is a subtle difference 
between them. The @SpringBootApplication does much more than what @EnableAutoConfiguration 
does. <br>It's actually a combination of three annotations: @Configuration, which is used in 
Java-based configuration on Spring framework, @ComponentScan to enable component scanning 
of components you write like @Controller classes, and @EnableAutoConfgiuration itself, 
which is used to allow for auto-configuration in Spring Boot application .<br>
It's not mandatory to put @SpringBootApplication to create a Spring Boot application, 
you can still use @Configuration and @EnableAutoConfiguration individually . 
If you are using @EnableAutoConfiguration classes, then you can selectively exclude 
certain classes from auto-configuration by using exclude as shown below:<br>

@EnableAutoConfiguration(exclude=DataSourceAutoConfiguration.class)<br>

You should annotate the Main class or Bootstrap class with the @SpringBootApplication; 
this will allow you to run as a JAR with embedded web server Tomcat.<br>
<b>===============================</b><br>
    </section>
    <section id="s8">
<h1> Spring DevTools</h1><br>
We are using Spring Boot Dev Tools to avoid restarting tomcat server multiple times while testing the application. <br>
spring-boot-devtools module includes an embedded LiveReload server that is used to trigger a browser refresh when a resource is changed.<br>
<b>________________________________________</b><br>
Using spring-boot-devtools it allows automatic start, this process is also automated. Whenever files change in the classpath, 
applications using spring-boot-devtools will cause the application to restart. The benefit of this feature is the time 
required to verify the changes made is considerably reduced.<br>	
<b>________________________________________</b><br>
Spring-boot does a lot of auto-configurations, including enabling caching by default to improve performance.
One such example is caching of templates used by template engines, e.g. thymeleaf. But during development, 
it's more important to see the changes as quickly as possible.
The default behavior of caching can be disabled for thymeleaf using 
the property spring.thymeleaf.cache=false in the application.properties file. 
We do not need to do this manually, introducing this spring-boot-devtools does this automatically for us.
<b>________________________________________</b><br>
<b>It dynamically compile & run our code when we regress or add any data </b>
    </section>
    <section id="s9">
<h1>Stereotype Annotations </h1><br>
Stereotype annotations are a set of specialized annotations that 
are used to indicate the role or purpose of a particular component 
within the application. These annotations are used to mark a class, 
interface, or method as belonging to a particular category or 
stereotype, such as a service, repository, or component.<br>
<b>@Component</b> is a generic stereotype for any Spring-managed component. <br>
<b>@Service</b> annotates classes at the service layer. <br>
<b>@Repository</b> annotates classes at the persistence layer, which will act as a database repository<br>

<b>@controller :</b> <br>
The @Controller annotation marks a class as a controller component, 
which is responsible for handling incoming requests and returning 
appropriate responses. <br>
<b>@controller Vs @RestController</b><br>
@Controller is used to declare common web controllers which can 
return HTTP response but @RestController is used to create 
controllers for REST APIs which can return JSON.<br>
    </section>
    <section id="s10">
<h1>@service</h1><br>
The @Service annotation is used to mark a class as a service component, 
which typically performs business logic or other logic-related tasks 
within the application. This annotation is often used in conjunction 
with the @Component annotation to indicate that the class is both a 
service and a component.<br>
<b>Stereotype annotations are @Component , @Service , @Repository and 
	@Controller annotations. These annotations are used for auto-detection 
	of beans using @ComponentScan and component-scan . The Spring 
	stereotype @Component is parent stereotype</b>

    </section>
	<section id="s11" >
<h1>@repository</h1><br>
The @Repository annotation marks a class as a repository component, 
which is responsible for managing the persistence of data within the 
application. This annotation is often used in conjunction with the 
@Component annotation to indicate that the class is both a repository 
and a component.<br>
@Repository annotation is used to indicate that the class provides 
the mechanism for storage, retrieval, search, update and delete 
operation on objects.a repository allows you to populate data in 
memory that comes from the database in the form of the domain entities. 
Once the entities are in memory, they can be changed and then 
persisted back to the database through transactions<br>


    </section>
    <section id="s12">
<h1>@Component</h1><br>
The @Component annotation is the most general-purpose stereotype 
annotation and is used to mark any class as a component that can 
be managed by the Spring Framework.<br>
<b><i>With @Component , @Repository , @Service and @Controller annotations 
	in place and automatic component scanning enabled, Spring will 
	automatically import the beans into the container and inject them 
	to dependencies.</i></b><br>
<b>@Component Vs @Bean :</b><br>
The @Bean annotation is a method-level annotation, whereas @Component 
is a class-level annotation. The @Component annotation doesn't need to 
be used with the @Configuration annotation, whereas the @Bean 
annotation has to be used within a class annotated with @Configuration .


    </section>
    <section id="s13">
<h1>@ResponseBody</h1><br>
The @ResponseBody annotation tells a controller that the object returned 
is automatically serialized into JSON and passed back into the HttpResponse object.<br>
The @ResponseBody annotation tells a controller that the object returned is 
automatically serialized into JSON and passed back into the HttpResponse object. 
When you use the @ResponseBody annotation on a method, Spring converts the return 
value and writes it to the HTTP response automatically. Each method in the Controller 
class must be annotated with @ResponseBody.<br>
@ResponseBody annotation tells the Spring framework 
to write the method's return type to the HTTP response body.ndicates a method 
return value should be bound to the web response body<br>

    </section>
    <section id="s14">
<h1>@value annotation</h1><br>
@Value annotation is used to assign default values to variables and method 
arguments. We can read spring environment variables as well as system variables 
using @Value annotation.<br>
the @Value annotation can be used to inject values from a property file. 
To do so, first, create a properties file containing the values you want to 
inject. Then, you can use the @Value annotation to inject these values into 
your Java class attributes.<br>
@Value. The annotation @Value is used to automatically assign a value from 
multiple environment such as spring environment, system environment, property 
files, bean objects, default value etc. <br>
Eg ....<br>
@Value("Yawin") <br>
private String name; //name has yasin as default value.<br>
@Value("25") <br>	
private int age;<br>
@DateTimeFormat(pattern = "MM-dd-yyyy") 	<br>
@Value("06-21-2003") <br>	
private Date dateOfBirth;<br>

@Value("#{null}"   // default value as null <br>
private String name;<br>
@Value with Properties files -><br>
Application. Properties -<br>
source.file.name=test.txt<br>
@Value with reading a property from application.properties <br>
@Value("${source.file.name}") <br>	
private String sourceFileName;<br>
default value 80 is assigned in the variable servicePort. <br>
When no such configuration is written inside application.properties.<br>
@Value("${service.port:80}") <br>
private String servicePort;<br>

    </section>
    <section id="s15">
<h1>Actuator</h1><br>
It uses HTTP endpoints to expose operational information about 
any running application. The main benefit of using this library 
is that we get health and monitoring metrics from production-ready applications.<br>
To enable Spring Boot actuator endpoints to your Spring Boot application, 
we need to add the Spring Boot Starter actuator dependency in our build configuration file.<br>
<b><i>Actuator use to access current state of a running application in a prod environment. 
    These states r shown by different metrics like - app uptime , processor, memory.
use this to monitor & get health checks of a production-ready application. </i></b><br>
Maven users can add the below dependency in your pom.xml file.<br>
dependency><br>
   groupId>org.springframework.boot/groupId><br>
   artifactId>spring-boot-starter-actuator/artifactId><br>
/dependency><br>
Some important Spring Boot Actuator endpoints are given below. 
You can enter them in your web browser and monitor your application behavior.<br>
<table>
	<tr>
		<th>ENDPOINTS</th><th>USAGE</th>
	</tr>
	<tr>
		<td>/metrics</td><td>To view the application metrics such as memory used, memory free, threads, classes, system uptime etc.</td>
	</tr>
	<tr>
		<td>/env</td><td>To view the list of Environment variables used in the application.</td>
	</tr>
	<tr>
		<td>/beans</td><td>To view the Spring beans and its types, scopes and dependency.</td>
	</tr>
	<tr>
		<td>/health</td><td>To view the application health</td>
	</tr>
	<tr>
		<td>/info</td><td>To view the information about the Spring Boot application.</td>
	</tr>
	<tr>
		<td>/trace</td><td>To view the list of Traces of your Rest endpoints.</td>
	</tr>
</table>

    </section>
	<section id="s16" >
<h1>Spring MVC</h1><br>
MVC<br>
<b>Model -</b> It  represents  the data that is displayed  over the web url.It is the model of data that we r putting  on the web page.<br>
<b>View -</b> It is the actual  html syntax that decide how to view/display  the data.Thymeleaf,Jsp technologies r use 
to make the data visible as view.<br>
<b>Controller - </b> is the main handler that handles the web request. Controller assembles 
 the model content & merge that with the view to render the final output.<br>
<b>Avoid using business  logic in the Controller class -> </b><br>
When we hit a url , the request  passes to the controller & than controller  picks 
the data from the model class and than send it over the web.This requires extra 
process or burden  for the controller  to see what business  logic is implemented.
Hence , Write  all the logic part inside the service layer which can later be 
invoked by the controller. <br>
_____________<br>
<b>Spring MVC - </b> takes the MVC concept & combines It with the servlet.<br>
≈=========<br>
 <b>Servlet</b> is a web component that is deployed on the server to create a dynamic web page. used to create a web application.5<br>
_____________<br>
<b>Spring MVC</b> is a Java framework that is used to develop web applications. 
It is built on a Model-View-Controller (MVC) pattern and possesses all 
the basic features of a spring framework, such as Dependency Injection, <br>
Inversion of Control.<br>
<b>Spring MVC Advantage :</b><br>
Spring MVC architecture easily lets its users configure according 
to their specific needs. This is especially something that you won’t find 
in Spring boot, which mainly relies on auto-configuration.<br>
MVCs are mainly used to allow easy testing<br>
With the help of Spring MVC, you no longer need to worry about 
writing utility code since the Spring MVC architecture allows it to 
handle HTTP responses and requests much more easily.  <br>
<br>
<b>Spring boot Vs Spring MVC -</b><br>
Spring boot can actually save up a lot of time and reduce the wastage of 
efforts while creating applications. Spring MVC, on the other hand, is 
particularly beneficial when it comes to developing modular applications 
since it promotes separation of concerns. <br>

    </section>
    <section id="s17">
<h1>  Rest Template</h1><br>
Spring RestTemplate is a synchronous REST client performing HTTP requests using a simple template-style API.
Rest Template is used to create applications that consume RESTful Web 
Services. You can use the exchange() method to consume the web services 
for all HTTP methods. The code given below shows how to create Bean for 
Rest Template to auto wiring the Rest Template object. <br>
Spring RestTemplate class is part of spring-web , introduced in Spring 3. 
We can use RestTemplate to test HTTP based restful web services, it 
doesn't support HTTPS protocol. RestTemplate class provides overloaded 
methods for different HTTP methods, such as GET, POST, PUT, DELETE etc<br>
<b>If we want to connect 2 different spring application together we can 
	achieve this using RestTemplate class</b><br>
</b>
<b>Rest Template altrnative </b><br>
RestTemplate : It consumes the Rest based web services. It's a client to 
perform Http request.It is a higher-order API since it performs HTTP requests
by using an HTTP client library like the JDK HttpURLConnection, Apache HttpClient, and others.

As of Spring Framework 5, Spring introduced a new HTTP client called WebClient.it is an alternative HTTP client to RestTemplate.
WebClient is part of Spring WebFlux and is intended to replace the classic 
RestTemplate. Compared to RestTemplate , WebClient has a more functional 
feel and is fully reactive.<br>
<br><br>
While doing rest call from the program using RestTemplate class , we hard 
code the url as an argument inside the rest template method definition but 
by using service registry we can generalized this url's host name & port 
without any need to hardcode  it.<br>
    </section>
    <section id="s18">
<h1> UUID</h1><br>
UUID is 36 characters long unique number. Present in java.util  package.
randomUUID() method randomly generate the new UUID.
UUID.randomUUID() will auto generate the id.<br>
<b>A UUID – that's short for Universally Unique IDentifier, alphanumeric 
	string that can be used to identify information </b><br>
	<b>UUID Advantages</b><br>

UUID values are unique across databases, tables, and servers. 
This allows you to merge rows from multiple databases or distribute 
databases across multiple servers. UUID values don't give out 
information about your data. Therefore it's safe to use in a URL.<br>

    </section>
    <section id="s19">
<h1>Spring IOC Container</h1><br>
A Spring IoC container manages one or more beans. These beans are created 
with the configuration metadata that you supply to the container.<br>
Spring have the IoC container which carry the Bag of Bean ; creation 
maintain and deletion are the responsibilities of Spring Container. 
We can put the bean in to Spring by Wiring and Auto Wiring.<br>
<b> Wiring : </b><br>
mean we manually configure it into the XML file .<br>
<b> "Auto Wiring"</b> mean 
we put the annotations in the Java file then Spring automatically scan 
the root-context where java configuration file, make it and put into 
the bag of Spring.<br>
The IoC container is responsible to instantiate, configure and assemble 
the objects. The IoC container gets informations from the XML file and 
works accordingly. The main tasks performed by IoC container are:<br>

to instantiate the application class<br>
to configure the object<br>
to assemble the dependencies between the objects<br>
There are two types of IoC containers. They are:<br>
<br>
BeanFactory<br>
ApplicationContext<br>
    </section>
    <section id="s20">
<h1>Bean</h1><br>
<b>Bean - Java Bean is a simple java helper class, used to transfer data between 
classes or applications.We must declare Java Bean as a public class. It never acts as a main class</b><br>
<b>Java Beans</b> are classes that encapsulate many objects into a single 
object (the bean). Spring beans are classes in which Instead of 
instantiating a class (using new), you get an instance of the 
class as a bean wired in the respective class . Beans are not 
classes, but objects as instances of classes.<br><br>
<b>Spring Bean:</b> is an object, which is created, managed and destroyed 
in Spring Container. We can inject an object into the Spring 
container through the metadata(either xml or annotation), which 
is called <b>inversion of control.</b>
Bean is a POJO(Plain Old Java Object), which is managed by the spring container
We wire the beans in a way, so that we do not have to take 
care of the instantiating or evaluate any dependency on the bean.
<b>Bean Advantage :</b><br>
Any class can be called as bean in Spring if it is defined either in 
the spring xml file or defined by using annotation. Key advantage of 
making any class as spring bean is that, its entire life cycle is 
managed by Spring container and it helps us to achieve decoupling.
    </section>
	<section id="s21" >
<h1>Container</h1><br>
The Spring container is at the core of the Spring Framework. The container 
will create the objects, wire them together, configure them, and manage 
their complete life cycle from creation till destruction. The Spring 
container uses DI(Dependency Injection) to manage the components that 
make up an application.<br>
The container gets its instructions on what objects to instantiate, configure, 
and assemble by reading the configuration metadata provided. The configuration 
metadata can be represented either by XML, Java annotations, or Java code. 
The Spring IoC container makes use of Java POJO classes and configuration 
metadata to produce a fully configured and executable system or application.<br>
<b>Container Type -</b><br>
<table border="2" >
	<tr>
		<th>Spring BeanFactory Container</th><th>Spring ApplicationContext Container</th>
	</tr>
<tr>
	<td>This is the simplest container providing the basic support for DI and is defined by 
the org.springframework.beans.factory.BeanFactory interface. The BeanFactory and 
related interfaces, such as BeanFactoryAware, InitializingBean, DisposableBean, 
are still present in Spring for the purpose of backward compatibility with a 
large number of third-party frameworks that integrate with Spring.</td>
<td>
This container adds more enterprise-specific functionality such as the ability 
to resolve textual messages from a properties file and the ability to publish 
application events to interested event listeners. This container is defined 
by the org.springframework.context.ApplicationContext interface.
</td>
</tr>

</table>


    </section>
    <section id="s22">
<h1>AOP</h1><br>
Aspect-Oriented Programming (AOP) is one of the key elements of the Spring Framework.
Spring AOP module has some useful features like it provides interceptors to intercept 
an application. For example, when a method is executed in a system, then you can also 
add extra features and functionality before or after the method has been executed.<br>
	<br>
	<b>AOP Usecase :</b><br>
	provide declarative enterprise services, especially as a replacement for EJB declarative services. <br>
	The most important such service is declarative transaction management.
    allow users to implement custom aspects, complementing their use of OOP with AOP.<br>
    </section>
    <section id="s23">
<h1>Common Spring Exception</h1>
<b>NoSuchBeanDefinition :</b><br>
The most common cause of this exception is simply trying to inject a bean that isn't defined.<br>
For example, BeanB is wiring in a collaborator, BeanA:<br>

@Component<br>
public class BeanA {<br>

    @Autowired<br>
    private BeanB dependency;<br>
    //...<br>
}<br>
Now if the dependency BeanB is not defined in the Spring Context, 
the bootstrap process will fail with the no such bean definition exception:<br>
    </section>
    <section id="s24">
<h1>NoUniqueBeanDefinition</h1><br>
When you do have more than one bean of a given type, you need to 
tell Spring which bean you wish it to use for dependency injection. 
If you fail to do so, Spring will throw a NoUniqueBeanDefinitionException 
exception, which means there’s more than one bean which would fulfill the requirement.<br>
<b>How to resolve such exception :</b><br>
There are two simple ways you can resolve the NoUniqueBeanDefinitionException 
exception in Spring. <br>
<b>@Primary  annotation</b>, which will tell Spring when all other things are
equal to select the primary bean over other instances of that type for the 
autowire requirement.<br>

<b>@Qualifier  annotation</b>. Through the use of this annotation, you can give 
Spring hints about the name of the bean you want to use. By default, the reference 
name of the bean is typically the lower case class name.<br>

    </section>
    <section id="s25">
<h1>BeanInstantiation Exception</h1><br>
This Exception thrown when instantiation of a bean failed.<br>
The spring boot exception BeanInstantiationException: Failed to instantiate 
happens when the bean can’t instantiate when auto-wiring in another bean. 
If the bean is instantiated in another bean, the bean either throws an 
exception or fails to create an object. BeanInstantiationException will be 
fired on runtime when the bean is created and dynamically loaded in the application.<br>
<br>
<b>The exception BeanInstantiationException: Failed to instantiate will be threw 
mostly for three reasons.</b><br> If the bean implementation class is not available or 
has not been added to the java class path, the bean could not be loaded into 
the spring boot context. If the bean is instantiated using the abstract class 
of the bean, the abstract class does not locate the implemented class in the 
spring boot context.
    </section>
	<section id="s26" >
<h1>Application Context Exception</h1><br>
<b>ApplicationContextException: Unable to start ServletWebServerApplicationContext due 
to missing ServletWebServerFactory bean.</b><br>
It simply tells us that there is no configured ServletWebServerFactory bean in the ApplicationContext.
<b>Cause for such Exception -</b><br>
1.The error comes up mainly when Spring Boot fails to start the ServletWebServerApplicationContext
Because the ServletWebServerApplicationContext uses a contained ServletWebServerFactory bean to bootstrap itself.
Spring Boot provides the SpringApplication.run method to bootstrap Spring applications.<br>

2.The SpringApplication class will attempt to create the right ApplicationContext for us, 
depending on whether we are developing a web application or not.Another cause would be 
missing the @SpringBootApplication annotation in the Spring Boot entry point class.<br>

    </section>
    <section id="s27">
<h1>Path param Vs Request param</h1><br>

@RequestParam and @PathVariable can both be used to extract values from the request URI, but they are a bit different.<br>
@RequestParam is used to get the request parameters from URL, also known as query parameters, 
while @PathVariable extracts values from URI.<br>
For example, if the incoming HTTP request to retrieve a book on topic "Java" 
is http://localhost:8080/shop/order/1001/receipts?date=12-05-2017, then you can use the 
@RequestParam annotation to retrieve the query parameter date and you can use 
@PathVariable to extract the orderId i.e. "1001" as shown below:<br>

@RequestMapping(value="/order/{orderId}/receipts", method = RequestMethod.GET)<br>
public List listUsersInvoices( @PathVariable("orderId") int order,<br>
 @RequestParam(value = "date", required = false) Date dateOrNull) {<br>
...<br>
}<br>
<b>Spring controllers that can handle request parameters and path variables.</b><br>
<b>1. Using @RequestParam to get Query parameters</b><br>
In a Spring MVC application, you can use the @RequestParam annotation to 
accept query parameters in Controller's handler methods.<br>
For examples, suppose you have a web application that returns details of 
orders and trades, and you have the following URLs:<br>

http://localhost:8080/eportal/orders?id=1001<br>

To accept the query parameters in the above URLs, you can use the 
following code in the Spring MVC controller:<br>
@RequestMapping("/orders")<br>
public String showOrderDetails(@RequestParam("id") String orderId, Model model){<br>
   model.addAttribute("orderId", orderId);<br>
   return "orderDetails";<br>
}<br>
<b>2. Using @PathVariable annotation to extract values from URI</b><br>
You can use Spring MVC's @PathVaraible annotation to extract any value 
which is embedded in the URL itself. Spring calls it a URI template, where 
@PathVariable is used to obtain some placeholders from the URI itself.<br>
URL: http://localhost:8080/book/9783827319333<br>

Now, to extract the value of ISBN number from the URI in your Spring MVC Controller's 
handler method, you can use @PathVariable annotation as shown in the following code:<br>
@RequestMapping(value="/book/{ISBN}", method= RequestMethod.GET)<br>
public String showBookDetails(@PathVariable("ISBN") String id,<br>
                              Model model){<br>
   model.addAttribute("ISBN", id);<br>
   return "bookDetails";<br>
}<br>
<b><i>Path param vs request params :<br>
Path params we use with get .It comes as a part of url.<br>
Request params we send in body <br>
_____<br>
.@ResponseBody is a Spring annotation which binds a method return 
value to the web response body .The @ResponseBody annotation is 
used at method level or method return type level.<br>
______</i></b>
The @RequestParam is used to extract query parameters while @PathVariable is used to extract data right from the URI.
    </section>
    <section id="s28">
<h1>Eager Loading Vs Lazy Loading</h1><br>
Lazy loading delays the initialization of a resource, eager loading initializes 
or loads a resource as soon as the code is executed. Eager loading also involves 
pre-loading related entities referenced by a resource.<br>

Eager Loading is a design pattern in which data initialization occurs on the spot.<br>
Lazy Loading is a design pattern that we use to defer initialization of an object as long as it's possible.<br>
<br>
Eager loading is the opposite of lazy loading. With eager loading, a web page loads all of 
its content immediately. Eager loading lets the browser store all contents of the web page in its cache, 
which can be helpful if visitors return to the page. However, this method can be slow to load larger web page files.<br>
<b>Does Lazy Loading improve speed and performance</b><br>
Lazy loading images and video reduces initial page load time, initial page weight, 
and system resource usage, all of which have positive impacts on performance.<br>
<b>Lazy -Loading Advantage </b><br>
Lazy loading improves the performance of data fetching and significantly 
reduces the memory footprint. When Hibernate initializes the data object, 
actually it creates a reference (of the data) to the data object and 
doesn't load the data as such.<br>
<b>Lazy loading Disadvantage </b><br>
Users may request resources faster than expected: For instance, if a user scrolls 
quickly down a page, they might have to wait for the images to load. This could 
negatively impact user experience.<br>
    </section>
    <section id="s29">
<h1>Eager initialisation Vs Lazy initialisation</h1><br>
Lazy initialization is technique were we restrict the object creation 
until its created by application code. This saves the memory from redundant 
objects which some time may be very big/heavy. In other way eager initialization 
creates the object in advance and just after starting the application or module.<br>
<br>
Memory and resource utilization plays crucial role in current enterprise era 
developers always need to take care of resource creation, utilization and it's 
cleanness on correct time to make application more effective and optimized. 
Object creation is also part of it. Lazy initialization is technique were we 
restrict the object creation until its created by application code. This saves 
the memory from redundant objects which some time may be very big/heavy.
In other way eager initialization creates the object in advance and just after 
starting the application or module. This is helpful in case the object is 
mandatory and in all the cases functional. This way application provides the 
ready to use object and saves execution time at time of actual request.<br>

So, as per above details, both lazy and eager loading/initialization plays 
critical role and should be used as per the requirement and behavior of application.<br>

    </section>
    <section id="s30">
<h1>JPA repository Vs Crud repository</h1><br>
<b>CrudRepository</b> is a Spring Data interface for generic CRUD operations on a 
repository of a specific type. It provides several methods out of the box 
for interacting with a database.<br>
CrudRepository provides CRUD functions. PagingAndSortingRepository provides 
methods to do pagination and sort records. JpaRepository provides JPA related 
methods such as flushing the persistence context and delete records in a batch.<br>
CrudRepository does not provide any method for pagination and sorting. JpaRepository 
extends PagingAndSortingRepository. It provides all the methods for implementing 
the pagination. It works as a marker interface.<br><br>
<b>JpaRepository extends PagingAndSortingRepository which in turn extends CrudRepository.</b><br>

Their main functions are:<br>

CrudRepository mainly provides CRUD functions.<br>
PagingAndSortingRepository provides methods to do pagination and sorting records.<br>
JpaRepository provides some JPA-related methods such as flushing the persistence context and deleting records in a batch.<br>
Because of the inheritance mentioned above, JpaRepository will have all the 
functions of CrudRepository and PagingAndSortingRepository. So if you don't 
need the repository to have the functions provided by JpaRepository and 
PagingAndSortingRepository , use CrudRepository.<br>

    </section>
	<section id="s31" >
<h1>Spring MVC Vs Spring Boot</h1>
Spring MVC allows us to create a web app.Any app which we develop with spring 
boot inherently use spring MVC as creation of web based app is the basis of MVC framework. 
Making an app solely using spring MVC requires lot of initial configuration. <br>
Like to add view resolver , adding web jars.Configuring dispatched servlets etc.
To develop a typical web app spring mvc alone can't work. It requires some other 
framework with it to work.like -  core Framework, jackson,logging Framework, 
embedded server etc which requires additional effort. With spring boot , all 
these things becomes pretty easy as it provides embedded Servlet container, 
auto-configuration feature, addition of starter dependencies of different -2 Framework. 
Hence, to simplify the view without  using so many configuration spring boot is came. <br>
A spring mvc app is packaged & deployed as a war file using  Servlet container  such as tomcat.
Spring boot doesn't need a war deployment. It uses embedded server so, the app is packaged as a jar .
No xml configuration with spring boot as incase of spring mvc.Configuration with spring boot is really seamless. 
<br><br>
Spring MVC is a part of the Spring framework that helps in handling HTTP 
requests and responses. On the other hand, Spring Boot is the extension 
of the Spring framework and provides a faster way to build applications. 
Spring MVC allows you to easily build fully functional Java Web applications 
with the help of kits ready-made components, and <br>Spring Boot helps rapidly 
build production-ready applications. Spring Boot framework is also capable 
of embedding HTTP servers like Tomcat. In situations where more flexibility 
is required, it is advised to use Spring MVC as it allows you to make 
configurations according to your specific needs rather than spring boot. 
Unlike Spring MVC, spring boot is a tool that injects your functionality 
into the program without the laborious task of doing it individually.
    </section>
    <section id="s32">
<h1>Spring MVC Vs Spring Webflux</h1>
<b>Spring WebFlux</b> is used to create fully asynchronous and non-blocking application built on event-loop execution model
Spring mvc is based on servlet stack framework&  spring webflux 
(it is servlet agnostic ie... can & cannot use servlet) used reactive 
stack framework. And Nowadays,  reactive programming r gaining popularity 
due to it's asynchronous & non blocking nature.<br>
Spring MVC is a traditional, synchronous web framework, while Spring WebFlux 
is a reactive, non-blocking web framework. This means that in a Spring MVC 
application, each request is handled by a single thread, while in a Spring 
WebFlux application, multiple threads can be used to handle requests.<br>
Each request to Spring MVC uses a single thread, which can be blocking,
whereas Spring Webflux does not block a thread during execution<br>
<br>
<b>Spring WebFlux Disadvantage :</b><br>
One of the biggest disadvantages of the Webflux is that it is reactive, 
a fact that brings a lot of additional complexity and needs time to be 
thoroughly understood and appreciated.<br>
    </section>
    <section id="s33">
<h1> Spring 3 Vs Spring 4</h1><br>

Spring 4 introduced @RestController which is combination of @Controller + @ResponseBody. 
So when using @RestController, you do not need to use @ResponseBody. It's optional. 
Till Spring 3, we would have been using @Controller annotation and in that case it 
was important to use @ResponseBody annotation as well.<br>
<b> new changes that are introduced as part of the Spring 4 which is not part of Spring 3:</b><br>
<br>
RestController annotation<br>
JSR-335 Lambda expressions<br>
JSR-310 Date-Time value types for Spring data binding and formatting.<br>
JSR-343 JMS 2.0.<br>
JSR-338 JPA 2.1.<br>
JSR-349 Bean Validation 1.1.<br>
JSR-236 Java EE 7 Enterprise Concurrency support.<br>
JSR-356 Spring’s WebSocket endpoint mode.<br>
Configuring and implementing Spring style application using Groovy 2. 
Also they specify that first class support for the Groovy applications.<br>
Removed Deprecated Packages and Methods<br>
Java 8 Support<br>
Java EE 6 and 7 or above is now considered the baseline for Spring Framework 4<br>
Groovy Bean Definition DSL, read more about this API.<br>
Core Container Improvements<br>
General Web Improvements<br>
WebSocket, SockJS, and STOMP Messaging<br>
Testing Improvements<br>
<b>Spring 3.x which introduced lot of new features like:</b><br>

Spring MVC Test Framework<br>
Asynchronous MVC processing on Servlet 3.0<br>
custom @Bean definition annotations in @Configuration classes<br>
@Autowired and @Value to be used as meta-annotations<br>
Concurrency refinements across the framework<br>
loading WebApplicationContexts in the TestContext framework<br>
JCache 0.5 (JSR-107)<br>

    </section>
    <section id="s34">
<h1>Spring-boot-starter-web Vs Spring-boot-starter-tomcat</h1><br>
Spring Boot Starter Web Vs Spring Boot Starter Tomcat<br>
Starter web mainly used for building web applications that include RESTful 
applications using Spring MVC. It uses Tomcat as the default embedded container . <br>
single spring-boot-starter-web dependency can pull in all dependencies related
to web development.<br>The spring-boot-starter-web auto-configures<br>
Dispatcher Servlet<br>
Error Page<br>
Embedded servlet container<br>
Web JARs for managing the static dependency<br>
________<br>
Spring Boot Starter Web is used for building RESTful applications 
using Spring MVC.Spring Boot Starter Tomcat is the default embedded 
container for Spring Boot Starter Web. We cannot exclude starter 
web dependency while using web services.We can exclude starter 
tomcat dependency when we want to use another embedded container.<br>
    </section>
    <section id="s35">
<h1>Starter Dependencies </h1><br>
A starter dependency is nothing but a special dependency that aggregates 
commonly used dependencies for a particular feature. For example, suppose 
you are building a Spring based web application. For this, you will need 
to add dependencies for spring-core, spring-web, jackson, etc.<br>
<b>The spring-boot-starter-parent is a special starter that provides useful 
	Maven defaults. It also provides a dependency-management section so that 
	you can omit version tags for “blessed” dependencies.</b>
<b>Spring-boot-starter-tomcat -</b><br>
It is the most popular servlet container which was used to deploy java 
applications, by default spring boot is built the standalone application 
which was running on the desktop.<br>
Starter for using Tomcat as the embedded servlet container. Default servlet container starter used by spring-boot-starter-web.
    </section>
	<section id="s36" >
<h1>spring-boot-starter-jetty</h1><br>
To use Jetty in your Spring Boot application, we can use the spring-boot-starter-jetty starter. 
Spring Boot provides Tomcat and Jetty dependencies bundled together as separate starters to 
help make this process as easy as possible. Add the spring-boot-starter-jetty starter in 
your pom. xml file.<br>
<b>Jetty is user friendly and has a better interface than Tomcat. Better for handling 
	simultaneous users compared to Tomcat. The conceptual weight of the framework is 
	less, very fast, and thin. Small memory trace to work speedily.</b>

    </section>
    <section id="s37">
<h1>spring-boot-starter-undertow</h1><br>
The undertow subsystem allows you to configure the web server and servlet container settings.
 It implements the Java Servlet 3.1 Specification as well as websockets and supports HTTP
  Upgrade and using high performance non-blocking handlers in servlet deployments.<br>
Spring boot provides an easy way to configure undertow server as like jetty. 
undertow is web server written in Java and manage and sponsored by JBoss. Main advantages 
of undertow are HTTP/2 Support, HTTP Upgrade Support, Web Socket Support, Servlet 4.0, 
Embeddable, Flexible.<br>
To use Undertow instead of tomcat, first, you need to exclude the spring-boot-starter-tomcat from spring-boot-starter-web. 
Then you should add the undertow starter (since Tomcat is the default web server).
<br>
<b>Difference between Tomcat and UnderTow</b><br>
Apache Tomcat powers numerous large-scale, mission-critical web applications across a 
diverse range of industries and organizations. What is Undertow? A flexible performant 
web server written in java. It is a flexible performant web server written in java, 
providing both blocking and non-blocking API's based on NIO.<br>

    </section>
    <section id="s38">
<h1>Spring-boot-starter-web</h1>
For servlet stack applications, the spring-boot-starter-web includes Tomcat 
by including spring-boot-starter-tomcat , but you can use spring-boot-starter-jetty 
or spring-boot-starter-undertow instead.<br>
    </section>
    <section id="s39">
<h1>spring-boot-starter-actuator</h1><br>
Spring Boot Actuator is a sub-project of the Spring Boot Framework. It includes a 
number of additional features that help us to monitor and manage the Spring.<br>
To enable Spring Boot actuator endpoints to your Spring Boot application, we need 
to add the Spring Boot Starter actuator dependency in our build configuration file.
Maven users can add the below dependency in your pom. xml file.<br>
<b>It uses HTTP endpoints to expose operational information about any running application. 
	The main benefit of using this library is that we get health and monitoring metrics 
	from production-ready applications.</b><br>
	Actuator endpoints let you monitor and interact with your application. Spring Boot 
	includes a number of built-in endpoints and lets you add your own. For example, 
	the health endpoint provides basic application health information. 
	Each individual endpoint can be enabled or disabled.
    </section>
    <section id="s40">
<h1>spring-boot-starter-data-jpa</h1><br>
Spring Boot Starter Data JPA. Spring Boot provides spring-boot-starter-data-jpa 
dependency to connect Spring application with relational database efficiently.<br>
Spring Data JPA focuses on using JPA to store data in a relational database. 
Its most compelling feature is the ability to create repository implementations 
automatically, at runtime, from a repository interface.<br>
<b>Difference between JPA and Hibernate</b><br>
JPA uses EntityManager interface to create/read/delete operation and maintains 
the persistence context. Hibernate uses Session interface to create/read/delete 
operation and maintains the persistence context. JPA uses JPQL 
(Java Persistence Query Language) as Object Oriented Query 
language for database operations.

    </section>
	<section id="s41" >
<h1>spring-boot-starter-jdbc</h1><br>
Spring Boot JDBC provides starter and libraries for connecting an application with JDBC.
 In Spring Boot JDBC, the database related beans such as DataSource, JdbcTemplate, 
 and NamedParameterJdbcTemplate auto-configures and created during the startup. 
 We can autowire these classes if we want to use it.<br><br>
<b>One of the key differences between Spring Data JPA and Spring Data JDBC – </b><br>
there is no transaction context in Spring Data JDBC. The framework does not track entity state, 
does not fetch associations lazily on first access, and does not save changes when a transaction is closed
    </section>
    <section id="s42">
<h1>spring-boot-starter-ldap</h1><br>
<b>Why LDAP is used for ?</b><br>
The most common LDAP use case is providing a central location for accessing and managing 
directory services. LDAP enables organizations to store, manage, and secure information 
about the organization, its users, and assets–like usernames and passwords.<br>
LDAP is used as a central repository for user information. Applications then connect to this 
repository for user searches and authentication. Spring Boot offers auto-configuration 
for any compliant LDAP server as well as support for the embedded in-memory LDAP server.<br>
<br><br>
Spring Data LDAP provides similar abstraction which provides the automatic implementation 
of Repository interfaces that include basic CRUD operation for LDAP directories. Also, 
Spring Data Framework can create a custom query based on a method name.<br>

    </section>
    <section id="s43">
<h1>spring-boot-starter-test</h1><br>
The spring-boot-starter-test “Starter” (in the test scope ) contains the following 
provided libraries: JUnit 4: The de-facto standard for unit testing Java applications. 
Spring Test & Spring Boot Test: Utilities and integration test support for Spring 
Boot applications. AssertJ: A fluent assertion library.<br>
The <b>@SpringBootTest annotation</b> is a powerful annotation in Spring framework 
which is used to load entire application context for Spring Boot application 
and create integration test. It allows you to test your application in the 
same way as it runs on production.<br><br>
With Spring Boot, we need to add starter to our project, 
for testing we only need to add the spring-boot-starter-test dependency.<br>

dependency> <br> 
groupId>org.springframework.boot/groupId> <br> 
artifactId>spring-boot-starter-test/artifactId>  <br>
version>2.2.2.RELEASE/version> <br> 
scope>test/scope>  <br>
/dependency><br>
It pulls all the dependencies related to test. After adding it, we can build up a simple unit test.   

    </section>
    <section id="s44">
<h1>spring-boot-starter-thymeleaf</h1><br>
Thymeleaf is a Java-based library used to create a web application.It is a Java template engine 
for processing and creating HTML, XML, JavaScript, CSS and text.  
It provides a good support for serving a XHTML/HTML5 in web applications.<br>
Thymeleaf is use at the backend.It is a template generator. HTML pages are generated by Spring on the backend server.<br>
<b>Thymeleaf Advantage -</b><br>
Its high-performance parsed template cache reduces I/O to the minimum. 
It can be used as a template engine framework if required. It supports 
several template modes: XML, XHTML, and HTML5. It allows developers to 
extend and create custom dialect.<br>
<br>
Starter for building MVC web applications using Thymeleaf views<br>
dependency><br>
    groupId>org.springframework.boot/groupId><br>
    artifactId>spring-boot-starter-thymeleaf/artifactId><br>
    version>2.1.8.RELEASE/version><br>
/dependency><br>

    </section>
    <section id="s45">
<h1>spring-boot-starter-data-cassandra</h1><br>
Starter for using Cassandra distributed database and Spring Data Cassandra Reactive<br>
dependency><br>
    groupId>org.springframework.boot/groupId><br>
    artifactId>spring-boot-starter-data-cassandra-reactive/artifactId><br>
    version>2.4.3/version><br>
/dependency><br>

    </section>
	<section id="s46" >
<h1>spring-boot-starter-data-mongodb</h1>
Starter for using Cassandra distributed database and Spring Data Mongo DB Reactive<br>
dependency><br>
    groupId>org.springframework.boot/groupId><br>
    artifactId>spring-boot-starter-data-mongodb-reactive/artifactId><br>
    version>2.4.3/version><br>
/dependency><br>
    </section>
    <section id="s47">
<h1>spring-boot-starter-data-redis</h1><br>
<b>Redis(Remote Directory Server ) cache in spring</b><br>
Redis cache helps us by minimizing the number of network calls while 
accessing the data from DB. Uses caching technique to make DB calls 
faster .apart from Cache, Redis can also be used as a database and 
<b>Message Broker</b>. Redis is an open source (BSD licensed) in-memory 
remote data structure store.Redis db can br used as an :<br><br>
<b>In- memory db -</b> As an in memory db ,it stores data in memory rather 
than disk.Hence,is quicker compare to disk access. And also 
eliminates the seek/latency time in retrieving data.
it  do not persists the data in disk.<br>
As an <b>In-Memory database</b>, We will get some empty memory to perform database 
operations. Moreover, it acts as No-SQL database and there are No Tables, 
No Sequences, No Joins concept.<br>
<b>Cache - </b> Redis is normally used as a cache to store repeatedly accessed 
data in memory As a cache manager, it reduces network calls and 
improves the performance of an application.<br>
<b>Message broker -</b>   Pub/Sub[google] , is a messaging system in Redis 
where the senders send binary string messages to the receivers.<br>
In Redis context, senders are named as Publishers and receivers are 
named as Subscribers.<br>
This is how Redis acts as a message broker.<br>
___________________________________<br>
When we perform a DB retrieve operation via an Application, 
the Redis Cache stores the result in it’s cache. Further, when we 
perform the same retrieve operation, it returns the result from 
the cache itself and ignore the second call to database. To use 
it is , we need to download a Redis Server in our system. <br>
To access this use this artifacts -<br>
artifactId>spring-boot-starter-data-redis/artifactIdb<br>

_________________<br>
Redis - remote Dictionary Server <br>
Used because it is fast, scalable,<br>
single threaded(so 1 action at a time)<br>
Redis is an in-memory database and uses primary memory for data storage.<br>

As a result, whenever you restart the server/computer in which Redis is running, 
there is a risk of losing data. As mitigation for this risk, Redis has the
 Persistence feature. This involves writing the data into the disk in a compact format.<br>
<b>Appropriate memory usage in Redis -></b><br>
In Redis, storage happens in memory. For it's optimum use , Instead of 
getting new RAM, it is advisable to use appropriate data structures
 and optimize them.<br>
<b>Technique for memory optimization -></b><br>
Short structures<br>
Sharded structures  -  Sharding is a technique of breaking down data 
into multiple parts called shards to increase data storage and for load balancing. <br>
Packing data into string<br>





________________________________________

    </section>
    <section id="s48">
<h1>spring-boot-starter-webflux</h1><br>
Spring WebFlux is the alternative to Spring MVC module.
Spring WebFlux is used to create fully asynchronous and 
non-blocking application built on event-loop execution model.<br>
<br>
with the spring-boot-starter-webflux dependency, which pulls in all other required dependencies:<br>

spring-boot and spring-boot-starter for basic Spring Boot application setup<br>
spring-webflux framework<br>
reactor-core that we need for reactive streams and also reactor-netty<br>
dependency><br>
    groupId>org.springframework.boot/groupId><br>
    artifactId>spring-boot-starter-webflux/artifactId><br>
    version>2.6.4/version><br>
/dependency><br>

The latest spring-boot-starter-webflux can be downloaded from Maven Central.
<b>Default server for spring-boot-starter-webflux</b><br>
Spring WebFlux is a part of the Spring framework and provides reactive 
programming support for web applications. If we're using WebFlux in a 
Spring Boot application, Spring Boot automatically configures Reactor 
Netty as the default server<br>

    </section>
    <section id="s49">
<h1>spring-boot-starter-log4j2</h1><br>
Spring Boot also supports either Log4j or Log4j 2 for logging configuration, 
but only if one of them is on the classpath. If you are using the starter 
poms for assembling dependencies that means you have to exclude Logback and 
then include your chosen version of Log4j instead.<br>
Spring boot starter projects enable quick development boot applications. 
Starter projects has a default dependency on spring-boot-starter-logging. 
This library configures logback as the default logging implementation.<br>
<b>spring boot starter Log4j2 vulnerability</b><br>
The vulnerability has been reported with CVE-2021-44228 against the 
log4j-core jar and has been fixed in Log4J v2. 15.0. Spring Boot 
users are only affected by this vulnerability if they have switched 
the default logging system to Log4J2.<br>
Open pom.xml file and add the following snippet to the dependencies section -<br>

<b>Exclude Spring Boot's Default Logging </b><br>
dependency><br>
	groupId>org.springframework.boot/groupId><br>
	artifactId>spring-boot-starter/artifactId><br>
	exclusions><br>
		exclusion><br>
			groupId>org.springframework.boot/groupId><br>
			artifactId>spring-boot-starter-logging/artifactId><br>
		/exclusion><br>
	/exclusions><br>
/dependency><br>

 <b>Add Log4j2 Dependency </b><br>
dependency><br>
	groupId>org.springframework.boot/groupId><br>
	artifactId>spring-boot-starter-log4j2/artifactId><br>
/dependency>

    </section>
    <section id="s50">
<h1>@bean Vs @component</h1><br>
<b>@bean :</b> The @Bean annotation returns an object that spring registers as a bean in application context .<br>
<b>@Component :</b> Indicates that an annotated class is a "component". 
Such classes are considered as candidates for auto-detection when using 
annotation-based configuration and class path scanning.<br>
@Component is a class-level annotation, but @Bean is at the method level, 
so @Component is only an option when a class's source code is editable. 
@Bean can always be used, but it's more verbose. @Component is compatible 
with Spring's auto-detection, but @Bean requires manual class instantiation.<br>
<b>@Component Preferable for component scanning and automatic wiring.</b><br>

<b>When should you use @Bean?</b><br>

Sometimes automatic configuration is not an option. When? Let's imagine that you want to 
wire components from 3rd-party libraries (you don't have the source code so you can't 
annotate its classes with @Component), so automatic configuration is not possible.<br>

The @Bean annotation returns an object that spring should register as bean in 
application context. The body of the method bears the logic responsible for creating the instance.<br>
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