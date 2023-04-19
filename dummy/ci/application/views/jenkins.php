<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jenkins Blogs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

</head>

<body id="page-top">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="container">
    <a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a>
        <h1>Jenkins</h1><hr><br>
    <div class="row">

<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Jenkins</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Jenkins is used for implementing CI/CD pipelines. 
                    These pipelines automate the testing and integrate the changes 
                    from other branches to the main branch .<br><br>
Jenkins work as -<br>
<ul>
<li>Developers make the necessary changes and commit them to the source code.</li>
<li>The repository is continuously checked by Jenkins for any changes.</li>
<li>If the build process is successful, an executable is generated.</li>
<li>If no issues are found, it gets deployed to the production server</li>
</ul><br>

Once the software is rolled out in the market, it is constantly under the 
scanner, meaning that the product is bound to receive some feature update 
or a certain version upgrade .<br>
This entire process of integrating changes, testing, and releasing is 
termed as ‘Continuous Integration’ and ‘Continuous Development’.</div>
                  
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-md-6 ">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Bamboo</div><br>
                </div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Bamboo is an automation server used for Continuous Integration. Developed by Atlassian 
                    in 2007, this tool allows the developers to automatically build, document, integrate, 
                    test the source code and prepare an app for deployment.<br>
Most of Bamboo software functionality is pre-built. In other words, this product doesn’t 
require plug-ins. When it comes to Bamboo continuous integration, it also has built-in deployment 
that mean it is seamlessly integrated with products such as Bitbucket and Jira.<br>
When it comes to Bamboo vs Jenkins  user-interface, Bamboo’s is tidier and more intuitive. 
Each time a new task is added, it provides more help and guidance through the plan’s build 
and deployment stages. The biggest difference between Bamboo vs Jenkins is that Jenkins is
Open Source – which means it’s free<br>
 </div>
                   
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    </div> <br>
    <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Jenkins Vs Bamboo</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Jenkins’ integration with Jira and Bitbucket is limited and the process 
                    requires additional components in the configuration which takes time and
                     labour. With Bamboo, basic configuration options are already built-in. 
                     There are several plug-ins that enable Jenkins to integrate with Jira.<br>
                    Jenkins has been a major open-source player for a long time and has 
                    a huge user base because of it. But Bamboo just like other Atlassian 
                    products has much more in-built capabilities and is easier to use. 
                    Jenkins is open-source, and Bamboo is a commercial CI/CD tool that 
                    can be levied against a subscription fee.<br>

While both the tools have their own advantages, however, it ultimately depends on your 
project requirements, budget, and timelines to choose the CI/CD tool for your project.</div>
                  
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-md-6 ">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Jenkins Vs Azure DevOps</div><br>
                </div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                   <b> Azure DevOps </b> is  A cloud-based repository a cloud-based CI tool by Microsoft. 
                    It can be understood as a Software-as-a-Service (SaaS) platform,. It Offers a 
                    platform for containers and Kubernetes<br>
                    <b>Azure Pipelines - </b> Azure Pipeline is used for testing, building, managing, 
                    and deploying applications. It is a cloud service that is readily available for 
                    you to build and test your code project.<br>
<b>Group Tasks – </b> allows you to perform a sequence of tasks, already defined in a pipeline, into a 
single task, whereas Jenkins is generally done by a single user which leads to tracking and accountability problems.<br>
<b>YAML Interface –</b> With YAML in Azure Pipelines, you can configure CI/CD pipeline as code, whereas Jenkins doesn’t 
have a YAML interface.<br>



Jenkins is more flexible to create and deploy complex workflows, Azure DevOps is faster to adapt. 
In most cases, organizations use both the tools and in such cases, Azure Pipelines supports integration with Jenkins
As azure DevOps is cloud base  so it Offers the latest features with frequent updates, 
Gives higher customer satisfaction than jenkins or bamboo.<br>

<b>Does Azure DevOps have jenkins --- </b><br>
Azure Pipelines supports integration with Jenkins so that you can use Jenkins for Continuous 
Integration (CI) while gaining several DevOps benefits from an Azure Pipelines 
release pipeline that deploys to Azure.<br>
<b>Code Migrate from jenkins to DevOps --- </b><br>
In Azure DevOps project, go to Project Settings -> Service Hooks. Then select 
Create Subscription and choose Jenkins. Use the “Code pushed” event and set 
any specific filters as necessary for</div>
                   
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</div>
</body></html>
