
<!DOCTYPE html>
<html>
    <head><title>Git Blog</title>
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
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div id="google_element" style="float:right"></div>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
             <img src='<?=base_url().'setting.jpg'?>' id="icon" width="25px" height="25px" >
    <a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" style="float:right">Back</button></a>
      <h2 class="gtl">Git Commands</h2>
   
      <div class="table-responsive" style="margin-left:80px">
        <table class="table table-striped table-sm" border="2" style="margin: auto;">
          <thead>
            <tr>
              <th scope="col" class="gtl">Sr.No</th>
              <th scope="col" class="gtl">Title</th>
              <th scope="col" class="gtl">Description</th>
              <th scope="col" class="gtl">Image</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if($result){ 
               $count=1;
               foreach($result as $key => $value){
                  echo "<tr>
                   <td class=gtl>".$count."</td>
                   <td class=gtl>".$value['blog_title']."</td>
                   <td>".$value['blog_desc']."</td>
                   <td><img src='".base_url()."assets/".$value['blog_image']."' class='img-fluid' width='100'></td>
                 </tr>";
                 $count=$count+1;
               }
                  
              }else{
               echo "<tr><td colspan='6'>No Records Found</td><tr>";
              }
              ?>
          </tbody>
        </table>
      </div>
    </main>
    <div class="col-lg-12 mb-4">
                           <div class="card shadow mb-4">
                          <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><b>Git cmd</b></h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                           <div class="album py-5 bg-light">
                              <div class="container">
                                 <div class="row">
                                    <h1>Git Commands while pushing code to a new repo</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body g">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                                        <label class="gtl">git init<br>
                                       git add .<br>
                                       git commit -m "commit message"<br>
                                       git remote add origin "url of the remote repository"<br>
                                        git push origin master</label>
                                    
                         </div></div></div></div>
                         <h1>Git Commands while pushing code to an existing repo</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body g">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                                        <label class="gtl">git init<br>
                                       git add -A<br>
                                       git commit -m "commit message"<br>
                                        git push origin master</label>
                                    
                         </div></div></div></div>
                         <h1>Steps to copy a project from remote branch</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body g">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                                        <label class="gtl">git init<br>
                                       git add .<br>
                                        git clone "Link of the repository from remote"</label>
                                    
                         </div></div></div></div>
                         <h1>When your local branch is ahead of remote branch by 1 commit</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body g">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                                        <label class="gtl">git pull<br>
                                       git checkout -b newBranchName<br>
                                       git pull origin remoteBranchName<br>
                                      git status<br>
                                       <h4>Problem solved for the newBranchName which u have created above</h4> </label>
                                    
                         </div></div></div></div>
                         <h1>To delete a remote Branch</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body g">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                                        <label class="gtl">
                                        git push origin --delete remoteBranchName</label>
                                    
                         </div></div></div></div>
                         <h1>When code is not getting pushed to remote Branch</h1>
                                 <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body g">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                                        <label class="gtl"><h4>After using git push origin master when code is not 
                                            getting pushed and instead you r getting message as "remote
                                            end hung up unexpectedly.Than use :"
                                        </h4><br>
                                       git push origin master --force <br>
                                       <h4>If this command doesn't work than use different commit and push as:</h4>
                                       git commit --amend -m "commit message"<br>
                                        git push </label>
                                    
                         </div></div></div></div>
            </div></div>
        </div>
        </div>
            
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <a href='<?= base_url().'Blog/Git2'?>' >
                    <button name="git" class="btn bg-gradient-primary btn-success" style="margin-left:650px;margin-bottom:100px;margin-top:50px">More
                  </button></a>
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
</body>
</html>
      