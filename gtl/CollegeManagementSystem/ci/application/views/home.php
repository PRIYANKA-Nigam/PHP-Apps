<?php
include("inc/header.php"); ?>
<div class="container">
	<div class="jumbotron">
<h3 class="display-3" style="text-align: center;">Admin & Co-Admin Login</h3><hr>
<div class="my-4">
	<!-- Uncaught TypeError: count(): Argument #1 ($var) must be of type Countable|array, null given in ->this TypeError
was coming in console when statement was if(count($chkAdminExists)):?> was mentioned .So, You must 
	defined variable with array() before use it. with like this -->
<div class="row">
	<?php if(is_countable($chkAdminExists) && count($chkAdminExists)):?>
		<?php  else: ?>
	<div class="col-lg-4">
<?php echo anchor("welcome/adminRegister","ADMIN REGISTER",['class'=>'btn btn-primary']);  ?>
	</div>
	<?php endif;  ?>
	<div class="col-lg-4">
	<?php echo anchor("welcome/login","ADMIN LOGIN",['class'=>'btn btn-primary']);  ?>	
	</div>
</div>
</div>
	</div>
</div>
