<!-- <?php
print_r($result);
?> -->
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
<title>Home Page</title>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Home</strong>
      </a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" 
      aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"> -->
        <!-- <span class="navbar-toggler-icon"></span> -->
        <a href="<?= base_url().'admin/Login' ?>" class="navbar-brand d-flex align-items-center">
        <strong> Admin Panel </strong>
      </a>
      <!-- </button> -->
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Blog Album</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. 
        Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <strong><?= sizeof($result); ?> Articles</strong>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <?php
          foreach($result as $key=>$value){
            // print_r($value);
            ?>
 <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
         <img class="card-img-top" src="<?= base_url().$value['blog_image'] ?>" width="200" height="250">

            <div class="card-body">
              <p class="card-text"><?= $value['blog_title']?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?= base_url().'Home/blog_detail/'.$value['blogid'] ?>" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
            <?php
          }
        ?>
       
        
  </div>
  </div>
        </div>
</main>

</body>
</html>