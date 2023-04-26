<?php
include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("welcome/adminSignup" , ['class'=> 'form-horizontal']);   ?>
<h3 class="display-3" style="text-align: center;">Admin Registration</h3><hr><br>
<?php  if($msg= $this->session->flashdata('message')):  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
    </div>
    <?php endif;  ?>
<!-- call to undefined function form_open() is coming to remove this add 'form' inside helper in autoload.php -->
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Username</label>
    <div class="col-md-9">
        <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter Username','value'=>set_value('username')]); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
	<?php echo form_error('username','<div class="text-danger">','</div>');?>
	</div>
</div>
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
    <label class="col-md-3 control-label">Gender</label>
    <select class="col-lg-9" name="gender">
      <option value="">Select Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Transgender">Transgender</option>
    </select>
</div>
	</div>
	<div class="col-md-6">
    <?php echo form_error('gender','<div class="text-danger">','</div>');?>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Role</label>
    <select class="col-lg-9" name="role_id">
      <option value="">Select Role</option>
      <?php if(count($roles)):  ?>
        <?php foreach($roles as $role):?>
      <option value=<?php echo $role->role_id?>><?php echo $role->rolename?></option>
       <?php endforeach;?>
      <?php endif;?>
    </select>
</div>
	</div>
	<div class="col-md-6">
    <?php echo form_error('role_id','<div class="text-danger">','</div>');?>
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
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Password Again</label>
    <div class="col-md-9">
        <?php echo form_password(['name'=>'confirmPwd','class'=>'form-control','placeholder'=>'Reenter Username']); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
    <?php echo form_error('confirmPwd','<div class="text-danger">','</div>');?>
	</div>
</div>
<button type="submit" class="btn btn-primary">Register</button>
<?php echo anchor("welcome","BACK" , ['class'=> 'btn btn-primary']);   ?>
</div>
<?php echo form_close(); ?>
