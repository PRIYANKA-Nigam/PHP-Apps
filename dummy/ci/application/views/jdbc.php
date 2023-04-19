<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JDBC Blogs</title>
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
#j1{
    background: linear-gradient(-5deg,white 60%,yellow 0%);
}
#j2{
    background: linear-gradient(-5deg,lightblue 60%,yellow 0%);
}
#j3{
    background: linear-gradient(-5deg,lightgreen 60%,yellow 0%);
}
#j4{
    background: linear-gradient(-5deg,purple 60%,yellow 0%);
}
#j5{
    background: linear-gradient(-5deg,crimson 60%,yellow 0%);
}
#j6{
    background: linear-gradient(-5deg,white 60%,yellow 0%);
}
#j7{
    background: linear-gradient(-5deg,lightblue 60%,yellow 0%);
}
#j8{
    background: linear-gradient(-5deg,lightgreen 60%,yellow 0%);
}
#j9{
    background: linear-gradient(-5deg,purple 60%,yellow 0%);
}
#j10{
    background: linear-gradient(-5deg,crimson 60%,yellow 0%);
}

</style>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  

<div class="container-fluid">
    <div class="row">
        
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
<div class="side-bar" >
        <div class="d-flex flex-column justify-content-between col-auto bg-dark min-vh-100">
            <div class="mt-4">
                <a class="text-white d-none d-sm-inline text-decoration-none d-flex align-items-center ms-4" role="button">
                    <span class="fs-5">JDBC</span>
                </a>
                <hr class="text-white">
                <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                    
                    <li class="nav-item">
                        <a href="#j1" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-house"></i>
                            <span class="ms-2 d-none d-sm-inline">What is jdbc.</span>
                        </a>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">JDBC Statements</span>
                        </a>
                      <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                        <a href="#j2" class="nav-link active text-white" aria-current="page">Prepared Statement</a>
                        </li>
                        <li class="nav-item">
                        <a href="#j3" class="nav-link text-white">Statement</a>
                        </li>
                        <li class="nav-item">
                        <a href="#j4" class="nav-link text-white">Callable Statement</a>
                        </li>
                      </ul>
                    </li>
                   
                    <li class="nav-item">
                    <a href="#j5" class="nav-link text-white" aria-current="page" >
                        <i class="fa fa-users"></i>
                        <span class="ms-2 d-none d-sm-inline">JDBC Drivers</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="#j6" class="nav-link text-white" aria-current="page" >
                        <i class="fa fa-users"></i>
                        <span class="ms-2 d-none d-sm-inline">ResultSet</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="#j7" class="nav-link" >Class.forName() Vs RegisterDriver class</a>
                    </li>
                    <li class="nav-item">
                    <a href="#j8" class="nav-link" >JDBC Architecture</a>
                    </li>
                    <li class="nav-item">
                    <a href="#j9" class="nav-link" >Types of files we can acsess using JDBC. </a>
                    </li>
                    <li class="nav-item">
                    <a href="#j10" class="nav-link" aria-current="page">Java Syntax for making DB Connection</a>
                    </li>
                    <li class="nav-item diabled">
                    <a href="#" class="nav-link" aria-current="page">Disabled</a>
                    </li>
                </ul>
            </div>
            
        </div>
</div>
    </nav>
    </div>
</div>
<label><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br><hr>
<div class="content" >
    <section id="j1" >
<h1>What is JDBC?</h1>
JDBC stands for java database connectivity.It ia basically an API
(Application Programming Interface) which allows you to connect
multiple databases to your java application.It is a technology which 
is used to connect java application with database.<br>
Java Database Connectivity (JDBC) API: Provides tools for developers 
to write applications with access to remote relationship databases, 
flat files and spreadsheets.<br>
<b>Need for JDBC -</b><br>
Before JDBC, ODBC API was used to connect java applications to 
other databases.But the issue was ODBC was written in C language,
to overcome this problem JDBC was developed.JDBC is written in Java.<br>
Some common JDBC API classes and interfaces - 
<ul>
    <li>DriverManager</li>
    <li>Driver</li>
    <li>Connection</li>
    <li>Statement</li>
    <li>ResultSet</li>
    <li>SQLException</li>
</ul>
    </section>
    <section id="j2">
<h1>JDBC Statements</h1>
JDBC statements are used to create sql objects while interacting with 
database.They are used when we want to pass a SQL query to database.<br>
Different types of statements are --<br>
<ul>
    <li>Prepared Statement</li>
    <li>Statement</li>
    <li>Callable Statement</li>
</ul><br>

<b>Prepared Statements - </b>If we want to run some query multiple times .The 
queries written through it requires parameters value to pass. Use in the case 
when we have parameterised sql query.Thses statements are pre-compiled.Hence,
prevent SQL injection.
    </section>
    <section id="j3">
<h1>Statements</h1>
Statements are use to execute a simple sql query.No parameters are requred 
in this case.Statements are less efficient than prepared statements as prepared 
statements allows pre-compilation of SQL queries.<br>
It encapsulates an sql statements which is passed to the database to be 
parsed , compiled , planned and executed.<br>
<b>Difference between statements and prepared statemets - </b><br>
<ul>
    <li>Prepared statements offers better performance, as they are pre-
        -compiled.They re-use the same execution plan for different arguments
        rather than creating a new execution plan every time.
    </li>
    <li>Prepared statements use bind arguements, which are sent to the database 
        engine.This allows mapping different requests with same prepared statemnts 
        but different arguments to execute the same execution plan.Prepared statements
        are more secure because theu use bind parmaters which can prevennt SQL injection 
        attack.
    </li>
</ul>
    </section>
    <section id="j4">
<h1>Callable Statements</h1>
When we are dealing with procedures we go with creating callable objects.It is used to 
call the SQL stored procedures in the database.The stored procedures are similar to 
functions as they perform some specific tasks , except that they are only available in 
the database. The callableStatements can return either a single ResultSet object or 
multiple ResultSet objects.
    </section>
    <section id="j5">
<h1>JDBC Drivers</h1>
These drivers are responsible for getting Connection to the database.They are used 
as an interface between JDBC API and underlying database. JDBC driver is an interface 
enabling a java application to interact with a database. To connect with individual database
JDBC requires drivers for each database.The JDBC Driver gives out the connection 
to the database and implements the protocol for transferring the query and result between 
client and database.<br>
Sun declared 4 types of JDBC drivers -<br>
<ul>
    <li>Type 1</li>
    <li>Type 2</li>
    <li>Type 3</li>
    <li>Type 4</li>

</ul><br>
Type 1 JDNC Driver are the JDBC-ODBC bridge.They support multiple concurrent 
open statements per connection.<br>
Type 3 & Type 4 JDBC Driver can be used in either applet or servlet code.and are 
used over communication channel.<br>
Type 4 JDBC Driver converts JDBC calls into the network protocol used by the 
database management system directly.These drivers are 100% java compatible.They 
are pure java driver.They are highly efficient and always preferable for using 
JDBC applications.(also called thin driver in JDBC).It is the fastest driver among all.
    </section>
    <section id="j6">
<h1>ResultSet</h1>
They are responsible for retrieving and manipulating data.When we retrieve any information
from database it is saved in ResultSet Object.These objects hold data retrieved from a database
after you execute an SQL query using statements objects.It acts as an iterator to allow you 
to move through its data.The java.sql.ResultSet interface represents the result set of a 
database query.<br>
Types of resultSet - <br>
<ul>
    <li>ResultSet.TYPE_FORWARD_ONLY</li>
    <li>ResultSet.TYPE_SCROLL_INSENSITIVE</li>
    <li>ResultSet.TYPE_SCROLL_SENSITIVE</li>
</ul>
    </section>
    <section id="j7">
<h1>Class.forName() Vs RegisterDriver class</h1>
These 2 classes can be use for loading a database driver in JDBC.<br>
<b>Class.forName() - </b>This method dynamically loads the driver class file into 
memory , which automatically registers it.This methos is preferable because 
it allows you to make the driver registration configurable and portable.<br>
<b>DriverManager.registerDriver - </b> This static method is used incase you 
are using a non-JDK compliant JVM.
    </section>
    <section id="j8">
<h1>JDBC Architecture</h1>
JDBC architecture gives a flow to connect your Java application
to the underlying databases using JDBC drivers.General JDBC 
architecture consists of 2 layers -<br>
JDBC API(This provides the application-to-jdbc manager connection)<br>
JDBC Driver API(this supports the JDBC manager-to-Driver connection)<br>
It's architecture composed of --
<ul>
    <li>Java Application</li>
    <li>JDBC API</li>
    <li>JDBC Driver manager</li>
    <li>JDBC Driver</li>
    <li>Connection databases</li>
</ul>

    </section>
    <section id="j9">
<h1>Types of files we can acsess using JDBC.</h1>
JDBC API allows java application to access --
<ul>
<li>relational database</li>
<li>non- relational database</li>
<li>Flat files</li>
<li>Spreadsheets</li>

</ul>
    </section>
    <section id="j10">
<h1>Java Syntax for making DB Connection</h1>
<br>
import 'java.sql.x';<br>
main()<br>
{<br>
Class.forName("com.mysql.jdbcDriver");<br>
Connection con=DriverManager.getConnection("URL","Username","password");<br>
Statement st =con.CreateStatement();<br>
ResultSet rs=st.executeQuery("seelct * from student");<br>
while(re.next()){<br>
System.out.println(rs.getInt(1)+" "+rs.getString(2));<br>
}<br>
st.close();<br>
con.close();<br>
}<br>
    </section>
</div>
</body>
</html>