<?php
include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("welcome/signin" , ['class'=> 'form-horizontal']);   ?>
<h3 class="display-3" style="text-align: center;">Admin Login</h3><hr><br>
<?php  if($msg= $this->session->flashdata('message')):  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-danger"><?php echo $msg;?></div>
    </div>
    <?php endif;  ?>
<!-- call to undefined function form_open() is coming to remove this add 'form' inside helper in autoload.php -->
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Email</label>
    <div class="col-md-9">
        <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter Email','value'=>set_value('email')]); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
    <?php echo form_error('email','<div class="text-danger">','</div>');?>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Password</label>
    <div class="col-md-9">
        <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter Password']); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
    <?php echo form_error('password','<div class="text-danger">','</div>');?>
	</div>
</div>
<button type="submit" class="btn btn-primary">Login</button>
<?php echo anchor("welcome","BACK" , ['class'=> 'btn btn-primary']);   ?>
</div>
<?php echo form_close(); ?>
