<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>DevOps Blogs</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style2.css');    ?>">
<style>
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
    width: 200vh;
    display: inline-flexbox;
    align-items: left;
    margin-top: 35px;
    margin-left: 350px;
    padding-left: 350px;
    padding-top: 130px;
    justify-content: center;
    text-transform: uppercase;
}


</style>
</head>
<body >
    <!-- <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div> -->
   <div class="side-bar" >
    <!-- <div class="close-btn">
        <i class="fas fa-times"></i>
    </div> -->
    <div class="menu">
        <div> <span data-feather="home" class="align-text-bottom" style="color:white;margin-left:50px;font-size:30px">
        DevOps</span><hr></div>
        <div class="item"> <a href="#d1"><i class="fas fa-desktop"></i>Cloud Computing</a> </div>
        <div class="item"> <a href="#d2"><i class="fas fa-desktop"></i>Virtualisation</a> </div>
        <div class="item">
             <a class="sub-btn" href="#d3"><i class="fas fa-table"></i>Virtualisation types<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#d3" class="sub-item"><i class="far fa-star"></i>Application Virtualisation</a>
                <a href="#d4" class="sub-item"><i class="far fa-star"></i>Network Virtualisation</a>
                <a href="#d5" class="sub-item"><i class="far fa-star"></i>Desktop Virtualisation</a>
                <a href="#d6" class="sub-item"><i class="far fa-star"></i>Storage Virtualisation</a>
                <a href="#d7" class="sub-item"><i class="far fa-star"></i>Server Virtualisation</a>
                <a href="#d8" class="sub-item"><i class="far fa-star"></i>Data Virtualisation</a>
            </div>
            </div>
        <div class="item"> <a href="#d9"><i class="fas fa-th"></i>Virtual Machine</a> </div>
    <div class="item"> <a href="#d10"><i class="fas fa-th"></i>Container</a> </div>
    <div class="item"> <a href="#d11"><i class="fas fa-th"></i>Container Runtime</a> </div>
    <div class="item"> <a href="#d12"><i class="fas fa-th"></i>Virtual Machine Vs Container</a> </div>
    <div class="item" > <a class="sub-btn" href="#d13"><i class="fas fa-cogs"></i>Kubernetes<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
                <a href="#d13" class="sub-item"><i class="far fa-star"></i>Kubelet</a>
                <a href="#d14" class="sub-item"><i class="far fa-star"></i>Kube proxy</a>
                <a href="#d15" class="sub-item"><i class="far fa-star"></i>Kubectl</a>
                <a href="#d16" class="sub-item"><i class="far fa-star"></i>Minikube</a>
    </div>  </div>
        <div class="item" > <a class="sub-btn" href="#d17"><i class="fas fa-cogs"></i>Docker<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
                <a href="#d17" class="sub-item"><i class="far fa-star"></i>Docker image</a>
                <a href="#d18" class="sub-item"><i class="far fa-star"></i>Dangling images</a>
                <a href="#d19" class="sub-item"><i class="far fa-star"></i>Docker Hub</a>
                <a href="#d20" class="sub-item"><i class="far fa-star"></i>Docker Swarm</a>
                <a href="#d21" class="sub-item"><i class="far fa-star"></i>Docker Compose</a>
                <a href="#d22" class="sub-item"><i class="far fa-star"></i>Docker Registry</a>
    </div>  </div>
    <div class="item"> <a href="#d23"><i class="fas fa-info-circle"></i>Is Docker hub a registry or repository?</a> </div>
    <div class="item"> <a href="#d24"><i class="fas fa-info-circle"></i>Kubernetes Vs Docker compose</a> </div>
    <div class="item"> <a href="#d25"><i class="fas fa-info-circle"></i>Kubernetes Vs Docker swarm</a> </div>
    <div class="item" > <a class="sub-btn" href="#d26"><i class="fas fa-cogs"></i>Docker-Kubernetes twinning<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
                <a href="#d26" class="sub-item"><i class="far fa-star"></i>Docker without Kubernetes using Docker compose</a>
                <a href="#d27" class="sub-item"><i class="far fa-star"></i>Kubernetes without Docker using other container runtimes</a>
        </div></div>
    <div class="item"> <a href="#d28"><i class="fas fa-info-circle"></i>Container without Docker</a> </div>
    <div class="item"> <a href="#d29"><i class="fas fa-info-circle"></i>Docker/Kubernetes/Nagios</a> </div>
    <div class="item"> <a href="#d30"><i class="fas fa-info-circle"></i>Why deploying microservice on container is better</a> </div>
    </div>
   </div>
   <!-- <section class="main">
    <h1>Sidebar Menu with <br>Sub-Menus</h1> -->
    <label><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br>
<div class="content" >
    <section id="d1" >
<h1>Cloud Computing</h1><br>
Cloud computing is the on-demand availability of computer system resources, 
especially data storage and computing power, without direct active management 
by the user. Large clouds often have functions distributed over multiple 
locations, each of which is a data center.Simply put, cloud computing is the 
delivery of computing services—including servers, storage, databases, networking, 
software, analytics, and intelligence—over the internet (“the cloud”) to offer 
faster innovation, flexible resources, and economies of scale.<br>
<br>
<b>What cloud actually does?</b><br>
cloud computing is a range of services delivered over the internet, or “the cloud.” 
It means using remote servers to store and access data instead of relying on local 
hard drives and private datacenters.<br>
There are four main types of cloud computing:<br>
 private clouds <br>
 public clouds<br>
 hybrid clouds<br>
  multiclouds<br><br>
  <b>Public cloud — </b> and other info delivered over the internet that can be shared with various people and organizations. <br>
  <b>Private cloud —</b> data and other info that is only accessible to users within your organization. <br>
  <b>Hybrid cloud —</b> a combination of the two. This environment uses public and private clouds.<br>
  <b>Multicloud - </b> It is used when an organization uses cloud computing services from at least two cloud providers 
  to run their applications. Instead of using a single-cloud stack, multicloud environments typically 
  include a combination of two or more public clouds, two or more private clouds, or some combination of both.<br>
    </section>
    <section id="d2">
<h1>Virtualisation</h1><br>
In computing, virtualization or virtualisation is the act of creating a virtual 
version of something at the same abstraction level, including virtual computer 
hardware platforms, storage devices, and computer network resources.It allows you to 
use a physical machine's full capacity by distributing its capabilities among many 
users or environments<br>
<b>Benefit -</b><br>
Virtualization relies on software to simulate hardware functionality 
and create a virtual computer system. This enables IT organizations 
to run more than one virtual system – and multiple operating systems 
and applications – on a single server. The resulting benefits include 
economies of scale and greater efficiency.<br>

Virtual machines and hypervisors are two important concepts in virtualization.<br>

<b>Virtual machine</b><br>
A virtual machine is a software-defined computer that runs on a physical 
computer with a separate operating system and computing resources. The 
physical computer is called the host machine and virtual machines are 
guest machines. Multiple virtual machines can run on a single physical 
machine. Virtual machines are abstracted from the computer hardware 
by a hypervisor.<br>

<b>Hypervisor</b><br>
The hypervisor is a software component that manages multiple virtual 
machines in a computer. It ensures that each virtual machine gets the 
allocated resources and does not interfere with the operation of 
other virtual machines. There are two types of hypervisors.<br>
<b>Software use for achieving virtualisation :</b><br>
VMware Fusion, Parallels Desktop, Oracle VM Virtual Box and VMware Workstation are the 
top four software that is really good for virtualization. Oracle VM Virtual Box gives 
you really nice features at a free of cost. It can also be used on Mac, Windows, Linux, 
and Solaris.<br>
<b>Pros of Virtualization. </b><br>
Uses Hardware Efficiently. Available at all Times. Recovery is Easy. Quick and Easy Setup.<br>
<b>Cons of Virtualization. </b><br>
High Initial Investment. Data Can be at Risk. Quick Scalability is a Challenge.<br>

    </section>
    <section id="d3">
<h1>Virtualisation types</h1>
You can use virtualization technology to get the functions of many different 
types of physical infrastructure and all the benefits of a virtualized 
environment. You can go beyond virtual machines to create a collection 
of virtual resources in your virtual environment. <br>
<b>Application Virtualisation : </b><br>
Application virtualization pulls out the functions of applications to run 
on operating systems other than the operating systems for which they were 
designed. For example, users can run a Microsoft Windows application on a 
Linux machine without changing the machine configuration.
    </section>
    <section id="d4">
<h1>Network Virtualisation</h1><br>
Any computer network has hardware elements such as switches, routers, and 
firewalls. An organization with offices in multiple geographic locations 
can have several different network technologies working together to create 
its enterprise network. Network virtualization is a process that combines 
all of these network resources to centralize administrative tasks. 
Administrators can adjust and control these elements virtually without 
touching the physical components, which greatly simplifies network management.

    </section>
    <section id="d5">
<h1>Desktop Virtualisation</h1><br>
Desktop virtualization is a software technology that separates the desktop 
environment and associated application software from the physical client 
device that is used to access it.<br>
<b>Benefit -</b><br>
Using desktop virtualization allows enterprises to provision just a few types 
of desktops to its users, reducing the need to configure desktops for each 
employee. Additionally, because virtual desktop VDI can be provisioned so 
quickly, it's easier for the company to onboard new hires with just a few 
mouse clicks.<br>
<b>VDI or remote desktop connection is an example of Desktop Virtualisation which has 
    frequent use in IT industry.
</b>
    </section>
    <section id="d6" >
<h1>Storage Virtualisation</h1><br>
Storage virtualization combines the functions of physical storage devices 
such as network attached storage (NAS) and storage area network (SAN). 
You can pool the storage hardware in your data center, even if it is from 
different vendors or of different types. Storage virtualization uses all 
your physical data storage and creates a large unit of virtual storage 
that you can assign and control by using management software.<br>
There are three main types of server virtualization: <br>
full-virtualization<br>
para-virtualization<br>
OS-level virtualization.<br>

    </section>
    <section id="d7">
<h1>Server Virtualisation</h1><br>
Server virtualization is a process that partitions a physical server 
into multiple virtual servers. It is an efficient and cost-effective 
way to use server resources and deploy IT services in an organization. 
Without server virtualization, physical servers use only a small amount 
of their processing capacities, which leave devices idle.

    </section>
    <section id="d8">
<h1>Data Virtualisation</h1><br>
Modern organizations collect data from several sources and store 
it in different formats. They might also store data in different 
places, such as in a cloud infrastructure and an on-premises data 
center. Data virtualization creates a software layer between this 
data and the applications that need it. Data virtualization tools 
process an application’s data request and return results in a suitable 
format. Thus, organizations use data virtualization solutions to 
ncrease flexibility for data integration and support cross-functional 
data analysis.

    </section>
    <section id="d9">
<h1>Virtual Machine</h1><br>
In computing, a "virtual machine" is the virtualization or emulation of 
a computer system. Virtual machines are based on computer architectures 
and provide the functionality of a physical computer.A virtual machine is a 
computer file, typically called an image, that behaves like an actual computer. 
It can run in a window as a separate computing environment, often to run a 
different operating system—<br>
<b><i>A hypervisor (also known as a virtual machine monitor, VMM, or virtualizer) 
    is a type of computer software, firmware or hardware that creates and runs virtual machines.
</i></b><br>
Virtual machines support legacy applications, reducing the cost of 
migrating to a new operating system. For example, a Linux virtual machine 
running a distribution of Linux as the guest operating system can exist on 
a host server that is running a non-Linux operating system, such as Windows.<br>


    </section>
    <section id="d10">
<h1>Container</h1><br>
Containers are packages of software that contain all of the necessary elements 
to run in any environment. In this way, containers virtualize the operating 
system and run anywhere, from a private data center to the public cloud or 
even on a developer's personal laptop.<br>
<b>Container real time Usecase :</b><br>
All Google applications, like GMail and Google Calendar, are containerized and run on their cloud server.<br>
Containers allow applications to be more rapidly deployed, patched, or scaled. <br>
<b>Benefits of containers</b><br>
Less overhead<br>
Containers require less system resources than traditional or hardware virtual 
machine environments because they don’t include operating system images.<br>
Increased portability<br>
Applications running in containers can be deployed easily to multiple 
different operating systems and hardware platforms.<br>

    </section>
    <section id="d11" >
<h1>Container Runtime</h1><br>
A container runtime, also known as container engine, is a software component that can run containers on a host operating system.<br>
The container runtime is the low-level component that creates and runs containers<br>
Containerized applications can get complicated, however. When in production, 
many might require hundreds to thousands of separate containers in production. 
This is where container runtime environments such as Docker benefit from the 
se of other tools to orchestrate or manage all the containers in operation.<br>
<b>Docker Container Vs Runtime</b><br>
Docker is another popular container runtime that uses containerd as an internal 
runtime. But, the Docker container is easier to manage and run the same tasks as 
the containerd to get better and more efficient results. Docker has made it 
easier for developers to create, run, test, and deploy applications.<br>
<b><i>Container runtime are tools or software that are used to create and run containers. Eg: dockers and rkt.
Dockers must be installed to create containers</i></b>
    </section>
    <section id="d12">
<h1>Virtual Machine Vs Container</h1><br>
Virtual machines run in a hypervisor environment where each virtual machine 
must include its own guest operating system inside it, along with its related 
binaries, libraries, and application files. This consumes a large amount of 
system resources and overhead, especially when multiple VMs are running on 
the same physical server, each with its own guest OS.<br>
Containers host the individual microservices that form a microservices application.
 However , microservices can be host & deploy in a variety of other ways:
VMs. It's uncommon to host microservices inside VMs. Nevertheless, it's technically 
feasible for developers to deploy a set of microservices inside individual VMs and 
then connect them together to form a microservices app.
Directly on the OS. There is also no technical reason why you can't deploy a set of 
microservices directly on the same OS and not isolate them inside of a container or VM.

<br>
In contrast, each container shares the same host OS or system kernel and is 
much lighter in size, often only megabytes. This often means a container might 
take just seconds to start (versus the gigabytes and minutes required for a typical VM).<br>
containers provide a way to virtualize an OS so that multiple workloads can run on a 
single OS instance. With VMs, the hardware is being virtualized to run multiple OS instances. 
Containers’ speed, agility, and portability make them yet another tool to help streamline 
software development.<br>
Containers sit on top of a physical server and its host OS—for example, Linux or Windows.
 Each container shares the host OS kernel and, usually, the binaries and libraries, too. 
 Shared components are read-only. Containers are thus exceptionally “light”—they are only 
 megabytes in size and take just seconds to start, versus gigabytes and minutes for a VM.

    </section>
    <section id="d13">
<h1>Kubernetes</h1><br>
Kubernetes is an open-source container orchestration system for automating software 
deployment, scaling, and management. Originally designed by Google, the project is 
now maintained by the Cloud Native Computing Foundation. <br>
<b>Kubernetes Use :</b><br>
Kubernetes automates operational tasks of container management and includes 
built-in commands for deploying applications, rolling out changes to your 
applications, scaling your applications up and down to fit changing needs, 
monitoring your applications, and more—making it easier to manage applications.<br>
Kubernetes, a container orchestrator that recognizes multiple container runtime environments, including Docker.<br>
Kubernetes orchestrates the operation of multiple containers in harmony together. 
It manages areas like the use of underlying infrastructure resources for containerized 
applications such as the amount of compute, network, and storage resources required. 
Orchestration tools like Kubernetes make it easier to automate and scale container-based workloads 
for live production environments.
<br>
<b>Kubernetes source code is in the Go language.</b><br>

<b>Kubelet -</b><br>
The kubelet is the primary "node agent" that runs on each node. It can register the 
node with the apiserver using one of: the hostname; a flag to override the hostname; 
or specific logic for a cloud provider.<br>
The Kubelet is responsible for managing the deployment of pods to Kubernetes nodes. 
It receives commands from the API server and instructs the container runtime to 
start or stop containers as needed.<br>
Every Kubernetes Node runs at least: Kubelet, a process responsible for communication 
between the Kubernetes control plane and the Node; it manages the Pods and the 
containers running on a machine.<br>
<b><i>Kubelet - it runs containers inside pod.If a pod goes down ,it is the kubelet 
    job to communicate to the master.It is the technology that applies, creates,updates, 
    & destroy containers on a kubernetes node.It is the primary node agent that runs 
    on each node.</i></b>
    </section>
    <section id="d14">
<h1>Kube proxy</h1><br>
kube-proxy is a network proxy that runs on each node in your cluster, 
implementing part of the Kubernetes Service concept. kube-proxy maintains 
network rules on nodes. These network rules allow network communication 
to your Pods from network sessions inside or outside of your cluster.<br>
<b><i>Kube proxy - it redirects the incoming traffic to the desired pod.if 
    there is a pod that is running a web page than kube proxy allows in & 
    out flow. of traffic b/w pod & that web page.
The number of containers that r inside a pod will have the same ip address,
memory & volume.1 container communication with other is done through localhost.</i></b>
<b>Kubelet Vs kube-proxy</b><br>
<b>kubelet –</b> watches the API server for pods on that node and makes sure they are running.<br>
<b>kube-proxy –</b> watches the API server for pods/services changes in order to maintain the network up to date.<br>

    </section>
    <section id="d15">
<h1>Kubectl</h1><br>
It is short for Command line tool (kubectl) Kubernetes.
The Kubernetes command-line tool, kubectl, allows you to run commands 
against Kubernetes clusters. You can use kubectl to deploy applications, 
inspect and manage cluster resources, and view logs.<br>
<b>Kubelet Vs Kubectl</b><br>
kubelet is Kubernetes's mechanism for creating containers in a worker 
node, while kubectl is the CLI tool that developers use for interacting 
with a Kubernetes cluster.<br>
<b><i>Kubectl - command line tool to manage kubernetes cluster</i></b>
    </section>
    <section id="d16" >
<h1>Minikube</h1><br>
Minikube is a tool that runs a single-node Kubernetes cluster in a virtual machine.SO,MiniKube is a VM<br>
Minikube is a lightweight Kubernetes implementation that creates a VM on 
your local machine and deploys a simple cluster containing only one node. 
Minikube is available for Linux, macOS, and Windows systems.<br>
<b>Kubectl Vs Minikube</b><br>
<b><i>Minikube - contains actual kubernetes code .</i></b><br>
Kubernetes is a more comprehensive orchestration tool that is good for 
large scale projects and to manage the developed applications with a whole 
range of libraries. Whereas, Minikube, as a local Kubernetes engine, is 
great for deployment purposes and comes with limited nodes and external 
testing capabilities.<br>
<b>Does MiniKube require Kubernetes</b><br>
Minikube is a utility you can use to run Kubernetes (k8s) on your local 
machine. It creates a single node cluster contained in a virtual machine 
(VM). This cluster lets you demo Kubernetes operations without requiring 
the time and resource-consuming installation of full-blown K8s.<br>
<b>
Master and Node can't run on the same machine in the kubernetes cluster
</b>
    </section>
    <section id="d17">
<h1>Docker</h1><br>
Docker is a set of platform as a service products that use <b>OS-level virtualization</b> 
 to deliver software in packages called containers. The service has both free and 
 premium tiers. The software that hosts the containers is called Docker Engine. 
 It was first started in 2013 and is developed by Docker, Inc.<br>
 Docker is a software platform that allows you to build, test, and deploy applications 
 quickly. Docker packages software into standardized units called containers that have 
 everything the software needs to run including libraries, system tools, code, and runtime.<br><br>
Docker is a popular runtime environment used to create and build software 
inside containers. It uses Docker images (copy-on-write snapshots) to 
deploy containerized applications or software in multiple environments, 
from development to test and production. Docker was built on open standards 
and functions inside most common operating environments, including Linux, 
Microsoft Windows, and other on-premises or cloud-based infrastructures.<br>
<b>=====================================</b><br>
<b>Have you ever observed that an application runs successfully in development environment, 
but the same application with the same code creates multiple issues while running in 
the production environment? </b><br>
to avoid issues generated during production deployment, we should once think of 
Docker concept . docker & containers r a new way of running s/w in production 
environment without any issues . Docker is a new technology that facilitates development 
teams to build, manage, and secure applications anywhere.<br> <b>Docker</b> works on a concept of 
Container. <b>container</b> is a kind of software that packs up code and all its dependencies 
in a standard unit so the application runs from one environment to another quickly and 
reliably. Likewise Docker provides the ability to wrap up and run an application without 
affecting the reliability in an isolated environment is known as a docker container . <br>
With Docker, you can run multiple containers simultaneously on a given host
Instances of containerized apps use far less memory than virtual machines, they start and stop more quickly.
<b>Docker Image -></b><br>
Docker image is a lightweight, standalone, executable bundle of software that contains 
everything (code, runtime, system tools, system libraries and settings) which is required 
to run an application
<b>Docker Hub -></b><br>
Docker Hub is a kind of repository service provided by Docker for storing, finding and 
sharing container images with your team. It is the world’s largest repository of containerplatform
______________________________________________
<b>Docker Usecase :</b><br>
Docker's container-based platform allows for highly portable workloads. 
Docker containers can run on a developer's local laptop, on physical or virtual 
machines in a data center, on cloud providers, or in a mixture of environments.<br>

<b>Docker image </b><br>
A Docker image is a read-only template that contains a set of instructions 
for creating a container that can run on the Docker platform. It provides a 
convenient way to package up applications and preconfigured server environments, 
which you can use for your own private use or share publicly with other Docker users.<br>
<b>Docker Image Vs Docker Container </b><br>
The key difference between a Docker image Vs a container is that a Docker image is a 
read-only immutable template that defines how a container will be realized. A Docker 
container is a runtime instance of a Docker image that gets created when the $ docker 
run command is implemented.<br>
<b><i>A docker image can have another docker image as it's parent image.
Each time Docker launches a container from an image, it adds a thin writable 
layer, known as the container layer, which stores all changes to the container
throughout its runtime</i></b>
    </section>
    <section id="d18">
<h1>Dangling images</h1><br>
Dangling images are untagged Docker images that aren't used by a container or 
depended on by a descendant. They usually serve no purpose but still consume disk space.<br>
It's a good practice to clean up dangling and unused Docker images once in a while since 
a lot of unused images can lead to wasted disk space.<br>
<b>To clean dangling images in docker?</b><br>
Docker prune command

    </section>
    <section id="d19">
<h1>Docker Hub</h1><br>
<b>Docker Hub is a service provided by Docker for finding and sharing container images.</b><br>
Docker Hub is a hosted repository service provided by Docker for finding and sharing container images with your team.<br>
Docker registries are used to host and distribute Docker Images. Docker Hub is Docker's official cloud-based registry. 
To get started with Docker Hub you can pull (download) an image or push (upload) one of your local images.<br>


    </section>
    <section id="d20">
<h1>Docker Swarm</h1><br>
A Docker Swarm is a container orchestration tool running the Docker application. It has been configured to join together in a cluster.<br>
Docker Swarm is a clustering and scheduling tool for Docker containers. With Swarm, IT administrators and developers can establish and 
manage a cluster of Docker nodes as a single virtual system. Swarm mode also exists natively for Docker Engine, 
the layer between the OS and container image<br>
<b>Docker Swarm Benefits </b><br>
It is lightweight and easy to use. Also, Docker Swarm takes less time to understand than more complex 
orchestration tools. It provides automated load balancing within the Docker containers, whereas other 
container orchestration tools require manual efforts.<br>

    </section>
    <section id="d21" >
<h1>Docker Compose</h1><br>
Docker Compose is a tool that was developed to help define and share multi-container applications. With Compose, 
we can create a YAML file to define the services and with a single command, can spin everything up or tear it all down.<br>
<b>Docker File Vs Docker Compose</b><br>
A Dockerfile is a simple text file that contains the commands a user could call to 
assemble an image whereas Docker Compose is a tool for defining and running 
multi-container Docker applications. Docker Compose define the services that 
make up your app in docker-compose.<br>
<b>Docker Compose Vs Kubernetes</b><br>
Docker Compose deploys multi-container Docker apps to a single server, 
while Kubernetes is a production-grade container orchestrator that can 
run multiple container runtimes, including Docker's, across multiple 
virtual or physical machines.<br>
<b>Docker Compose Advantage</b><br>
Docker Compose files are very easy to write in a scripting language called YAML, 
which is an XML-based language that stands for Yet Another Markup Language. 
Another great thing about Docker Compose is that users can activate all the 
services (containers) using a single command.<br>

    </section>
    <section id="d22">
<h1>Docker Registry</h1><br>
Docker registries enable developers to store and distribute Docker images. 
Most developers use Docker registries instead of other packages because 
they simplify development processes significantly. <br>
The Registry is a stateless, highly scalable server side application that 
stores and lets you distribute Docker images. The Registry is open-source.<br>
A Docker registry is a system for versioning, storing and distributing 
Docker images. DockerHub is a hosted registry used by default when 
installing the Docker engine, but there are other hosted registries 
available for public use such as AWS and Google's own registries.<br>

    </section>
    <section id="d23">
<h1>Is Docker hub a registry or repository?</h1><br>
Docker Hub offers a hosted registry with additional features such as teams, organizations, web hooks, automated builds, etc<br>
<b>Docker Hub Registry Vs Repository</b><br>
A Docker registry is a storage and distribution system for named Docker images. 
The same image might have multiple different versions, identified by their tags. 
A Docker registry is organized into Docker repositories , where a repository 
holds all the versions of a specific image.<br>
<b>Docker Hub is a good example of a public registry. </b> can browse a list of
 public Docker images, and also store and view private Docker images. A private 
 registry is a Docker registry where access to Docker images are restricted to authenticated user

    </section>
    <section id="d24">
<h1>Kubernetes Vs Docker compose</h1><br>
<b>Docker Compose -></b> Compose is a tool for defining and running multi-container Docker applications.
One of the additional features of Docker Compose is that it can create containers using 
container images that are hosted on a container repository such as DockerHub.<br> Also, 
Docker Compose can build containers based on a Dockerfile stored on the hosting machine.<br>
<b>______________ </b><br>
<b>Kubernetes Vs docker compose</b><br>
Kubernetes and Docker Compose are both container orchestration frameworks. Kubernetes 
runs containers over a number of computers, virtual or real. Docker Compose runs 
containers on a single host machine.<br>
<b>________________</b><br>

    </section>
    <section id="d25">
<h1>Kubernetes Vs Docker swarm</h1><br>
Docker Swarm is a lightweight, easy-to-use orchestration tool 
with limited offerings compared to Kubernetes. In contrast, 
Kubernetes is complex but powerful and provides self-healing, 
auto-scaling capabilities out of the box.<br>
<b>Which is better to use and when .</b><br>
If you or your company does not need to manage complex workloads, 
then Docker Swarm is the right choice. If your applications are 
critical and you are looking to include monitoring, security 
features, high availability, and flexibility, then Kubernetes 
is the right choice.<br>
<i>The main difference is that Kubernetes is a container orchestration 
system that manages multiple containers. Docker Swarm does not manage 
any containers but instead is a cluster manager for Docker containers. 
Kubernetes also has built-in support for stateful applications, 
whereas Docker Swarm does not.</i>
<b><i>K8s architecture is more complicated than Swarm as the platform 
    has master/worker nodes and pods that can contain one or more containers. 
    Kubernetes is ideal for complex apps that can benefit from automatic scaling.</i></b>
<h3>Kubernetes , Docker swarm comparison</h3><br>
<table border="2">
    <tr>
        <th>Point</th><th>Kubernetes</th><th>Docker Swarm</th>
    </tr>
    <tr>
        <td>Main selling point</td><td>A complete container orchestration solution with advanced automation features and high customization</td>
        <td>An emphasis on ease of use and a seamless fit with other Docker products</td>
    </tr>
    <tr>
        <td>Installation</td><td>Somewhat complex as you need to install (and learn to use) kubectl</td>
        <td>Quick and easy setup (if you already run Docker)  </td>
    </tr>
    <tr>
        <td>Monitoring capabilities </td><td>Has built-in monitoring and logging</td>
        <td>Basic server log and event tools, but needs a third-party tool for advanced monitoring</td>
    </tr>
    <tr>
        <td>Load balancing</td><td>No built-in mechanism for auto load-balancing</td>
        <td>Internal load balancing</td>
    </tr>
    <tr>
        <td>Optimal use case</td><td>High-demand apps with a complex configuration</td>
        <td>Simple apps that are quick to deploy and easy to manage</td>
    </tr>

</table>
    </section>
    <section id="d26" >
<h1>Docker-Kubernetes twinning</h1><br>
Docker is a container runtime, Kubernetes is a platform for running 
and managing containers from many container runtimes. Kubernetes supports 
numerous container runtimes including Docker, containerd, CRI-O, and any 
implementation of the Kubernetes CRI (Container Runtime Interface).
Docker without Kubernetes using Docker compose.<br>
<b>Docker without Kubernetes</b><br>
<b><i>Can You Use Docker Without Kubernetes?</i></b><br>
The short and simple answer is yes, Docker can function without Kubernetes. 
You see, Docker is a standalone software designed to run containerized applications. 
Since container creation is part of Docker, you don’t need any separate software 
for Docker to execute.<br>

    </section>
    <section id="d27">
<h1>Kubernetes without Docker using other container runtimes</h1><br>
Kubernetes takes care of the containers created by a platform like Docker. 
It ensures the health and failure management of a system, thus automating 
the whole process.Kubernetes is meant to run across a cluster, whereas Docker runs on a single node.
<br><br>
<b>The answer is both yes and no. Kubernetes, in itself, is not a complete 
    solution. It depends on a container runtime to orchestrate; you can’t 
    manage containers without having containers in the first place.
Docker is one of the platforms used for containerization but it is not the 
only platform out there. This means, as long as you have a container runtime, 
Kubernetes will do its job. You can choose that container runtime to be Docker, 
but it’s not a requirement.</b><br>
And also - <br>
Docker is heavy. We get better performance with a lightweight container runtime like containerd or CRI-O. 
containerd consumes less memory and CPU, and that pods start in less time than on Docker.
<b><i>Docker, however, was never designed to run inside Kubernetes. Realizing 
    this problem, the Kubernetes developers eventually implemented an API 
    called Container Runtime Interface (CRI). This interface allows us to 
    choose among different container runtimes, making the platform more 
    flexible and less dependent on Docker</i></b>

    </section>
    <section id="d28">
<h1>Container without Docker</h1><br>
yes it is possible to create and run containers without using 
docker by using other containerization platform.
Several tools can be used to create containers without Docker.
 Some examples include: LXC (Linux Containers): 
This is an open-source containerization system that allows you to run 
multiple isolated Linux systems on a single host.

    </section>
    <section id="d29">
<h1>Docker/Kubernetes/Nagios</h1><br>
<b>Docker</b> is a software platform that enables packaging an application 
into containers. These containers represent isolated environments that 
provide everything necessary to run the application. Dockerizing an 
application refers to packaging it in a Docker image to run in one or 
more containers.Docker image is a reproducible environment for the 
application that guarantees portability across machines.Docker Hub is 
largest repository of container images .<br>
You can also share applications and collaborate with other developers 
using Docker Hub.<br>
User only have it's code into his machine.<br>
Docker wraps code to<br>
<b>(Code+services+libraries+db )</b> into 1 single package called docker.<br>
<b>Docker -</b> container platform<br>
<b>Kubernetes -</b> container Management platform<br>
<b>Nagios -</b> Nagios is an open source monitoring system for computer systems.
Nagios can monitor memory usage, disk usage, microprocessor load, the number 
of currently running processes and log files. Nagios also can monitor services, 
such as Simple Mail Transfer Protocol (SMTP), Post Office Protocol 3 (POP3),
 Hypertext Transfer Protocol (HTTP) and other common network protocols.
____________________
    </section>
    <section id="d30">
<h1>Why deploying microservice on container is better</h1><br>
( VMs take up to a few minutes to start, but containers can typically start 
in just a few seconds. It's easier to maximize the agility of microservices 
when they are hosted inside containers.)<br>
( Containers provide isolation for each containerized application or microservice, 
which reduces the risk that a security vulnerability can spread. Microservices 
deployed directly on a host OS are less secure in this respect.)<br>
Containerizing a service can help to make it highly maintainable and testable.<br>
    </section>
</div>
   <!-- </section> -->
   <script type="text/javascript">
$(document).ready(function(){
$('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
});
//jquery to expand & collapse the side-bar
$('.menu-btn').click(function(){
    $('.side-bar').addClass('active');
    $('.menu-btn').css("visibility","hidden");
});

// $('.close-btn').click(function(){
//     $('.side-bar').toggleClass('active');
//     // $('.menu-btn').css("visibility","visible");
// });

$(".close-btn").on('click', function() {
   $(".side-bar").toggleClass('active');
});
});


</script>
</body>
</html>