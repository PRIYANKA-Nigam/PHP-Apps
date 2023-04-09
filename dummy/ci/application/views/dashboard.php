<?php  include('sidebar.php'); ?>
<div style="margin-left: 100px;">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
              
                    <!-- Content Row -->

                    <div class="row">

                     
                          <div class="col-lg-6 mb-4">
                             <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                           Java
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                           C
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                           Spring
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                          Git
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                        JDBC
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                           Azure
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                           PHP
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                           Android Studio
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                           SQL(Oracle/MySQL)
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                           Microservices
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                           DevOps
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                           Kafka
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Maven/Gradle
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                           APIs & Libraries
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                           JIRA
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            JAR/WAR/EAR files
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                      

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-12">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">In-use Languages(2023)</h6>
                                </div>
                                <!-- Card Body -->
    <div class="card-body">
          <?php  include('charts.php'); ?>
    </div>
</div>
</div>   </div>
                         <!-- Content Column -->
                         <div class="col-lg-12 mb-4">

<!-- Project Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Videos</h6>
    </div>
    <div class="card-body">
    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <?php
          foreach($result as $key=>$value){
            // print_r($value);
            ?>
 <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text"><?= $value['vid']?></p>
              <div class="d-flex justify-content-between align-items-center">
                <?php
              $data=$value['url'];
    $final=str_replace('watch?v=','embed/',$data);
    echo "
    <iframe src='$final' 
    frameborder='0'
    allow='autoplay:encrypted-media'
    allowfullscreen>
    </iframe>
    ";
    ?>
              </div>
              <h2>xyz</h2>
            </div>
          </div>
        </div>
            <?php
          }
        ?>
       
        
  </div>
  </div>
        </div>
        </div>
    </div>
</div>
                       
                          <div class="col-lg-12 mb-4">
                           <div class="card shadow mb-4">
                          <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">APK Files & Code</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                           <div class="album py-5 bg-light">
                              <div class="container">
                                 <div class="row">
                                    <h1>Android</h1>
                                 <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    
                         </div></div></div></div>
            <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    </div> </div></div></div>
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    
                         </div></div></div></div>
            <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    </div> </div></div></div>
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    
                         </div></div></div></div>
            <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    </div> </div></div></div>
                                    <h1>PHP</h1>
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    
                         </div></div></div></div>
            <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    </div> </div></div></div>
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    
                         </div></div></div></div>
            <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    </div> </div></div></div>
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    
                         </div></div></div></div>
            <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    </div> </div></div></div>
                                    <h1>Spring</h1>
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    
                         </div></div></div></div>
            <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    </div> </div></div></div>
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    
                         </div></div></div></div>
            <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    </div> </div></div></div>
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    
                         </div></div></div></div>
            <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">Title</p>
              <div class="d-flex justify-content-between align-items-center">
                                        <h1>a</h1>
                                    </div> </div></div></div>
        </div>
        </div>
            
                                </div>
                                
                            </div>
                        </div>
                    </div>
</div></div>
                    <!-- Content Row -->
                    
            <!-- End of Main Content -->
            <br><hr>
          <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="https://github.com/PRIYANKA-Nigam">Github</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://twitter.com/PriyankaN2504">Twitter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://linkedin.com/in/priyanka-nigam-083247172">LinkedIn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="https://facebook.com/priyanka.nigam.9256">Facebook</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://hackerrank.com/ec_1634831038">Hackerrank</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://stackoverflow.com/users/14454060/priyanka-nigam">Stack Overflow</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Our Collaboration </h5>
    <p class="card-text">
      <p><strong>Thank you for visiting our site. </strong></p>
      Please do also follow us on the above sites.Your 1 follow 
      can help us reach to greater heights.We have good number of contents in the above sites with a awesome personal 
      portfolio.All the documents are earned with efforts and none are forged or bought from other sources.
      Kindly, check our page.It will boost our morale to give more exciting content for you and will also be 
      helpful for you to make understanding easier for you with demonstrative live examples.
    </p>
    <a href="#" class="btn btn-primary">Go Top</a>
  </div>
</div>
           
      </div>
      <?php 
        include('footer.php');
        ?>