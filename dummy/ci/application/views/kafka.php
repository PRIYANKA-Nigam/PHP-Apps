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
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css');    ?>">
<style>
label{
    text-align: center;
    position: fixed;
    top: 0;
    left: 35%;
    /* top:10%; */
    color: purple;
}
section{
    height: 100vh;
    width: 200vh;
    display: inline-block;
    align-items: left;
    margin-top: 25px;
    margin-left: 320px;
    padding-left: 200px;
    padding-top: 50px;
    /* justify-content: center; */
    text-transform: uppercase;
}
#s1{
    background: linear-gradient(-45deg,white 30%,yellow 40%);
}
#s2{
    background: linear-gradient(-45deg,lightblue 30%,yellow 0%);
}
#s3{
    background: linear-gradient(-45deg,lightgreen 30%,yellow 0%);
}
#s4{
    background: linear-gradient(-45deg,purple 30%,yellow 0%);
}
#s5{
    background: linear-gradient(-45deg,crimson 30%,yellow 0%);
}
#s6{
    background: linear-gradient(-45deg,white 30%,yellow 40%);
}
#s7{
    background: linear-gradient(-45deg,lightblue 30%,yellow 0%);
}
#s8{
    background: linear-gradient(-45deg,lightgreen 30%,yellow 0%);
}
#s9{
    background: linear-gradient(-45deg,purple 30%,yellow 0%);
}
#s10{
    background: linear-gradient(-45deg,crimson 30%,yellow 0%);
}
#s11{
    background: linear-gradient(-45deg,white 30%,yellow 40%);
}
#s12{
    background: linear-gradient(-45deg,lightblue 30%,yellow 0%);
}


</style>
</head>
<body >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
   <div class="side-bar" >
    <div class="menu">
    <div> <span data-feather="home" class="align-text-bottom" style="margin-left:50px;font-size:30px">
     Kafka</span><hr></div>
        <div class="item"> <a href="#s1"><i class="fas fa-desktop"></i>What is Kafka?</a> </div>
        <div class="item">
             <a class="sub-btn" href="#s2"><i class="fas fa-table"></i>Kafka<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#s2" class="sub-item"><i class="far fa-star"></i>Producer</a>
                <a href="#s2" class="sub-item"><i class="far fa-star"></i>Consumer</a>
                <a href="#s2" class="sub-item"><i class="far fa-star"></i>Kafka Topics</a>
                <a href="#s2" class="sub-item"><i class="far fa-star"></i>Broker</a>
            </div>
            </div>
            <div class="item">
             <a class="sub-btn" href="#s3"><i class="fas fa-table"></i>Kafka APIs<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#s3" class="sub-item"><i class="far fa-star"></i>Producer APIs</a>
                <a href="#s3" class="sub-item"><i class="far fa-star"></i>Consumer APIs</a>
                <a href="#s4" class="sub-item"><i class="far fa-star"></i>Stream APIs</a>
                <a href="#s5" class="sub-item"><i class="far fa-star"></i>Connector APIs</a>
            </div>
            </div>
        <div class="item"> <a href="#s6"><i class="fas fa-desktop"></i>Kafka Connect</a> </div>
        <div class="item"> <a href="#s7"><i class="fas fa-desktop"></i>Kafka Vs Kafka Connect</a> </div>
        <div class="item"> <a href="#s8"><i class="fas fa-info-circle"></i>Kafka Vs Rabbit MQ</a> </div>
        <div class="item"> <a href="#s9"><i class="fas fa-info-circle"></i>Kafka Vs Kafka Streams</a> </div>
        <div class="item"> <a href="#s10"><i class="fas fa-info-circle"></i>Kafka Vs Rest APIs</a> </div>
        <div class="item"> <a href="#s11"><i class="fas fa-info-circle"></i>Kafka Broker Vs Message Broker[Reabbit MQ]</a> </div>
        <div class="item"> <a href="#s12"><i class="fas fa-th"></i>Requirement of message broker in microservices</a> </div>
        <!-- <div class="item" > <a class="sub-btn" href="#"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
                <a href="#" class="sub-item">Sub 1</a>
                <a href="#" class="sub-item">Sub 2</a>
                <a href="#" class="sub-item">Sub 3</a>
    </div>  </div>
        <div class="item"> <a href="#"><i class="fas fa-info-circle"></i>About</a> </div> -->
    </div>
   </div>
   <script type="text/javascript">
$(document).ready(function(){
$('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
});

});

</script>
<div >
<label><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br>
<div class="content" >
    <section id="s1" >
<h1>What is Kafka?</h1><br>
Apache Kafka is a distributed event store and stream-processing 
platform. It is an open-source system developed by the Apache 
Software Foundation written in Java and Scala. The project aims 
to provide a unified, high-throughput, low-latency platform for 
handling real-time data feeds. <br>
Kafka Is a Distributed Data Streaming Technology Leveraged 
by Over 70% of Fortune 500. Thousands of Companies Are Built 
on the Data Streaming Platform Apache Kafka.<br>
Real-time data processing with Apache Kafka became the de facto 
standard to correlate and prevent fraud continuously before it happens
    </section>
    <section id="s2">
<h1>Kafka</h1><br>
Kafka de-couples data pipelines and solve the complexity problems.It 
is a distributed messaging system.
Kafka has 3 building blocks -<br>
<ul>
    <li>Producer</li>
    <li>Consumer</li>
    <li>Broker</li>
</ul><br>

<b>Producer -</b>are the applications that are producing messages to Kafka. 
It can be any service or any program that we have coded as <br>
Producer API to produce the messages to the topics..This producer 
creates different messages which r consumed by the broker.<br>It sends or 
write data/messages to the topics.<br>
<b>Brokers - </b> the cluster of servers , machine/ computers.it stores 
the messages in the topics in the form of partitions.A Kafka 
server is known as broker.It is a bridge between producer and
consumer.If producer wishes to write data to the cluster
it is sent to the kafka server.<br>
<b>Consumer - </b>are the applications that are consuming 
the data from kafka instances like- DB server,
security server,data warehouse etc. the consumer needs to 
consume the messages from the broker it needs the consumer API.<br>
It reads or consume messages from the kafka cluster.It subscribe
to the respective topics to fetch the data.
<b>Kafka Cluster -</b>It comprises of different brokers,topics and
their respective partitions.<br>
<b>Topis - </b>It is common name or heading given to represent
similar types of data.Data is written to the topics.<br>
<b>Partitions -</b>The data/messages are divided into small subparts 
known as partition.Each partition carries data within it having an 
offset value.<br>
<b>Zookeeper - </b>Use to store indormation about kafka cluster and 
details of the consumer.If any changes occur like - broker die,new 
topics occurs etc.Zookeeper sends notifiction to apache kafka.When
kafka cluster will come to know which broker are down, more topics
are added etc.It also handles load distribution among partitions.<br>
    </section>
    <section id="s3">
<h1>Kafka APIs</h1><br>
4 major kafka APIs are -
<ul>
    <li>Producer APIs</li>
    <li>Consumer APIs</li>
    <li>Stream APIs</li>
    <li>Admin APIs</li>
</ul><br>
The <b>Admin API</b> for inspecting and managing Kafka objects like topics 
and brokers. <br>
The <b>Producer API </b> writing (publishing) to topics. <br>
The <b>Consumer API </b> for reading (subscribing to) topics. <br>
The Kafka <b>Streams API</b> to provide access for applications and 
microservices to higher-level stream processing functions.<br>
    </section>
    <section id="s4">
<h1>Stream APIs</h1><br>
<b>Kafka Streams</b> is an API for writing client applications 
that transform data in Apache Kafka. You usually do this by 
publishing the transformed data onto a new topic. The data 
processing itself happens within your client application, 
not on a Kafka broker.
<b>Kafka Connect</b> is an API for moving data into and out of Kafka.

    </section>
    <section id="s5">
<h1>Connector APIs</h1><br>
<b>Connector API -</b> These APIs helps to connect the kafka 
broker to an external entity that may be an external server 
or a database to let the kafka topics to get consumed.<br><br>
<b>SUMMARY</b><br><br>
Apache Kafka is a back-end application that provides a way 
to share streams of events between applications.<br>

An application publishes a stream of events or messages to a 
topic on a Kafka broker. The stream can then be consumed 
independently by other applications, and messages in the topic 
can even be replayed if needed.<br>

Kafka Streams is an API for writing client applications that 
transform data in Apache Kafka. You usually do this by 
publishing the transformed data onto a new topic. The data 
processing itself happens within your client application, not 
on a Kafka broker.<br>

<b>Kafka Connect</b> is an API for moving data into and out of Kafka. 
It provides a pluggable way to integrate other applications with 
Kafka, by letting you use and share connectors to move data to or 
from popular applications, like databases.

    </section>
    <section id="s6"><br>
<h1>Kafka Connect</h1>
<b>Kafka Connect</b> is a free, open-source component of Apache Kafka
that works as a centralized data hub for simple data integration 
between databases, key-value stores, search indexes, and file systems.<br>
<b>How does Kafka Connect to database?</b><br>
Set Up MySQL to Kafka Connection Using Confluent Cloud Console<br>
Step 1: Launch Confluent Cloud Cluster.<br>
Step 2: Add MySQL Kafka Connector.<br>
Step 3: Set Up MySQL to Kafka Connection.<br>
Step 4: Verify and Launch MySQL Kafka Connector.<br>
Step 5: Validate Your Kafka Topic.<br>
    </section>
    <section id="s7"><br>
<h1>Kafka Vs Kafka Connect</h1>
Apache Kafka is a distributed streaming platform and 
kafka Connect is framework for connecting kafka with 
external systems like databases, key-value stores, 
search indexes, and file systems, using so-called 
Connectors. <br>
Kafka Connect is only used to copy the 
streamed data, thus its scope is not broad.It executes 
as an independent process for testing and a distributed,
scalable service support for an organization.<br>

Kafka connect makes our task much easier to connect 
Kafka to the other systems, without having to write all 
the glue code yourself.<br>
    </section>
    <section id="s8"><br>
<h1>Kafka Vs Rabbit MQ</h1>
Apache Kafka and RabbitMQ are two open-source and 
commercially-supported publisher/subscriber systems, 
RabbitMQ is an older tool.  It can deal with high-
throughput use cases, such as online payment processing. 
It can handle background jobs or act as a message broker 
between microservices. No message ordering is provided . 
In RabbitMQ, you can specify message priorities and 
consume message with high priority first.RabbitMQ can 
be used when web servers need to quickly respond to 
requests.<br><br>
while kafka is newer. Uses High volume publish-subscribe 
messages and streams platform—durable, fast, and scalable .
provides message ordering thanks to its partitioning.
Messages are sent to topics by message key.
It can achieve high throughput (millions of messages per 
second) with limited resources, a necessity for big data 
use cases. While<br>
RabbitMQ can also process a million messages per second 
but requires more resources (around 30 nodes)
RabbitMQ uses a smart broker that can intelligently route 
the message to different queues. Whereas Kafka relies on 
consumer to decide what kind of intelligence it want to use 
for message touring.Consumer just have to pull the messages 
whenever they r available for that .(ie... Kafka uses pull 
base mechanism)<br>
Why we go for Kafka is bcoz of it's retention of messages 
ability . <br>while in RabbitMQ  is just a point 2 point 
communication queue where we just  pushed the message on the 
queue , once the consumer consumes the message ,it gets 
deleted from the queue. So, in Kafka messages have the 
retention period .so, consumer can re- consume the message from the broker.
    </section>
    <section id="s9">
<h1>Kafka Vs Kafka Streams</h1>
Every topic in Kafka is split into one or more partitions. 
Kafka partitions data for storing, transporting, and 
replicating it. Kafka Streams partitions data for processing it. <br>
Kafka Streams is an easy data processing and transformation 
library within Kafka used as a messaging service. Whereas, 
Kafka Consumer API allows applications to process messages from topics.
    </section>
    <section id="s10">
<h1>Kafka Vs Rest APIs</h1>
Kafka APIs store data in topics. With REST APIs, you can store 
data in the database on the server. With Kafka API, you often 
are not interested in a response. You are typically expecting 
a response back when using REST APIs.<br>kafka provides 
bidirectional communication . The REST API is unidirectional, 
i.e., you can only send or receive a response at a time.
    </section>
    <section id="s11">
<h1>Kafka Broker Vs Message Broker[Reabbit MQ]</h1>
The broker consistently delivers messages to consumers and 
keeps track of their status. Kafka uses the dumb broker/smart 
consumer model. Kafka doesn't monitor the messages each user 
has read. Rather, it retains unread messages only, preserving 
all messages for a set amount of time.<br>
    </section>
    <section id="s12">
<h1>Requirement of message broker in microservices</h1>
Broker means a third party/middleMan that helps to perform 
or achieve our goal.So, Broker which helps services to do 
inter-communication via messaging is Message Broker.
A message broker is a piece of software, which enables 
services and applications to communicate with each other 
using messages. <br>
broker ensures communication between different microservices 
is reliable and stable, that the messages are managed and 
monitored within the system and that messages don't get lose.
Kafka message broker is more reliable for microservice 
communication than RabbitMQ broker.<br><br>
<b>Which Microservice Message Broker to choose?</b><br>
<ul>
    <li><b>For RabbitMQ</b> Queuing (One-to-one ) And Publish-subscribe(one-to-many): Both<br>
    Persistency: both persistent and transient messages are supported.<br>
    Messages are through both point-to-point and pub-sub methods by implementing 
Advanced Message Queuing Protocols (AMQP)</li>
    <li><b>For Kafka </b>Queuing (One-to-one ) And Publish-subscribe(one-to-many): One-to-many.<br>
    Persistency: yes<br>
    Any message queue that allows publishing messages decoupled 
    from consuming them is effectively acting as a storage system 
    for the in-flight messages. What is different about Kafka is 
    that it is a very good storage system. It provides data 
    persistency and stores streams of records that render
. </li>
</ul>


    </section>
</div>
</div>
</body>
</html>