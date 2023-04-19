<!DOCTYPE html>
<html>
    <head><title>JAR Blog</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
 <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/5.3/examples/dashboard/dashboard.css">
    

    

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>

    <a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a>
<div class="col-lg-12 mb-4">
                           <div class="card shadow mb-4">
                          <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><b>Deployment File Types</b></h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                           <div class="album py-5 bg-light">
                              <div class="container">
                                 <div class="row">
                                    <h1>JAR File</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              JAR[Java Archive ] files r combination of .class files.All these class files or
               bytecodes r compressed to form a .jar files. In short these jar files r 
               compressed format of compiled java programs.So, these r .class files along 
               with some other files & its meta data packaged together in the form of zip file.<br>
A jar file encapsulates 1 or more java files {.class files} , a manifest & a descriptor.
In short it contains compressed version of java class fils,audio,image files or directories.<br>
________<br>
These jar files r needed to be used by other projects.We can easily distribute our source 
code to any1.These jar files can also be used for direct execution of our java programs 
without the use of any IDE.<br>
<b>To execute a jar file from cmd -></b><br>
 cd {path of that jar}<br>
Java -jar {my jar file name}<br>
_____________<br>
On decompressing a jar file we'll get a package containing .class file + metaInf file
(which is the information about the main class).<br>
The META-INF/MANIFEST.MF file may contain additional metadata about the files stored in the archive.<br>
As we compile our java program of .java  to .class file .Similarly, we can convert 
our .class file back to the .java files using java decompiler.We can also use this .class file as a Plugin in eclipse.
                                    
                         </div></div></div></div>
                         <h1>WAR File</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              WAR files is a combination of web related pages such as html,jsp,servlet,css,js 
              etc.War is the archive file for web application.<br>
              a WAR file (Web Application Resource or Web application ARchive) is a file used to 
              distribute a collection of JAR-files, JavaServer Pages, Java Servlets, Java classes, 
              XML files, tag libraries, static web pages (HTML and related files) and other 
              resources that together constitute a web .<br>
              A WAR file is used to deploy a Java EE web application in an application server.
               Inside a WAR file, all the web components are packed into one single unit. These 
               include JAR files, JavaServer Pages, Java servlets, Java class files, XML files, 
               HTML files, and other resource files that we need for web applications.<br>
               These archive files have the . war extension and are used to package web 
               applications that we can deploy on any Servlet/JSP container.
          
              <b>Advantage of using WAR Files -</b><br>
              <ul>
             <li> Easy testing and deployment of web applications · </li>
              <li>Easy identification of the version of the deployed application </li>
              </ul>
                                    
                         </div></div></div></div>
                         <h1>EAR File</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              An EAR file is a critical piece in deploying a service application to a production server. 
              An enterprise archive (EAR) file is a compressed file that contains the libraries, 
              enterprise beans, and JAR files that the application requires for deployment.<br>
                                       EAR Is the superset of jar as well as war files.Jar files are the 
                                       subset of war and war files are the subset of EAR.<br>
                        <b>Difference between WAR,JAR & EAR</b><br>
                        An EAR file requires a fully Java Platform, Enterprise Edition (Java EE)- 
                        or Jakarta Enterprise Edition (EE)-compliant application server, such as 
                        WebSphere or JBoss, to run. A WAR file only requires a Java EE Web 
                        Profile-compliant application server to run, and a JAR file only requires 
                        a Java installation.
                                    
                         </div></div></div></div>
                         <h1>TAR File</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              A tar (tape archive) file format is an archive created by tar, 
              a UNIX-based utility used to package files together for backup or 
              distribution purposes. It contains multiple files (also known as a tarball) 
              stored in an uncompressed format along with metadata about the archive. 
              Tar files are not compressed archive files.<br>
              <b>Advantages of using TAR Files </b><br>
              <ul>
             <li> Tar, when it comes to compression, has a compression ratio of 50%, which means it compresses efficiently.</li>
<li>Drastically reduces the size of packaged files and folders.</li>
<li>Tar does not alter the features of files and directories.</li>
<li>Tar is widely available across most common Linux versions.</li>
              </ul>
                                    
                         </div></div></div></div>
                                 </div></div></div></div>