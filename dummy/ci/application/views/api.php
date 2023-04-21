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
      <h1><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a> API & Library</h1><hr><br>
    <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">OAuth</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    OAuth is about authorization and not authentication. Authorization is 
                    asking for permission to do stuff.when a website wants to use the services 
                    of another—such as Bitly posting to your Twitter stream—instead of asking 
                    you to share your password, they should use a protocol called OAuth instead.  
                    OAuth doesn’t share password data but instead uses authorization tokens to 
                    prove an identity between consumers and service providers.<br> OAuth is an authorization 
                    protocol that allows you to approve one application interacting with another on 
                    your behalf without giving away your password.<br>
OAuth is an open-standard authorization protocol or framework that provides applications the 
ability for “secure designated access.<br>
______________<br>
Oauth2.0 is a security standard in which we Give permission to access our data  of 1 application 
to another.Instead of giving my username & password we give the app  a key which gives that app 
the permission to access our data or do things on our behalf from our  another application.</div>
                  
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
                <div class="h5 mb-0 font-weight-bold text-gray-800">SAML vs. OAuth</div><br>
                </div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    SAML (Security Assertion Markup Language) is an alternative federated 
                    authentication standard that many enterprises use for Single-Sign On (SSO). <br>
                    SAML enables enterprises to monitor who has access to corporate resources.
SAML uses XML to pass messages, and OAuth uses JSON. OAuth provides a simpler mobile experience, 
while SAML is geared towards enterprise security.<br> That last point is a key differentiator: <br>
    OAuth uses API calls extensively, which is why mobile applications, modern web applications, 
    game consoles, and Internet of Things (IoT) devices find OAuth a better experience for the user. 
    SAML, on the other hand, drops a session cookie in a browser .SAML much tougher than OAuth.
    Banks haven't adopted OAuth yet</div>
                   
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
                <div class="h5 mb-0 font-weight-bold text-gray-800">SAML Vs Open Id connect </div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    OpenID Connect is built on the OAuth 2.0 protocol and uses an additional JSON Web Token (JWT), 
                    called an ID token. It is specifically focused on user authentication and is widely used to 
                    enable user logins on consumer websites and mobile apps.<br>
Both OIDC & SAML allows single sign on ie... without having to log in or share their sign-in information on 
accessing different websites/apps. But the difference lies<br>
SAML - it enables you to log into your corporate intranet or IdP and then access numerous additional services, 
such as Salesforce etc, without having to re-enter your credentials.<br>
OIDC - used your Google to sign in to applications like YouTube, or Facebook to log into an online shopping cart.<br></div>
                  
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
                <div class="h5 mb-0 font-weight-bold text-gray-800">OAuth2.0 Vs OIDC</div><br>
                </div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    OAuth Grants access to your API. used for Authorization<br>
OIDC  allows Logging the user in . use for authentication.<br> 
SAML supports both user authentication and authorization while OAuth is only 
for authorization.<br> If the business priority is confirming user identity, 
SAML is the only choice.<br> If the business priority is securely and easily 
managing user privileges, OAuth may be the better choice.</div>
                   
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <br>
    <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Tomcat Vs Jetty</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Tomcat Vs Jetty -> They r web server & servlet container.<br>
Jetty came before tomcat.Jetty quite faster in processing than tomcat.<br>Tomcat is 
open source apache server work for java version 16 while jetty can work from java version 11 -16.
Apache tomcat server configuration can be edited by making changes in the xml file.<br>this 
s/w is written in java language.(Site - tomcat.apache.org)<br></div>
                  
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
                <div class="h5 mb-0 font-weight-bold text-gray-800">GSON Vs Jackson</div><br>
                </div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Both Gson and Jackson are good options for serializing/deserializing JSON data, 
                    simple to use and well documented. Advantages of Gson: Simplicity of toJson/fromJson 
                    in the simple cases. For deserialization, do not need access to the Java entities. 
                    But Gson is the faster at deserializing JSONs in compare to Jackson.<br>
For dealing  with big json files , jackson is preferred. GSON is faster but Jackson has more 
complete support than GSON - like <br>
Extensive annotation support 
If case insensivity is of any importance to you, then use Jackson. Gson does not support case 
insensitivity for key names, while jackson does.<br>
______________________________________________<br>
Convert String to json object Using GSON Library :<br>
String string = "abcde"; <br>
1.You can convert it to a JavaBean if you want using:<br>
Gson gson = new GsonBuilder().setPrettyPrinting().create(); gson.fromJson(string, JavaBean.class);<br>
More Simpler:<br>
String string = "abcde"; // The String which Need To Be Converted <br>
JsonObject convertedObject = new Gson().fromJson(string, JsonObject.class);<br>
2.Using JsonParser :<br>
JsonParser jsonParser = new JsonParser(); <br>
JsonObject jo = (JsonObject)jsonParser.parse(json); <br>
Assert.assertNotNull(jo); Assert.assertTrue(jo.get("Success").getAsString());<br>
To do it in a simpler way, consider below:<br>
JsonObject jsonObject = (new JsonParser()).parse(json).getAsJsonObject();<br>
_______________________________________________<br>
Convert Json to String  using Jackson:<br>
The methods writeValueAsString and <br>
writeValueAsBytes of ObjectMapper class generate a JSON from a Java object and 
return the generated JSON as a string or as a byte array:<br>
public class Car { <br>
private String color;<br>
 private String type; // standard getters setters }<br>
________<br>
Car car = new Car("yellow", "renault");<br>
String carAsString = objectMapper.writeValueAsString(car);<br></div>
                   
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <br>
    <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Firebase Vs Rest API</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Firebase synced data across all clients in real time & remains available 
                    when our app goes offline .It has a cloud-hosted NoSQL database that lets 
                    you sync between your users in real-time.<br>
The Firebase db is a cloud hosted dB in which data is stored in json. It is good when the amount 
of data is small because it is difficult to fetch condition based data from large db with it.<br>
From huge amount of data we can create our own rest apis that can allow to & fro of datavery easily.<br>
Why not to use firebase as a backend option for storage -> <br>
It stores data in the form of json not sql. So, if I want to fetch some data based on my need 
like give me only names of the employees with given experience than firebase can't fetch the 
exact data we need.<br> Such data r easier to fetch from sql db but not from json data hence we 
have to make some compromises while using firebase as it is not going to give the same result 
we r seeking. it is difficult to fetch condition based data from large database if you are 
using Firebase. So, we have to change our logic to query for the data we want
.and  In case you need to change the logic to query data, you need to update your app. <br>
While Doing upgrades is very easy if REST API is used
It's becomes expensive when our app grows when more number of people visits our app but rest api 
will save time and money in the long run if such situations r to be met with it.<br>
____________<br>
Should I use REST API or just firebase to make an app like Uber or both?<br>
We use Firebase database for small database holding less amount of data because, it is difficult 
to fetch condition based data from large database if you are using Firebase . Whereas, when we 
have a large/complex database and we need to send/receive data to/from there, then we create 
our own REST APIs and that is way more flexible than using Firebase.<br>
Cons with rest api <br>
We  need to host our server somewhere (heroku/AWS/Azure/etc.) and it will cost money also . <br>
but no such adjustment needed ro make incase of Firebase as it has it's own server .<br>
______________________<br>
www.postman.com/downloads/release-notes/<br></div>
                  
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
                <div class="h5 mb-0 font-weight-bold text-gray-800">Azure pipeline vs github actions</div><br>
                </div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Log back framework is a successor of log4j.if we have set the logging level 
                    to trace than normally it won't be visible in the console b'coz by default 
                    logging level is set to info.Hence,need to set for trace level appearance 
                    in the application. Properties - logging.level.root=TRACE <br>
________________________________________ <br>
Jenkins vs azure devops <br>
DevOps is union of people, process & products. <br>
Azure pipelines allows us to build ,test, deploy our code or application anywhere we want. <br>
That can also be deployment to any platform ,any cloud.It supports containers and it allows 
us to easily integrate with containerisation platform like- kubernetes . <br>
We can create pipeline in azure devops using either yaml file or using classic editor. <br>
Azure artifact is created ( in the form of some zip files ) when we create the pipeline. <br>
Azure Artifacts helps us to share maven , python packages from public or private sources 
with the entire team.It lets to integrate packages with ci/cd pipelines in a more efficient 
manner.and also lets to keep our packages safe & secure. <br>
Azure Testplan provides us wide variety of manual & automated testing tools.It lets us to 
test our application on desktop or web application. <br>
________________________________ <br>
ARM Tool <br>
'Infrastructure as Code - Simply put this is when you can set up your infrastructure 
reliably using code. Just like your application code, infrastructure code is stored 
as part of your source repository and versioned. Anyone in your team can run the 
code and deploy similar environments. <br>

One way to implement Infrastructure as code for Azure solutions is to use Azure 
Resource Manager templates. <br></div>
                   
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <br>
    <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Builder class Example</div><br>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Advantage 
Builder design pattern also helps in minimizing the number of parameters in the constructor 
and thus there is no need to pass in null for optional parameters to the constructor.<br>


package builder;<br>

class Vehicle {<br>
  //required parameter<br>
  private String engine;<br>
  private int wheel;<br>
  
  //optional parameter<br>
  private int airbags;<br>
  
  public String getEngine() {<br>
    return this.engine;<br>
  }<br>
  
  public int getWheel() {<br>
    return this.wheel;<br>
  }<br>
  
  public int getAirbags() {<br>
    return this.airbags;<br>
  }<br>
  
  private Vehicle(VehicleBuilder builder) {<br>
    this.engine = builder.engine;<br>
    this.wheel = builder.wheel;<br>
    this.airbags = builder.airbags;<br>
  }<br>
  
  public static class VehicleBuilder {<br>
    private String engine;<br>
    private int wheel;<br>
    
    private int airbags;<br>
    
    public VehicleBuilder(String engine, int wheel) {<br>
      this.engine = engine;<br>
      this.wheel = wheel;<br>
    }<br>
    
    public VehicleBuilder setAirbags(int airbags) {<br>
      this.airbags = airbags;<br>
      return this;<br>
    }<br>
    
    public Vehicle build() {<br>
      return new Vehicle(this);<br>
    }<br>
  }<br>
}<br>

public class BuilderPatternExample {<br>
  
  public static void main(String[] args) {<br>
    Vehicle car = new Vehicle.VehicleBuilder("1500cc", 4).setAirbags(4).build();<br>
    Vehicle bike = new Vehicle.VehicleBuilder("250cc", 2).build();<br>
    
    System.out.println(car.getEngine());<br>
    System.out.println(car.getWheel());<br>
    System.out.println(car.getAirbags());<br>
    
    System.out.println(bike.getEngine());<br>
    System.out.println(bike.getWheel());<br>
    System.out.println(bike.getAirbags());<br>
  }<br>
}<br></div>
                  
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->

</div>

    </div>
</div>
</body></html>
<!-- End of Main Content -->