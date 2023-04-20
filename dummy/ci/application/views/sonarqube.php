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

</head>

<body id="page-top">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="container">
        <h1><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a> SonarQube</h1><hr><br>
    <div class="row">


<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">SonarQube Overview</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    It is a software testing tool [static testing tool] which is used to test & improve 
                    the quality of the code & help in fixing the error.If the code is written in a much 
                    complex way Sonar will suggest to write it in a simpler way.If finds security error 
                    ie... It helps to make the code more secure when we r deploying it in any environment.
                    It is configured with Jenkins, so that everytime we don't have to manually involve in 
                    sonar testing of our code .Jenkins will take care to test our code automatically.<br>
SonarQube can track bugs in our code  or can raise issue in a piece of code that it feels faulty.It gives 
us a branch level analysis ie... It not only scan the master branch but also checks the other branches 
introducing error.<br><br>
<b>It perform automatic reviews with static analysis of code to detect bugs and code smells on 29 programming languages.</b>
SonarQube is a Code Quality Assurance tool that collects and analyzes source code, and provides reports 
for the code quality of your project. It combines static and dynamic analysis tools and enables quality 
to be measured continually over time.this tool helps in delivering clean code and reviewing static analysis of code to detect<br>
we can use any one of the supported databases: Oracle, Postgres, SQL Server, and of course MySQL.<br>
<b>Benefits : </b><br>
SonarQube is open source.<br>
SonarQube supports various languages such as C# and Java.<br>
SonarQube reports duplicate code, code coverage, unit testing, code complexity historical, and so on.<br>
We can integrate SonarQube with build tools, such as Gradle and ant.<br>

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
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">SonarLint</div><br>
                </div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    SonarLint is a SonarQube plugin which helps to easily integrate SonarQube with any IDE without any 
need to download & install the whole Sonar software.<br>
It offers reports on duplicate code,unit test,code complexity,code coverage, comments, bugs,any security 
vulnerability.It can track all the repositories at a common place & a profile[which r like some 
specific rule or coding standard to be followed] is set in sonar.Based on that profile our code 
quality is monitored. & vulnerabilities r identified.<br>
<b>SonarQube is different from SonarLint as </b><br>
SonarQube is a server where you can receive your plans and perform code analysis, 
whereas SonarLint is a tool that enables us to relate with SonarQube and perform the 
analysis remotely. SonarLint can be practiced with IDE or can also be done via CLI instructions.

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


<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Code coverage using SonarQube</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Code coverage gives us the metric of the percentage of production code that is tested. either 
unit testing or integration testing.If the code coverage is good than we can have the faster release cycle.<br>
Everytime we will try to build & run our code in azure repo .it will do unit testing, code 
coverage testing and all other testing & pre production steps involved.<br><br>
SonarQube itself does not calculate coverage. To include coverage results in your analysis, you 
must set up a third-party coverage tool and configure SonarQube to import the results produced 
by that tool.<b>SonarQube is used in integration with JaCoCo, a free code coverage library for Java.</b>
the minimum code coverage is set to 50%, even so, sonar is using its own code coverage threshold.<br><br>
<b>Code Coverage Percentage = (Number of lines of code executed)/(Total Number of lines of code in an application) * 100.</b>
</div>
                  
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="col-md-6 ">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Title</div><br>
                </div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    It is a long established fact that a reader will be distracted by the 
readable content of a page when looking at its layout. The point of 
using Lorem Ipsum is that it has a more-or-less normal distribution of 
letters, as opposed to using 'Content here, content here', making it 
look like readable English. Many desktop publishing packages and web 
page editors now use Lorem Ipsum as their default model text, and a 
search for 'lorem ipsum' will uncover many web sites still in their 
infancy. Various versions have evolved over the years, sometimes by 
accident, sometimes on purpose (injected humour and the like).</div>
                   
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->

    </div>
</div>
</body></html>
