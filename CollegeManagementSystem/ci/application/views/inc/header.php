<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>College Management System</title>
	<!-- Call to undefined function base_url()- this error was coming in o/p to ignore this include url in the helper method -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" 
	integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
	<div class="navbar-header col-lg-10">
    <a class="navbar-brand"  href="#" style="color:#fff">College Management System</a></div>
	<div class="col-lg-2" style="margin-top:15px;" id="bs-example-navbar-collapse-2">
	<div class="btn-group">
    <div >
    <?php
       $role_id = $this->session->userData('role_id');
    ?>
    <?php if($role_id=='1'): ?>
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
 View
  </button>
  <ul class="dropdown-menu">
  
  <li><?php echo anchor("admin/coadmins",'Co Admins');?></li>
  <li><?php echo anchor("welcome/onLeave",'Associates on Leave');?></li>
  <li><?php echo anchor("welcome/status",'Daily status');?></li>
  <?php endif;  ?>
  </ul> </div>
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
  style="margin-left: 10px;">
   Settings
  </button>
  <ul class="dropdown-menu">
    <?php
       $role_id = $this->session->userData('role_id');
    ?>
    <?php if($role_id=='1'): ?>
  <li><?php echo anchor("admin/dashboard",'Dashboard');?></li>
  <li><?php echo anchor("welcome/logout",'Logout');?></li>

  <?php else:  ?>
		<li><?php echo anchor("welcome/logout",'Logout');?></li>
    <?php endif;  ?>
  </ul>
</div>

</div>
  </div>
</nav>
</body>
</html>