<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Technical Code & Links</title>

    <!-- Custom fonts for this template-->
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
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">
        <!-- Content Wrapper -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>

<div class="col-lg-12 mb-4">
                           <div class="card shadow mb-4">
                          <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Git Blogs</h6>
                                   
                                </div>
                                <a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-primary" >Back</button></a> 
                                <!-- Card Body -->
                                <div class="card-body">
                           <div class="album py-5 bg-light">
                              <div class="container">
                                 <div class="row">
                                    <h1>Android</h1>
                                    
                                 <div class="col-md-5">
                                    <div class="row">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h4 class="card-text"><u>Rebase</u></h4>
              <div class="d-flex justify-content-between align-items-center">
                              <div class="container">
                                <div class="row">
                                Rebase deletes all commit history for the new feature branch.Rebasing 
                                makes the branching history cleaner and with more linear  commits repo structure 
                                </div>
                              </div>
                         </div></div></div>
                         </div>
                         <div class="row">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h4 class="card-text"><u>How to push some changes to remote branch</u></h4>
              <div class="d-flex justify-content-between align-items-center">
                              <div class="container">
                                <div class="row">
                                git checkout -b [branchname]<br>
                                git push -u origin [branchname]<br>
                                </div>
                              </div>
                         </div></div></div>
                         </div>
                        </div>
            <div class="col-md-7">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h4 class="card-text"><u>Commit without any commit message</u></h4>
              <div class="d-flex justify-content-between align-items-center">
              <div class="container">
                                <div class="row">
                                git commit -am ''<br>
                                 you will see that it fails because an empty commit message is not allowed. Newer versions of git have the
                               --allow-empty-message commandline argument, including the version of git included with the latest version of 
                               Xcode. This will let you use this command to make a commit with an empty message:<br>
                              git commit -a --allow-empty-message -m '  '<br>
                                           Or
                                git commit -am'.' <br>
                              or shorter:<br>
                             git commit -am. <br>
                            This adds a commit with the message .<br>
                                
                                </div>
                              </div>
                                    </div> </div></div></div>
                                   

                                    <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h4 class="card-text">fast-forward merge</h4>
              <div class="d-flex justify-content-between align-items-center">
              <div class="container">
                                <div class="row">
                              <br>
                            A fast-forward merge can never have a merge conflict because Git won't apply a 
                            fast-forward merge if the tip of the target branch has diverged from the source branch.<br>
                           git merge master (by default treated as fast forward )<br>
                          A fast forward merge is when we merge a branch that is ahead of our checked out branch.<br>
Fast forward merge creates a linear history after the merge eliminating all the branching scenarios. 
All the commits of master & feature branch will synchronised into 1. Both master & feature will show 
the common branch history all the way through..<br>
option --no-ff (i.e. true merge) creates a new commit with multiple parents, and provides a better history tracking. <br>
Otherwise, --ff (i.e. fast-forward merge) is by default.<br>
If we want to reuse the commits of feature branch than good to use --no-ff flag otherwise can work 
with default fast forward option when changes from feature branch r merged to master and feature 
branch commits r of no further use.<br>

                                </div>
                              </div>
                                    
                         </div></div></div></div>
                         <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h4 class="card-text">no-fast-forward</h4>
              <div class="d-flex justify-content-between align-items-center">
              <div class="container">
                                <div class="row">
                                The no-fast-forward merge is also known as a three-way merge or true merge.
                                git merge master --no-ff (no fast forward)<br>
                                option --no-ff (i.e. true merge) creates a new commit with multiple parents, 
                                and provides a better history tracking. <br>
                                Otherwise, --ff (i.e. fast-forward merge) is by default.<br>
                                If we want to reuse the commits of feature branch than good to use --no-ff flag
                                </div>
                              </div>
                                    </div> </div></div></div>
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h4 class="card-text">reflog</h4>
              <div class="d-flex justify-content-between align-items-center">
              <div class="container">
                                <div class="row">
                                Once we did git reset --hard all our latest changes removed permanently 
                                but after using this command their is still a way to regain those 
                                changes by using -><br>
                                git reflog<br>
                                git checkout -b  "any new branch name" "sha of the commit we destroyed"<br>
                       So, we have now resurrected that commit.commits actually don't get destroyed for some 
                       90 days.so, we can undo any commit changes we have removed<br>
                                </div>
                              </div>
                                    </div> </div></div></div>
          
                                    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h4 class="card-text">git push origin master -- force</h4>
              <div class="d-flex justify-content-between align-items-center">
              <div class="container">
                                <div class="row">
                                When code is not getting pushed to remote branch after using git push 
                                origin master or getting message as remote end hung up unexpectedly than use :<br>
                                git push origin master -- force<br>
                                If this command don't work than<br>
                                Use d/f commit than push as :<br>
                                git commit --amend -m "mssg"<br>
                                git push<br>
                                </div>
                              </div>
                                    </div> </div></div></div>
                            
                              </div>
                        </div>
                    </div>
                    <br><hr>
                                    <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
                                    <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" 
      aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" style="background:black;color:white">
      Git(Distributed VCS) Vs SVN(centralized VCS)
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
      Installing git to local takes larger space than SVN and also SVN repo can handle large 
      binary files but git repo can't.<br>
Using git , the user will have the full version history of the remote repository in their 
local machine while with SVN only the files the user is working on r kept to the local .<br>
The git changes happen locally so the developer doesn't need to be connected to he internet 
all the time but with SVN user has to connected to the server to track changes & development work.<br>
____________<br>
BitBucket ,SVN -> Free private repo<br>
TravisCI .
      </div>
    </div>
  </div>
<hr>
                                    <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" 
      aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" style="background:black;color:white">
      Gitlab over Github
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
      The core difference is GitLab has Continuous Integration/Continuous Delivery (CI/CD) 
      and DevOps workflows built-in. GitHub lets you work with the CI/CD tools of your choice,
       but you'll need to integrate them yourself. GitHub users typically work with a 
       third-party CI program such as Jenkins, CircleCI, or TravisCI
      </div>
    </div>
  </div>
 <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" 
      aria-expanded="false" aria-controls="panelsStayOpen-collapseThree" style="background:black;color:white">
      Putty
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
      Putty gives us an interface to connect to linux server. <br>It is a ssh client used ro make a secure connection with the server .
      </div>
    </div>
  </div>
</div>
<hr>
<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" 
      aria-expanded="false" aria-controls="panelsStayOpen-collapseThree" style="background:black;color:white">
      Git Vs SourceTree
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
      Sourcetree is a free graphical user interface (GUI) desktop client that simplifies how you 
      interact with Git reposit tries. Being  GUI based , it's easy to visualize ,mange repository 
      which is rather complex incase of command line tool like - git bash.It offers simplified 
      distributed version control<br>
Efficient branching and merging" and "Fast" are the key factors why developers consider Git; 
whereas "Visual history and branch view", "Beautiful UI" and "Easy repository browsing" are 
the primary reasons why SourceTree is favored.<br>
Cons of Git<br>
Easy to lose uncommitted work<br>
Cons of source tree<br>
Extremely slowly , fetching  data is often slow<br>
Crashes often<br>
      </div>
    </div>
  </div>
</div>
                                    </div></div></div>
<br><hr>
</body>
</html>                    