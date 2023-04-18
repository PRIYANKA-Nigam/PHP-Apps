<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
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
#m1{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m2{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#m3{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#m4{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#m5{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#m6{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m7{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#m8{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#m9{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#m10{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#m11{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m12{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#m13{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#m14{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#m15{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#m16{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m17{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#m18{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#m19{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#m20{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#m21{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m22{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}


 </style>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
<!-- 
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>     -->
<div class="container">
    <div class="row">
        
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
<div class="side-bar" >
        <div class="d-flex flex-column justify-content-between col-auto bg-dark min-vh-100">
            <div class="mt-4">
                <a class="text-white d-none d-sm-inline text-decoration-none d-flex align-items-center ms-4" role="button">
                    <span class="fs-5">Microservice</span>
                </a>
                <hr class="text-white">
                <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                    
                    <li class="nav-item">
                        <a href="#m1" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-house"></i>
                            <span class="ms-2 d-none d-sm-inline">What is microservice.</span>
                        </a>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">Fault Tolerance in microservice</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#m2" class="nav-link active text-white" aria-current="page">Rate Limiting</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m3" class="nav-link text-white">Circuit Breaker</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m4" class="nav-link text-white">Bulk Head</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m5" class="nav-link text-white">Time Limiting</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">Different Architectures</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#m6" class="nav-link active text-white" aria-current="page">Monolithic Architecture</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m7" class="nav-link text-white">Service Oriented Architecture</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m8" class="nav-link text-white">Microservice Architecture</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m" class="nav-link text-white">Server-less Architecture</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">Comparison & Contrast</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#m9" class="nav-link active text-white" aria-current="page">Monolithic Vs Microservice</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m10" class="nav-link text-white">Microservices Vs APIs</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m11" class="nav-link text-white">Rest APIs Vs Streaming APIs</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m12" class="nav-link text-white">Rest APIs Vs Restful APIs</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m13" class="nav-link text-white">Webservice Vs APIs</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m14" class="nav-link text-white">API Vs WebHooks Vs Websockets</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                    <a href="#m15" class="nav-link text-white" aria-current="page" >
                        <i class="fa fa-users"></i>
                        <span class="ms-2 d-none d-sm-inline">API Gateway</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="#m16" class="nav-link text-white" aria-current="page" >
                        <i class="fa fa-users"></i>
                        <span class="ms-2 d-none d-sm-inline">Eureka Server</span>
                    </a>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">Service Registry/Discovery</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#m17" class="nav-link active text-white" aria-current="page">Service Registry</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m18" class="nav-link text-white">Server side service discovery</a>
                        </li>
                        <li class="nav-item">
                        <a href="#m19" class="nav-link text-white">Client side service discovery</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                    <a href="#m20" class="nav-link" >Use of Jars in microservices</a>
                    </li>
                    <li class="nav-item diabled">
                    <a href="#m21" class="nav-link" aria-current="page">Disabled</a>
                    </li>
                    <li class="nav-item">
                    <a href="#m22" class="nav-link" >Firebase Vs Rest APIs</a>
                    </li>
                </ul>
            </div>
            <!-- <div style="margin:auto">
            <div class="dropdown open">
                <a class="btn border-none outline-none text-white dropdown-toggle" type="button" id="triggerId"
                data-aria-expanded="false">
                <i class="fa fa-user"></i><span class="ms-1 d-none d-sm-inline">Priyanka</span>
            </a>
           
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
            </div> 
        </div></div> -->
        </div>
</div>
    </nav>
    </div>
</div>
<label><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br>
<div class="content" >
    <section id="m1" >
<h1>Microservice</h1>
Microservices are an architectural and organizational approach to software development where 
software is composed of small independent services that communicate over well-defined APIs.
Microservices are an architectural style for web applications in which applications are 
structured as collections of loosely coupled services. <br><br>
Microservices that make up an application can be placed within containers that possess the 
smallest libraries and executables needed by that service or application, making each 
container a self-contained package. Docker delivers an easy way to create, share, and test container images
    </section>
    <section id="m2">
<h1>Fault or Deviations in Microservice Communication -</h1>
When 1 Microservice communicate with other Microservice than due to some fault or delay 
in response by 1 service it could lead to certain problems .<br>
it could be slow response, network failures, REST call failures, failures due to the 
high number of requests .Programmetically, fault tolerance can be handled by creating a  
RestController with a simple method that will demonstrate our functionality. Additionally, 
we will create a fallback method to tolerate the fault.<br><br>

<b>• Rate Limiting ---</b>  Rate Limiter limits the number of requests for a given period.
Rate Limiting is done to  protect the resources from spammers, minimize the overhead, 
meet a service level agreement etc. we can achieve this functionality with @RateLimiter 
provided by Resilience4j.
    </section>
    <section id="m3">
<h1>Circuit Breaker</h1>
<b>• Circuit Breaker -- </b> When a microservice talks to another microservice which is faulty 
than it may lead to error or inaccurate response and this could also affect the other 
microservice response due to Cascading affect. So, under such situation instead of wanting 
Microservice to call the service methods , a fallback method is called . so, calling a 
fallback method instead of an actual service due to a fault is called breaking the circuit.
annotation @CircuitBreaker is used for this.<br>
    </section>
    <section id="m4">
<h1>BulkHead</h1>
<b>• BulkHead --</b><br>  Using Bulkhead, we can limit the number of concurrent requests within a 
particular period. Similar to rateLimiting but difference between Bulkhead and Rate Limiting 
is that Rate Limiter never talks about concurrent requests, but BulkheadLimiting annotation 
@Bulkhead is use for this.
    </section>
    <section id="m5">
<h1>Time Limiting</h1>
<b>• Time Limiting --- </b> Time Limiting is the process of setting a time limit for a Microservice 
to respond . If 1 Microservice  doesn’t respond to another within that time limit, then it 
will be considered that it has some fault . annotation @Timelimiter is use for this.
    </section>
    <section id="m6">
<h1>Architecture</h1>
The architecture of the app determines how it will interact with other apps, databases, 
integrated tools, middleware, and so on. Whether it will meet industry standards and business 
needs depends on the approach to architecture design. This is equally critical for mobile and 
web apps development services.<br><br>

A Monolithic application is built as one single unit in which the user interface and data 
access code are combined into a single program on a single platform. Enterprise Monolithic applications 
are built in three parts: A database, consisting of many tables usually in a relational database 
management system. Client-side user interface consisting of HTML and/or JavaScript running in a browser.

<b>Problem with Monolithic</b>
Monolithic  easy to develop, test  & deployment . Problem  is :<br>
Even for a small change in the code, entire application needs to be re-built and re-deploy. 
The difficulties when deploying Monolith Architecture comes when scaling up. Every time you build, 
test and deploy, you have to change the whole monolith due to modules being extensively dependant 
on each other.<br>

<b>Best Usecase</b><br>
Monolith Architecture is most effective on small projects with a well-defined scope, where you are 
unlikely to maintain or evolve the codebase on a recurring basis. 
    </section>
    <section id="m7">
<h1>SOA</h1>
SOA is an architecture approach for defining, linking and integrating reusable business services that have 
clear boundaries and are self-contained with their own functionalities. These services communicate with 
each other to enable simple data passing or it could involve two or more services coordinating activity. 
The complexity of each service within SOA is usually very low and they communicate with each other over a 
set of APIs.<br><br>

<b>Pros</b><br>
SOAs give you a great amount of flexibility when building complex architectures and one component will 
not bring down the rest of it if a deployment goes wrong.<br>

<b>Cons</b><br>
SOAs give you a great amount of flexibility when building complex architectures and one component will not 
bring down the rest of it if a deployment goes wrong.<br>

<b>Usecase</b><br>
<ul>
    <li>Electronic Wallet</li>
    <li>Insurance comparison websites</li>
</ul>
    </section>
    <section id="m8">
<h1>Microservice</h1>
Microservices is an architectural style that organizes an application as a group of smaller services instead 
of a single bulky services .  instead of sharing a single database schema with other services, each service 
has its own database schema. However, having a database schema per service is necessary if you want to take 
advantage from microservices, because it ensures loose coupling.<br>
Microservices architecture breaks the application into smaller, completely independent components, enabling 
them to have greater agility and scalability. It is the logical evolution of SOA that supports modern business 
use-cases.<br><br>

Microservices solve the problems of outdated Monolithic systems, this type of architecture consists of greater 
amounts of small services each running its own processes and are independently deployable therefore making it 
easier to understand, develop and test to enable Continuous Delivery and Continuous Improvement.<br>
<strong>All the microservices have a shared database.</strong>

<b>Pros</b><br>
Easy to develop, test, and deploy.
<b>Cons</b><br>
Complexity<br>
The biggest disadvantage of microservices lies in their complexity. Splitting an application into independent 
microservices entails more artifacts to manage.
    </section>
    <section id="m">
<h1>Server-less Architecture</h1>
Serverless architecture is a cloud computing approach to building and running apps and 
services without the need for infrastructure management. In serverless apps, code 
execution is managed by a server, allowing developers to deploy code without worrying 
about server maintenance and provision. In fact, serverless doesn’t mean “no server.” 
The application is still running on servers, but a third-party cloud service like AWS 
takes full responsibility for these servers. A serverless architecture eliminates the 
need for extra resources, application scaling, server maintenance, and database and 
storage systems.<br><br>

<b>Pros</b><br>
When using a serverless architecture, developers can focus on the product itself 
without worrying about server management or execution environments. This allows 
developers to focus on developing products with high reliability and scalability.
    </section>
    <section id="m9">
<h1>Monolithic Vs Microservice</h1>
A monolithic application is built as a single unified unit while a microservices 
architecture is a collection of smaller, independently deployable services.
For a lightweight application, a monolithic system often suits better. For a complex, 
evolving application with clear domains, the microservices architecture will be the 
better choice.<br>
Switching from monolithic to microservice is advisable as you can detect bugs or 
performance issues in a gradual fashion with microservices but is hard to come body
incase of monolithic.<br>
    </section>
    <section id="m10">
<h1>Microservice Vs APIs</h1>
API stands for Application Programming Interface.<br>
APIs r the point of contact for all the services through which all of these services 
communicate with each other. Simply put, APIs are the frameworks through which users 
interact with a web application. microservice often has an API. However, not all 
microservices need an API to function, and vice versa.<br>
a microservice has to do more with the software’s architecture, and the API has to 
do with how to expose the microservice to a consumer. APIs are the entry point for 
microservices. They act as a gatekeeper, doing all the basic functionalities before 
passing the request to the respective application, allowing the end-user to interact 
with the application.<br>
An API is a system that allows two or more applications to communicate.<br>

APIs are necessary for the microservice architecture to function because it’s the 
communication tool between its services. Without an API, there would be a lot of 
disconnected microservices. If you want your microservice to be used, then you 
have to create an API.
    </section>
    <section id="m11">
<h1>Rest APIs Vs Streaming APIs</h1>
<b>Rest API -</b> r the standard that uses HTTP methods as input . Strong protocol and 
is more secure, built-in architecture layers.Format of data is based on HTTP.
<b>Restful API -</b> It is less secure than rest. Format of data is based on HTTP, text, 
and JSON.<br>
RESTful APIs are stateless. The API itself holds no client context on the server beyond 
that relevant to the immediate request and the information needed to authenticate the 
client. While it is technically true that this state can be stored elsewhere, like in a 
database, and thus would not “technically” be stored in the API itself, that’s not really 
“state” as much as it is “stored context”.<br>
<b>Sreaming APIs -</b> Streaming APIs are almost an exact opposite of the REST ethos. 
In its most basic state, Streaming APIs invert the conversational nature of REST.REST APIs 
are stateless, Streaming APIs are by their very nature stateful. Without storing state in 
some form, the Streaming API cannot properly contextualize the data relationship with the 
requesting client.<br>
If understand the two with an analogy If REST APIs are a conversation, Streaming APIs are 
more akin to watching a movie in a movie theater – if REST is two people talking, a 
Streaming API is a person buying a movie ticket, sitting in a theater, and passively 
receiving the film.<br>
<b>examples of Streaming APIs include the Twitter API,real-time Salesforce API </b>

    </section>
    <section id="m12">
<h1>Rest APIs Vs Restful APIs</h1>
<strong>APIs (Application Programming Interface)</strong> act as an interface between two applications 
to interact and provide the relevant data. It uses a set of protocols using which the 
operation is done. <b>Salesforce was the first organization to officially launch API, 
followed by eBay and Amazon. Also, 60% of transactions made on eBay use their APIs.</b><br>

REST (Representational State Transfer), is an API that follows a set of rules through which 
applications and servers communicate. It was specifically designed for working with components 
like files, objects, and media components. REST uses HTTP requests like GET, PUT, POST, and 
DELETE to manage CRUD (Create, Read, Update, and Delete) operations.<br>
<b>REST Demerits - </b>
<ul>
<li>REST API does not provide a built-in authentication or authorization 
mechanism, which means that developers must implement their own security measures.</li>
<li>REST API can be difficult to implement in certain situations, especially when dealing 
    with complex data structures.</li>
</ul><br>
RESTful API is a standardized implementation of the REST architecture, which makes it 
easier for developers to build and maintain web services.RESTful API supports caching, 
which can improve performance by reducing the number of requests sent to the server.
RESTful API can be used with a variety of data formats, including XML and JSON.  
    </section>
    <section id="m13">
<h1>Webservice Vs APIs</h1>
Jar files which we use in our project are also APIs but not web APIs.
The key difference is web service supports only HTTP while API supports 
HTTP/HTTPS protocol. A type of API is a web service.
    </section>
    <section id="m14">
<h1>API Vs WebHooks Vs Websockets</h1>
Contents will be posted shortly.
    </section>
    <section id="m15">
<h1>API Gateway</h1>
API Gateway acts as a "front door" for applications to access data, business logic,
or functionality from your backend services.An API gateway is a component that sits 
between your backend services and your API clients.routing requests from clients to 
the appropriate backend service and then returning the service's response back to the client.
When we as a user request for a service in the application than our request for the 
needed functionality is sent to the respective microservice by the API gateway and than 
the fetched response is received to us as the output.<br>
<b>API Gateway Vs Service Registry</b>The API gateway operates at the application level 
and stands between the user and internal applications logic, while the 
service registry mesh stands between the internal microservices.
    </section>
    <section id="m16">
<h1>Eureka Server</h1>
<b>Eureka (client side service discovery) server -></b><br>
To allow microservices to communicate with each other there is requirement  
of a common medium where details  of every microservice is stored. A 
common medium is nothing but Eureka Server. All microservices will register 
with Eureka Server as a discovery client.  Eureka most commonly used for 
service registry & discovery in the context of Microservices.Hence , we 
need to create a Eureka Server to register and discover the microservices.<br>
<b>Service Registry</b> is the process of registering a microservice with Eureka 
Server. In a nutshell, it acts as a kind of database which stores the 
details of all microservices involved in the entire application.to enable 
the service registry, we apply annotation @EnableEurekaServer on the top 
of the Application’s main class. <br>
<b>Service Discovery</b> is the process of discovering other microservices in 
the network to make intra-communication happen. With @EnableEurekaServer, 
other microservices can register here and communicate with each other 
via service discovery.<br>
<b>Add this in application.properties</b><br>
server.port=8761 eureka.client.register-with-eureka=false eureka.client.fetch-registry=false


    </section>
    <section id="m17">
<h1>Service Registry</h1>
A service registry is a database used to keep track of the available instances of each 
microservice in an application. The service registry needs to be updated each time a new 
service comes online and whenever a service is taken offline or becomes unavailable.In
general sense , A service registry is a database for the storage of data structures for 
application-level communication. It serves as a central location where app developers 
can register and find the schemas used for particular apps.
    </section>
    <section id="m18">
<h1>Server side service discovery</h1>
<b>Service Discovery -</b>Microservices service discovery is a way for applications and 
microservices to locate each other on a network.The discovery server monitors its client's 
uptime using “heartbeat” model. In case a service goes down, the load balancer will notice 
it and automatically manage the load coming to it. <br>
<b>Server-side service discovery</b> allows clients applications to find services through a 
router or a load balancer.eg... <b>Amazon Web Services (AWS) Elastic Load Balancer (ELB).</b>
    </section>
    <section id="m19">
<h1>CLient side service discovery</h1>
<b>Client-side service discovery</b> allows clients applications to find services by looking 
through or querying a service registry, in which service instances and endpoints are all 
within the service registry.<br>
<b>Server side service discovery is good to use than client side -</b>
the client code is simpler in server side since it does not have to deal with discovery. 
Instead, a client simply makes a request to the router.
    </section>
    <section id="m20">
<h1>Use of Jars in microservices</h1>
JAR stands for Java Archive.They are packaged with the ZIP file format, so you can use 
them for tasks such as lossless data compression, archiving, decompression, and archive unpacking.
It contains the combination of multiple java files into a single JAR archive file.It is 
designed to facilitate the packaging of java applets or applications into a single archive.
JARs are a pretty JVM-specific packaging system.<br>
When we develop a heavy microservice based application than it may require a lot of libraries(or 
we call them jars) to incorporate certain properties in your application to be used pre-hand without 
any need to develop logic for those functionality.We use build tool like- maven,gradle to include 
all the libraries that are supportable to develop some new functionalities into our application.
    </section>

    <section id="m22">
<h1>Firebase Vs Rest API</h1>
Firebase synced data across all clients in real time & remains available 
when our app goes offline .It has a cloud-hosted NoSQL database that lets 
you sync between your users in real-time.<br>
The Firebase db is a cloud hosted dB in which data is stored in json. It 
is good when the amount of data is small because it is difficult to fetch 
condition based data from large db with it.<br>
From huge amount of data we can create our own rest apis that can allow to 
& fro of datavery easily.<br>
<b>Why not to use firebase as a backend option for storage -> </b><br>
It stores data in the form of json not sql. So, if I want to fetch some data 
based on my need like give me only names of the employees with given experience
 than firebase can't fetch the exact data we need. Such data r easier to fetch 
 from sql db but not from json data hence we have to make some compromises while
using firebase as it is not going to give the same result we r seeking. it is 
difficult to fetch condition based data from large database if you are using 
Firebase. So, we have to change our logic to query for the data we want
.and  In case you need to change the logic to query data, you need to update 
your app. While Doing upgrades is very easy if REST API is used<br>
It's becomes expensive when our app grows when more number of people visits our 
app but rest api will save time and money in the long run if such situations r 
to be met with it.<br>
____________<br>
<b>Should I use REST API or just firebase to make an app like Uber or both?</b>
We use Firebase database for small database holding less amount of data because, 
it is difficult to fetch condition based data from large database if you are 
using Firebase . Whereas, when we have a large/complex database and we need 
to send/receive data to/from there, then we create our own REST APIs and that 
is way more flexible than using Firebase.<br>
<b>Cons with rest api </b><br>
We  need to host our server somewhere (heroku/AWS/Azure/etc.) and it will 
cost money also . but no such adjustment needed ro make incase of Firebase 
as it has it's own server .
    </section>
 
   </div>
</body>
</html>