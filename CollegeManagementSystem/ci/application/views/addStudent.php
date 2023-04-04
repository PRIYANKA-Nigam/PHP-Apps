<?php
include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("admin/createStudent" , ['class'=> 'form-horizontal']);   ?>
<h3 class="display-3" style="text-align: center;">Add Student</h3><hr><br>
<?php  if($msg= $this->session->flashdata('message')):  ?>
        <div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
    <?php endif;  ?>
<!-- call to undefined function form_open() is coming to remove this add 'form' inside helper in autoload.php -->
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Student name</label>
    <div class="col-md-9">
        <?php echo form_input(['name'=>'studentname','class'=>'form-control','placeholder'=>'Enter name','value'=>set_value('username')]); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
	<?php echo form_error('studentname','<div class="text-danger">','</div>');?>
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
    <label class="col-md-3 control-label">College Name</label>
    <select class="col-lg-9" name="college_id">
      <option value="">Select College</option>
      <?php if(count($colleges)):  ?>
        <?php foreach($colleges as $college):?>
      <option value=<?php echo $college->college_id?>><?php echo $college->collegename?></option>
       <?php endforeach;?>
      <?php endif;?>
    </select>
</div>
	</div>
	<div class="col-md-6">
    <?php echo form_error('college_id','<div class="text-danger">','</div>');?>
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
    <label class="col-md-3 control-label">Course</label>
    <div class="col-md-9">
        <?php echo form_input(['name'=>'course','class'=>'form-control','placeholder'=>'Enter Course','value'=>set_value('username')]); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
	<?php echo form_error('course','<div class="text-danger">','</div>');?>
	</div>
</div>
	
<button type="submit" class="btn btn-primary">ADD</button>
<?php echo anchor("welcome","BACK" , ['class'=> 'btn btn-primary']);   ?>
</div>
<?php echo form_close(); ?>
