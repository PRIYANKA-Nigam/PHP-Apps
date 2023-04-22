
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jira Blogs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style>
#icon{
  width: 30px;
  cursor: pointer;
}
:root{
  --primary-color:#edf2fc;
  --secondary-color:white;
}
.dark-theme{
  --primary-color:yellow;
  --secondary-color:red;
}
.g{
  background: var(--primary-color);
}
.gtl{
  background: var(--secondary-color);
}
body{
  background: var(--primary-color);
}
      </style>
</head>

<body id="page-top">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="container">
    <div id="google_element" style="float:right"></div>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
             <img src='<?=base_url().'setting.jpg'?>' id="icon" width="25px" height="25px" >
        <h1><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a> Spinnaker</h1><hr><br>
    <div class="row">


<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body ">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Spinnaker</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 gtl">
                    It's a piece of deployment software. Spinnaker is a free and open-source 
                    continuous delivery software platform originally developed by Netflix and 
                    extended by Google.[2] It is designed to work with Kubernetes, Google Cloud 
                    Platform, AWS, Microsoft Azure and Oracle Cloud.<br>
                    Spinnaker is not a build tool.<br>
Build tools are commonly known as programs that automate the process of building an executable 
application from source code. This building process includes activities like compiling, linking 
and packaging the code into an executable form.eg.. Ant,Maven,Docker etc.
Build tools automates the process of building an executable. This gives each developer the 
ability to build and run software on their machine. A build tool can automate the process of 
downloading and managing dependencies for you. ... Build tool will ensure correct versions are used.<br>
Git and Gradle are both open source tools.
                </div>
                  
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
        <div class="card-body ">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Spinnaker Vs Jenkins</div><br>
                </div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1 gtl">
                    Many organizations are using a combination of Jenkins and a tool like Ansible, Puppet, Chef, or Salt 
                    to automate their CI/CD pipelines but find themselves having to do many steps manually or using a 
                    series of scripts that can be hard to maintain. Many organizations manually move software from 
                    Development to Staging to Production with time-consuming manual processes.<br>
Spinnaker can fully automate these processes. Spinnaker can fully integrate with standard CI/CD tools such as Jenkins, 
SonarQube, and Artifactory but add a layer of automation to automate software deployments to Development, Staging, 
and Production, eliminating many manual steps.<br>
Jenkins X provides developers a better way to automate their CI/CD process for Kubernetes than Jenkins alone but 
still lacks the Spinnaker deployment model’s capabilities.<br>
Jenkins is for Continuous Integration.Jenkins was never designed for cloud deployment Spinnaker is for Continuous 
Deployment<br>

Jenkins is currently the most popular Continuous Integration Tool. It has an extensive community with a large catalog 
of plugins available. However, it is not ideal for continuous delivery because -<br>
To create deployment workflow, stages, and deployment strategies developer needs to write scripts and also maintain 
those scripts. <br>
Spinnaker was never intended to be a build tool.So, Spinnaker still relies on a build server and must integrate 
with tools like Jenkins.Spinnaker takes advantage of existing build tools like Jenkins to start jobs and monitor 
their progress and results. Spinnaker can make the deployment phase much more flexible. <br>Spinnaker cannot replace 
Jenkins as a CI tool, but Spinnaker can make the deployment to the cloud process much more straightforward.
<b>Even Jenkins being originally a Continuous Integration solution, and as a Continuous Deployment 
    solution as well, but Spinnaker brought to us a more focused approach allowing us to spend less time by 
    creating and managing pipelines. While on Jenkins we need to install dozens of plugin to achieve our goals, 
    Spinnaker has all what we need out of the box. </b>
<br></div>
                   
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    </div> <br>
    <div class="row">


<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body ">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Spinnaker Vs Kubernetes</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 gtl">
                    Kubernetes is an open-source container cluster manager. Spinnaker is an 
                    open source continuous delivery platform with a range of cluster management 
                    and deployment management features, originally developed at Netflix.<br>
                <b>Spinnaker listens for a new image in the container registry and triggers the 
                    delivery pipeline for deployment. The Spinnaker pipeline creates the necessary 
                    configurations (application configs, instances, scaling, etc.) and deploys the 
                    container in a target Kubernetes cluster after manual review.</b>
                    A Spinnaker Instance maps to a Kubernetes Pod . What differentiates this from 
                    other Cloud Providers is the ability for Pods to run multiple containers at once,
                     whereas typical IAAS providers in Spinnaker run exactly one image per Instance.<br>
                </div>
                  
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>




    </div>
</div>
<script> 
     var icon=document.getElementById("icon");
     icon.onclick =function(){
      document.body.classList.toggle("dark-theme");
      if(document.body.classList.contains("dark-theme")){
        icon.src="<?=base_url().'setting.jpg'?>";
      }else{
        icon.src="<?=base_url().'moon.jpg'?>";
      }
     }
     </script>         
</body></html>
