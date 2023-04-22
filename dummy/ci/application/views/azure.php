
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Admin Panel</title>
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
    height: auto;
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
#a1{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#a2{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#a3{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#a4{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#a5{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
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
           Azure 
            </a>
          </li>
       
          <hr class="sidebar-divider">
             <li class="nav-item">
            <a class="nav-link" href="#a1">
              <span data-feather="file" class="align-text-bottom"></span>
           Azure Cloud
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a2">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Azure Resource Manager
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a3">
              <span data-feather="file" class="align-text-bottom"></span>
             App Insights
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a4">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Azure Web Apps
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a5">
              <span data-feather="file" class="align-text-bottom"></span>
            Azure App Service
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a6">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Azure Active Directory
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a7">
              <span data-feather="file" class="align-text-bottom"></span>
             Azure AD Connect
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a8">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Azure Logic Apps
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a9">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Ways to deploy app in Azure Platform
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Ways to run container in Azure
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a10">
              <span data-feather="file" class="align-text-bottom"></span>
            Azure Container Instances
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a11">
              <span data-feather="file" class="align-text-bottom"></span>
             Azure DevOps
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a12">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           Azure Cosmos Db
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a13">
              <span data-feather="file" class="align-text-bottom"></span>
             Deploy war file in Azure app service.
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  </div></div>
  <div id="google_element" style="float:right"></div>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
             
<label><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br>
<div class="content" >
    <section id="a1" >
<h1> Azure Cloud</h1><br>
Microsoft Azure, often referred to as Azure, is a cloud computing 
platform operated by Microsoft that provides access, management, 
and development of applications and services via globally-distributed 
data centers.<br>
At its core, Azure is a public cloud computing platform—with solutions 
including Infrastructure as a Service (IaaS), Platform as a Service (PaaS), 
and Software as a Service (SaaS) that can be used for services such as 
analytics, virtual computing, storage, networking, and much more.
<b>Azure CLoud Types -</b><br>
Azure supports three approaches to deploying cloud resources - <br>
public<br>
private<br>
hybrid cloud<br>
    </section>
    <section id="a2">
<h1> Azure Resource Manager</h1><br>
Azure Resource Manager enables you to repeatedly deploy your app and your resources in a consistent state. 
It provides a management layer that enables you to create, update, and delete resources in your Azure account.<br>
With ARM tool we can perform following task in Azure -<br>
<b>Deploy app resources</b><br>
Azure Resource Manager enables you to repeatedly deploy your app and have confidence your resources are 
deployed in a consistent state. You define the infrastructure and dependencies for your app in a 
single declarative template.<br>
<b>Organize resources</b><br>
Azure Resource Manager makes it easy for you to manage and visualize resources in your app. 
You no longer have to deploy parts of your app separately and then manually stitch them together.
You put resources with a common lifecycle into a resource group that can be deployed or deleted 
in a single action.<br>
<b>Control access to resources</b><br>
With Azure Resource Manager, you can control who in your organization can perform 
actions on the resources. You manage permissions by defining roles and adding users 
or groups to the roles. For critical resources, you can apply an explicit lock that 
prevents users from deleting or modifying the resource. Azure Resource Manager logs 
all user actions so you can audit those actions.<br>

    </section>
    <section id="a3">
<h1> App Insights</h1><br>
<b>App Insights -></b> It's an application performance management service for web apps 
that allows monitoring of our website performance in Azure.you’re sending the 
information about your website to Azure, the website or application itself doesn’t 
have to be hosted in Azure. For those who work on the dev ops processes, it will 
help you ensure that you are enabling continuous improvement on your web application . 
How Application Insights works is you insert a small package to your application and 
set up the Application Insights resource within Azure, thus sending the data to Azure 
to collect information. The web app is monitored, and it sends telemetry data to the 
Insight portal.
<b>Information that r tracked or collect by this r -></b><br>
* response times and failure rates to find out if there’s an external service that’s 
causing performance issues on your app.<br>
* What are the most popular webpages in your application, at what time of day and 
where is that traffic coming from.<br>
    </section>
    <section id="a4">
<h1>Azure Web Apps</h1><br>
<b>Azure Web Apps -></b> is a platform to host websites.It is a PaaS.<br>
Azure Web Apps is a cloud computing based platform for hosting websites, 
created and operated by Microsoft. It is a platform as a service which allows 
publishing Web apps running on multiple frameworks and written in different 
programming languages,<br>
    </section>
    <section id="a5">
<h1> Azure App Service</h1><br>
<b>Azure App Service -></b> is a platform for building web application. It is a http 
based service enables to build & host web apps ,restful Apis.It is a PaaS.<br>
A Web App is a web application that is hosted in an App Service. The App Service is 
the managed service in Azure that enables you to deploy a web application and make it 
available to your customers on the Internet in a very short amount of time.<br>
Types of Azure App service - <br>
Web Apps.<br>
API Apps.<br>
Logic Apps.<br>
Function Apps<br>
Mobile Apps<br>
Web Apps enables us to host our web application without worrying about the infrastructure 
plumbing that is required. In a traditional hosting mechanism, we need to make sure the 
Server is up, OS is updated .<br>
API apps are offering of App Service that helps to host Web APIs. This enables us to expose 
existing or new APIs. This is also a part of the platform as a service and we don’t need to 
worry about infrastructure plumbing to bring our APIs up and running. <br>
Logic apps enables us to create functional workflows by orchestrating software as a service component.
we can build a logic app that triggers on an event of a new file uploaded on a blob storage 
and performs an action of sending a notification to a user. In many complex solutions, logic 
apps act as a communication channel for various services in microservice architecture.<br>
Azure Functions are event-driven components that eliminate the need for a server to host a 
piece of logical code and process. Basically, Azure functions are used to intercept events 
occurring in any Azure service or third-party service or on-prem system as well. An Azure 
function can run any executable. Azure Functions are also referred to as Server less. It's 
not that Azure functions do not run on servers. They do. They run on Azure service fabric. 
But We do not need to manage the server. Azure functions consume the memory only when it 
Mobile Apps enable us to build a backend for Mobile applications. It can provide capabilities 
to mobile client applications. This can be considered to be the same as a web service to 
support mobile client scenarios. The client can be Windows Universal apps, IOS apps, 
windows apps etc. They use Mobile app SDK to connect with the backendruns and scales 
automatically by making the replica of instances.<br>


    </section>
    <section id="a6" >
<h1> Azure Active Directory</h1><br>
<b>Azure Active Directory called as IaaS(Identity as a service) </b>
If we want to join our device to Azure AD infrastructure than , <br>
type connect on windows -> work or school -> join this device to Azure AD -> connect -> than restart the machine .<br>
<b>Microsoft Intune </b>( use to join our device to microsoft in tune) can than be 
use for the managability of joined local device to azure AD.<br>
<b>Azure AD authentication with share point -></b><br>
SharePoint is a web-based collaborative platform that integrates 
natively with Microsoft Office. Launched in 2001, SharePoint is 
primarily sold as a document management and storage system.
Organizations use Microsoft SharePoint to create websites. You can 
use it as a secure place to store, organize, share, and access information from any device .<br>
<b>SharePoint is an individual platform that allows you to manage 
  and share your files with members of your company, and create an internal intranet.</b><br>
  <b>To configure the federation in Azure AD</b><br>
  Sign in to the Azure portal.<br>
Browse to Azure Active Directory > Enterprise applications, and then select All applications.<br>
To add a new application, select New application at the top of the dialog box.<br>
In the search box, enter SharePoint on-premises. Select SharePoint on-premises from the result pane.<br>


    </section>
    <section id="a7">
<h1> Azure AD Connect</h1>
Azure AD Connect is an on-premises Microsoft application that's designed to meet and accomplish your hybrid identity goals.<br>
<b>Azure AD connect :-</b> It is used to create a hybrid infrastructure between our 
on-premise network & the azure AD.So, this module of Azure AD will create a 
federation between our on-premise n/w & cloud .Therefore ,it can be use when 
we r planning to migrate our on- premise network to azure cloud. And also if 
suppose we want to gave co-existence between microsoft 365 and our on-premise 
mails or share point than also their federation can be achieved using Azure AD connect.<br>
You can find the download for Azure AD Connect on Microsoft Download Center.<br>
<b>Azure AD Connect Benefits :</b><br>
Users use the same passwords to sign into both on-premises and cloud-based applications.<br>
On-premises passwords are never stored in the cloud in any form.Hence , ensure password security.<br>
Protects your user accounts by working seamlessly with Azure AD Conditional Access policies, 
including Multi-Factor Authentication (MFA), blocking legacy authentication and by 
filtering out brute force password attacks.<br>
The communication between an agent and Azure AD is secured using certificate-based 
authentication. These certificates are automatically renewed every few months by Azure AD.<br>
    </section>
    <section id="a8">
<h1> Azure Logic Apps</h1><br>
Azure Logic Apps is a cloud platform where you can create and run automated workflows with little 
to no code.It provides  hundreds of ready-to-use connectors, ranging from SQL Server or 
SAP to Azure Cognitive Services.
Azure Logic Apps is a leading integration platform as a service (iPaaS) built on a 
containerized runtime. Deploy and run Logic Apps anywhere to increase scale and portability 
while automating business-critical workflows anywhere.<br>
Deploy and run Logic Apps anywhere to increase scale and portability while automating business-critical workflows anywhere.
    </section>
    <section id="a9">
<h1> Ways to deploy app in Azure Platform</h1><br>
<b>Azure Service Fabric -></b> When you deploy your application in Azure Service Fabric, 
it becomes automatically load-balanced.Azure Service Fabric is used to run a 
microservices architecture.You can run any executable in Service Fabric.<br>
<b>Virtual Machines</b><br>
<b>Containers </b> ( Web Apps for Containers allows you to use Linux-based containers to 
deploy your application into an Azure App Services Web App ).<br>
<b>Azure App Services -></b> app created using this can be published in google platform, 
aws,and can even published to an on-premise machine.<br>
There are several App Service types:<br>

Web Apps for hosting your web application or API in;<br>
Mobile Apps for hosting a backend for your mobile applications in
Function Apps that run one or more Azure Functions. Azure Functions are small 
pieces of code that scale automatically and can be triggered by outside services<br>
<b>Logic Apps</b>
<b>______________</b><br>
<b>Azure app Service & azure service Fabric</b> Don’t worry about OS but vm & container does.<br>

<b>_________________________</b><br>

    </section>
    <section id="a">
<h1>Ways to run container in Azure</h1><br>
You can run containers in Azure in -<br>
Azure Container Service<br>
Azure Container Instances<br>
Azure Service Fabric <br>
Web App for Containers<br>

    </section>
    <section id="a10">
<h1> Azure Container Instances</h1><br>
Azure Container Instances (ACI) offers an easy way to run containers in the 
Azure cloud, eliminating the need to manage virtual machines (VMs) .While 
ACI does not require the use of Kubernetes.<br>
<b>The main benefit of ACI is run containers without managing servers. </b><br>
Run Docker containers on-demand in a managed, serverless Azure environment. 
Azure Container Instances is a solution for any scenario that can operate in 
isolated containers, without orchestration. Run event-driven applications, 
quickly deploy from your container development pipelines, and run data 
processing and build jobs.

    </section>
    <section id="a11" >
<h1> Azure DevOps</h1><br>
Azure DevOps Server is a Microsoft product that provides version control, 
reporting, requirements management, project management, automated builds, 
testing and release management capabilities. It covers the entire 
application lifecycle and enables DevOps capabilities.<br>
Azure DevOps supports a collaborative culture and set of processes that 
bring together developers, project managers, and contributors to develop 
software. It allows organizations to create and improve products at a 
faster pace than they can with traditional software development approaches.<br>
Azure DevOps is a platform which is made up of a few different products, such as:<br>
<br>
Azure Test Plans<br>
Azure Boards<br>
Azure Repos<br>
Azure Pipeline<br>
Azure Artifacts<br>
Azure DevOps is everything that needs to turn an idea into a working piece 
software. You can plan a project with azure tools.<br>

The azure pipeline is the CI component of azure DevOps. The azure pipeline is 
Microsoft's cloud-native continuous integration server, which allows teams to 
continuously build, test, and deploy all from the cloud. An azure pipeline can 
connect to any number of source code repositories such as Azure Repos, GitHub, 
Tests, to grab code and artifacts for application delivery.<br>

    </section>
    <section id="a12">
<h1> Azure Cosmos Db</h1><br>
<b>Azure Cosmos DB</b> is a fully managed platform-as-a-service (PaaS),is a nosql 
json db with multiple api support.Partitioning is done to maintain scalability.
It is done to avoid any bottleneck on storage or throughout. To scale out the 
huge amount of data in some outside machine instead of scaling up the number 
of disk in the same machine incase of running out of storage scenario.We can 
have numerous logical partition under a given physical partition.<br>
<b> Partition key</b> decides how to partition the data logically under a given physical partition.
How the data is partitioning in physical partition is the work of cloud providers.<br>
Under sql api flow is Create database(created using data exploral) –>create container (pass partition 
key eg..id as /id) {collection will be seeing inside container with triggers, 
  udfs,stored procedure} ->collection->documents(json format)<br>
<b>______________</b><br>
<b>Container</b> can be a collection, graph or table.Collection incase of sql api.<br>
<b>_________________________</b><br>
<b>Data Migration Tool</b><br>
It is an open source cosmos db migration tool use to import documents in the 
form of Json documents  inside a sql api database from different sources. <br>
It requires a connections string to be added &for that connection string we 
need to have cosmos db  account created in the azure environment.(portal.azure.com) <br>
<b>__________________________</b><br>
You can virtually have an unlimited provisioned throughput (RU/s) /-Request 
unit per sec /and storage on a container.<br>
A physical partition can uphold  a max of 10000 RU/sec & 50 GB of data. Azure 
Cosmos DB transparently partitions your container using the logical partition 
key that you specify in order to elastically scale your provisioned throughput 
and storage.After you create an account under your Azure subscription, you can 
manage the data in your account by creating databases, containers, and items.<br>
<b>_______________</b><br>
Azure cosmos db is schema free it provides automatic indexing of JSON document 
without requiring any explicit schema or creation of secondary indexes.<br>
<b>_______________________________________</b><br>
<b>Cross Partition Query -></b><br>
If doesn't filter data based on any particular partition key .it must fan-out 
to all physical partitions where it is run against each partition's index.<br>
Each physical partition has its own index. Therefore, when you run a cross-partition 
query on a container, you are effectively running one query per physical partition.
It uses indexes but still it is not as efficient as in-partition query is.<br>
Making cross partition query is not benefited in the case of large size of 
container as it'll charge with more number of  RUs.<br>
<b>________________________________________</b><br>
<b>Cosmos Db indexing policy</b><br>
In Azure Cosmos DB, every container has an indexing policy that dictates how the 
container's items should be indexed.we can override this automatic behavior to better 
suit your requirements. You can customize a container's indexing policy by setting 
its indexing mode, and include or exclude property paths.<br>
<b>Indexing Mode -</b><br>
<b>Consistent:</b> The index is updated synchronously as you create, update or delete items<br>
<b>None: </b> is disabled on the container. This is commonly used when a container 
is used as a pure key-value store without the need for secondary indexes.<br>
Cosmos DB supports 3 kinds of indexes:<br>
Range Indexes.(Default index type )<br>
Spatial Indexes.<br>
Composite Indexes.( SELECT * FROM Customer c WHERE c.customerType = 
"Business" ORDER BY c.customerType, c.customerValue DESC. ,
SELECT * FROM c ORDER BY c.customerType, c.customerValue DESC , 
SELECT * FROM c WHERE c.customerValue > '10000' AND c.customerType = "Business" )<br>
<b>_______________________________</b><br>
Azure Synapse Link<br>
Azure Synapse Link for Azure Cosmos DB  enables near real time analytics over 
operational data in Azure Cosmos DB. Azure Synapse Link creates a tight 
seamless integration between Azure Cosmos DB and Azure Synapse Analytics.<br>
You can run analytics with low latency in an Azure region by connecting 
your Azure Cosmos DB container to Synapse runtime in that region.It can 
be used in scenarios like - A Data Engineer, who wants to make data 
accessible for consumers, by creating SQL or Spark tables over Azure 
Cosmos DB containers, without manual ETL processes.<br>
Synapse link also make sure that critical business data is stored securely.<br>
<b>________________________</b><br>
Cosmos doesn't support use of distinct inside count ()<br>


    </section>
    <section id="a13">
<h1>Deploy war file in Azure app service.</h1><br>
We can deploy your WAR, JAR, or EAR package to App Service to run your 
Java web app using the Azure CLI, PowerShell, or the Kudu publish API. 
The deployment process places the package on the shared file drive correctly .<br>
Azure App Service is an HTTP-based service for hosting web applications, 
REST APIs, and mobile backends. You can develop in your favourite language, 
be it .NET, .NET Core, Java, Ruby, Node.js, PHP, or Python.<br>

<b>Spring Boot makes it easy to create stand-alone, production-grade Spring-based
 Applications. ( The single spring-boot-starter-web dependency transitively 
 pulls in all dependencies related to web development).</b><br>

<b>GitHub Actions</b> helps you automate your software development workflows from 
within GitHub. To automate means automated process that you set up in your 
GitHub repository. You can build, test, package, release, or deploy any 
project on GitHub with a workflow.ie... it automate the build pipeline.<br>

Change the packaging of the application from jar to war in pom.xml .<br>
Add the tomcat dependency - spring-boot-starter-tomcat<br>
Finally, we'll initialize the Servlet context required by Tomcat by implementing 
the SpringBootServletInitializer interface by the main spring boot class.<br>
Upload to GitHub<br>
Sign-in to Azure portal & create resource group by clicking the "Review + create 
" button.<br>
Find "App Services" -> Then, create a "Web App"-> Then click on the "Deployment"
 button .<br>
Enable <b>GitHub Actions</b> to continuously deploy your app and then enter GitHub 
account information. <br>
click on the "Review + create" button.<br>
Once deployment is completed you can see "Your deployment is complete".<br>
Now Go to resource which will navigate to app service overview page .Copy 
the public URL which is marked on the above image and use postman to test 
the service.<br>


    </section>

   </div>
         
</body></html>