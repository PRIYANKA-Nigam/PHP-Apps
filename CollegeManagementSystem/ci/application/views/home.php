<?php
include("inc/header.php"); ?>
<div class="container">
	<div class="jumbotron">
<h3 class="display-3" style="text-align: center;">Admin & Co-Admin Login</h3><hr>
<div class="my-4">
<div class="row">
	<div class="col-lg-4">
<?php echo anchor("welcome/adminRegister","ADMIN REGISTER",['class'=>'btn btn-primary']);  ?>
	</div>
	<div class="col-lg-4">
	<?php echo anchor("welcome/login","ADMIN LOGIN",['class'=>'btn btn-primary']);  ?>	
	</div>
</div>
</div>
	</div>
</div>
