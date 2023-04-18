<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Maven Blogs</title>
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
    height: 100vh;
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
#m1{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m5{
    background: linear-gradient(-50deg,lightblue 40%,yellow 40%);
}
#m3{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#m4{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#m6{
    background: linear-gradient(-50deg,crimson 40%,yellow 40%);
}
#m7{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m8{
    background: linear-gradient(-50deg,lightblue 40%,yellow 40%);
}
#m9{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#m10{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#m11{
    background: linear-gradient(-50deg,crimson 40%,yellow 40%);
}
#m12{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m13{
    background: linear-gradient(-50deg,lightblue 40%,yellow 40%);
}
#m14{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#m15{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#m16{
    background: linear-gradient(-50deg,crimson 40%,yellow 40%);
}
#m17{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#m18{
    background: linear-gradient(-50deg,lightblue 40%,yellow 40%);
}
#m19{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#m20{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
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
          Maven
            </a>
          </li>
       
          <hr class="sidebar-divider">
             <li class="nav-item">
            <a class="nav-link" href="#m1">
              <span data-feather="file" class="align-text-bottom"></span>
          What is Maven.
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m2">
              <span data-feather="file" class="align-text-bottom"></span>
         Maven Vs Gradle
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="#m3">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
         Maven Lifecycle Methods
            </a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="#m3">
              <span data-feather="file" class="align-text-bottom"></span>
            mvn build
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m4">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
         mvn clean
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m5">
              <span data-feather="file" class="align-text-bottom"></span>
           mvn install
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m6">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           mvn deploy
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m7">
              <span data-feather="file" class="align-text-bottom"></span>
           mvn test
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m8">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
          mvn package
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m9">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
          mvn verify
            </a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="#m11">
              <span data-feather="file" class="align-text-bottom"></span>
         Maven Commands
            </a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="#m11">
              <span data-feather="file" class="align-text-bottom"></span>
          clean install -x
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m12">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
          mvn clean -x
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m13">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           mvn clean install
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m14">
              <span data-feather="file" class="align-text-bottom"></span>
         Maven Profiles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m15">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
         Global Profiles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m16">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
        Local Profiles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m17">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
          User defined Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m18">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
          Settings.xml
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m19">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
         Archetype
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#m20">
              <span data-feather="file" class="align-text-bottom"></span>
          Ways to run a spring boot application.
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  </div></div>
<label><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br>
<div class="content" >
    <section id="m1" >
<h1>What is Maven.</h1>
Maven is a popular open-source build tool developed by the Apache 
Group to build, publish, and deploy several projects at once for 
better project management. <br>
Maven comes with pre-defined targets for performing certain 
well-defined tasks such as compilation of code and its packaging. 
Maven dynamically downloads Java libraries and Maven plug-ins 
from one or more repositories such as the Maven 2 Central 
Repository, and stores them in a local cache.
With Maven, all dependencies of your project are maintained in 
a single pom.xml file. Maven takes care of downloading these 
dependencies into the local repositories and makes them available 
for the project.
    </section>
    <section id="m2">
<h1>Maven Vs Gradle</h1>
<b>Gradle -</b> It's a build automation tool that is open-source 
and builds on concepts of Apache Maven and Apache Ant.It is capable
of building any type of software.It provides support for building,
testing and deploying softwares on different platform.It allows to 
write buildscripts with java.It is easy to migrate to gradle from
maven or other build tools.<br>
Gradle provides integration with several development tools and servers
including - eclipse,Intellij,jenkins and android studio.<br><br>
<b>Maven -</b>Maven is older open-source project management tool
primarily used for java projects.<br>
<b>Working difference -</b><br>
<ul>
  <li>
    Gradle is used for large projects while maven is specifically
    designed for smaller projects.
  </li>
  <li>
    Gradle avoids the work by tracking input and output tasks ans only 
    runs the task that have been changed.Hence gives a faster
    performance.Maven doesn't use build cache. thus, its' build time is 
    slower than gradle.

  </li>
</ul>
    </section>
    <section id="m3">
<h1> Maven Lifecycle Methods</h1>
A Build Lifecycle is a well-defined sequence of phases, which define 
the order in which the goals are to be executed.<br>
When Maven starts building a project, it steps through a defined 
sequence of phases and executes goals.A goal represents a specific 
task which contributes to the building and managing of a project. <br><br>
The Maven build lifecycle has 8-stages by default. These are in a 
particular Maven lifecycle order, as mentioned below.<br>
<ul>
<li>Validation</li>
<li>Compilation</li>
<li>Testing</li>
<li>Packaging</li>
<li>Integration testing</li>
<li>Verification</li>
<li>Installation</li>
<li>Deployment.</li>
<ul>   
<h1>mvn build</h1>
Maven Build -> It does the dependency management for Eclipse build 
path based on Maven's pom.xml. The result will probably be a .war 
file in the target subfolder of your project.( A goal in maven build
 is necessary to specify otherwise errors will come.This goal is 1 of 
 the lifecycle phase.This goal launches the maven web application on 
 tomcat on port 8080 ). Whenever a goal (a specific build task) is to 
 be executed, Maven looks for the configuration details in POM.It 
 resolves Maven dependencies from the Eclipse workspace without 
 installing to local Maven repository (requires dependency project 
 be in same workspace).
    </section>
    <section id="m4">
<h1>mvn clean</h1>
Maven clean plugins ->  The Maven Clean Plugin, as the name implies, 
attempts to clean the files and directories generated by Maven during 
its build. While there are plugins that generate additional files, 
the Clean Plugin assumes that these files are generated inside the 
target directory.<br>
Maven clean - The first command deletes target directory and then 
builds all you code and installs artifacts into local repository. 
It cleans the target folder,clean every file and previous results of 
the previous builds.
    </section>
    <section id="m5">
<h1>mvn install</h1>
<b>Maven install -</b> Maven install is Maven build with added additional 
step. That additional step is uploading the result from the Maven 
build script to your local Maven repository.<br>
Maven some build lifecycle phases - compile,test,package,install.<br>
<b>Maven install</b> is one step among the maven lifecycle which copies 
the packaged binary in your local maven repository<br>
When you do a Mvn install, it will roughly:<br>
Generate whatever it needs,<br>
Compile the sources,<br>
Copy other resources,<br>
Create the artifact for your project,<br>
Run unit tests,<br>
Copy the artifact to the local Mvn repository (this is usually $HOME/.m2/repository).<br>
So a Mvn clean install will first clean the target and then run the steps above.
mvn install is to do the whole build cycle again with validate, compile, 
test, package, verify and install the created artifacts (e.g. a JAR or WAR file … ) 
into the local repository (defaults to ${user.home}/.m2/repository)
    </section>
    <section id="m6">
<h1>mvn deploy</h1>
install phase installs the package in local/remote maven repository.Deploy
phase Copies the final package to the remote repository.It will deploy our build , 
copy the final package to the remote repository or sharing the build package 
to other developers.
    </section>
    <section id="m7">
<h1>mvn test</h1>
To run the unit test.This phase tests the compiled source code suitable for 
testing framework.
    </section>
    <section id="m8">
<h1>mvn package</h1>
It will compile the code &  packaged it in jar format.This phase creates 
the JAR/WAR package as mentioned in the packaging in POM.xml.
    </section>
    <section id="m9">
<h1>mvn verify</h1>
It is for integration test.
The main difference between mvn verify and mvn test is -<br>
when you run a Maven goal, it will run any previous goal. The order of basic phases is:
<ul>
<li>Validate</li>
<li>Compile</li>
<li>Test</li>
<li>Package</li>
<li>Verify</li>
<li>Install</li>
<li>Deploy</li>
<ul>
If you run Test, Maven will execute validate, compile and test.
Based on this, the first point is that verify includes test.
TEST - test the compiled source code using a suitable unit testing 
framework. These tests should not require the code be packaged or deployed
VERIFY - run any checks on results of integration tests to ensure quality 
criteria are met.
    </section>
    <section id="m11">
<h1>Maven Commands</h1><br>
<b>clean install -x -></b> check if there is any error in debug mode for 
successfully building the maven.<br>
<b>mvn clean -x -></b> get more information about why our build is failing 
on using mvn clean.<br>
<b>mvn compile:</b><br>
This command is used to compile the project’s source code.<br>
<b>mvn clean:</b><br>
Here, the project is cleaned to remove all previous-build files generated.<br>
<b>mvn test:</b><br>
With this command, one can run project testing steps.<br>
<b>mvn test-compile:</b><br>
This command is used to compile the code from the test source.<br>
<b>mvn install:</b><br>
This command helps deploys the packaged WAR/JAR files storing them
as classes in the local repository.<br>
<b>mvn package:</b><br>
With this Maven lifecycle command, one packages or creates a 
project WAR or JAR file to be able to use a distributable format.<br>
<b>mvn deploy:</b><br>
The deploy command occurs after compilation, running project tests, 
and project building. Here the packaged WAR/JAR files are copied 
to the remote repository for use by other developers.<br>
    </section>
    <section id="m12">
<h1>Maven Commands</h1><br>
<b>clean install -x -></b> check if there is any error in debug mode for 
successfully building the maven.<br>
<b>mvn clean -x -></b> get more information about why our build is failing 
on using mvn clean.<br>
<b>mvn compile:</b><br>
This command is used to compile the project’s source code.<br>
<b>mvn clean:</b><br>
Here, the project is cleaned to remove all previous-build files generated.<br>
<b>mvn test:</b><br>
With this command, one can run project testing steps.<br>
<b>mvn test-compile:</b><br>
This command is used to compile the code from the test source.<br>
<b>mvn install:</b><br>
This command helps deploys the packaged WAR/JAR files storing them
as classes in the local repository.<br>
<b>mvn package:</b><br>
With this Maven lifecycle command, one packages or creates a 
project WAR or JAR file to be able to use a distributable format.<br>
<b>mvn deploy:</b><br>
The deploy command occurs after compilation, running project tests, 
and project building. Here the packaged WAR/JAR files are copied 
to the remote repository for use by other developers.<br>
    </section>
    <section id="m13">
<h1>Maven Commands</h1><br>
<b>clean install -x -></b> check if there is any error in debug mode for 
successfully building the maven.<br>
<b>mvn clean -x -></b> get more information about why our build is failing 
on using mvn clean.<br>
<b>mvn compile:</b><br>
This command is used to compile the project’s source code.<br>
<b>mvn clean:</b><br>
Here, the project is cleaned to remove all previous-build files generated.<br>
<b>mvn test:</b><br>
With this command, one can run project testing steps.<br>
<b>mvn test-compile:</b><br>
This command is used to compile the code from the test source.<br>
<b>mvn install:</b><br>
This command helps deploys the packaged WAR/JAR files storing them
as classes in the local repository.<br>
<b>mvn package:</b><br>
With this Maven lifecycle command, one packages or creates a 
project WAR or JAR file to be able to use a distributable format.<br>
<b>mvn deploy:</b><br>
The deploy command occurs after compilation, running project tests, 
and project building. Here the packaged WAR/JAR files are copied 
to the remote repository for use by other developers.<br>
    </section>
    <section id="m14">
<h1>Maven Build Profiles</h1><br>
<b>Profile - </b<br>A profile in Maven is an alternative set of configuration 
values which set or override default values. Using a profile, you 
can customize a build for different environments. Profiles are 
configured in the pom. xml and are given an identifier.<br>
<ul>
<li>Global Profile - in effective pom.xml</li>
<li>Local profile(per project) - In settings. xml</li>
<li>User defined profile(per user) - Modified settings.xml</li>
</ul><br>
Profile Activation via Maven Settings
Open Maven settings.xml file available in %USER_HOME%/.m2 directory 
where %USER_HOME% represents the user home directory. If settings.xml 
file is not there, then create a new one.
    </section>
    <section id="m15">
<h1>Maven Build Profiles</h1><br>
<b>Profile - </b<br>A profile in Maven is an alternative set of configuration 
values which set or override default values. Using a profile, you 
can customize a build for different environments. Profiles are 
configured in the pom. xml and are given an identifier.<br>
<ul>
<li>Global Profile - in effective pom.xml</li>
<li>Local profile(per project) - In settings. xml</li>
<li>User defined profile(per user) - Modified settings.xml</li>
</ul><br>
Profile Activation via Maven Settings
Open Maven settings.xml file available in %USER_HOME%/.m2 directory 
where %USER_HOME% represents the user home directory. If settings.xml 
file is not there, then create a new one.
    </section>
    <section id="m16">
<h1>Maven Build Profiles</h1><br>
<b>Profile - </b<br>A profile in Maven is an alternative set of configuration 
values which set or override default values. Using a profile, you 
can customize a build for different environments. Profiles are 
configured in the pom. xml and are given an identifier.<br>
<ul>
<li>Global Profile - in effective pom.xml</li>
<li>Local profile(per project) - In settings. xml</li>
<li>User defined profile(per user) - Modified settings.xml</li>
</ul><br>
Profile Activation via Maven Settings
Open Maven settings.xml file available in %USER_HOME%/.m2 directory 
where %USER_HOME% represents the user home directory. If settings.xml 
file is not there, then create a new one.
    </section>
    <section id="m17">
<h1>Maven Build Profiles</h1><br>
<b>Profile - </b<br>A profile in Maven is an alternative set of configuration 
values which set or override default values. Using a profile, you 
can customize a build for different environments. Profiles are 
configured in the pom. xml and are given an identifier.<br>
<ul>
<li>Global Profile - in effective pom.xml</li>
<li>Local profile(per project) - In settings. xml</li>
<li>User defined profile(per user) - Modified settings.xml</li>
</ul><br>
Profile Activation via Maven Settings
Open Maven settings.xml file available in %USER_HOME%/.m2 directory 
where %USER_HOME% represents the user home directory. If settings.xml 
file is not there, then create a new one.
    </section>
    <section id="m18">
<h1>Settings.xml</h1><br>
The Settings. xml file contains adjustable parameters about server 
administration within an Installation. Such parameters include the 
ability to adjust the size of the System Logs, Email Server settings, 
and settings specific to the database the platform is hosted on.<br>
It allows us to specify which local and remote repository location 
it will use. It can also be used to store data which we don't want
to show in our source code such as credentials.It allows values Such
as local repository location or path, alternate remote repository 
server authenication information and other information.<br><br>
Whaen we do maven configuration for the first time and run some maven 
goals than in the user home directory a .m2 folder gets created.Inside
this .m2 folder, we can copy settings.xml file from the maven installtion 
directory.Copying the settings.xml file inside .m2 folder gives user 
specific configuaration and incase of eclipse IDE, we have to specify
the location of this file for <b>user specific configuration</b><br>
<br>
By-default , the path for local repository is given inside .m2 folder
but if we want to give any custom path for the local repository than
we can give it under settings.xml in <localRepository> tag.
    </section>
    <section id="m19">
<h1>Archetype</h1><br>
Archetype tells maven the type of project we r building.<br> 
That can be a java project archetype,spring applications 
archetype.,hibernate application archetype.<br> Different types 
of archetype r available inside maven repository. <br>
If we want to build a java application we will include web archetype.<br>
The combination of group Id ,artifactId ,version decides the 
type of artifact we r using.scope tag defines the scope for our artifact.<br>
mvn archetype : generate -> it'll fetch all the archetype from 
central repository and will ask for the user input for the artifact Id,groupId version.
    </section>  
    <section id="m20">
<h1>Ways to run a spring boot application</h1><br>
Ways to run a spring boot app
1.using maven artifact or maven descriptor which lets to execute 
maven command inorder to built a jar file.<br>
Eg.. Running a jar file -> java -jar (jar file)<br>
2.Plugins in pom.xml (running directly without creating any jar file)
Eg..  ./mvnw spring-boot:run<br>
(Maven install takes our spring project & generate the maven artifact .
The generated maven artifact is gonna be a jar file.On running mvn 
install , the target folder is generated.  )<br>
(The jar file generated not only contains the compiled sources from 
our spring project it also contain things needed to run the application )
    </section>
   </div>
</body></html>