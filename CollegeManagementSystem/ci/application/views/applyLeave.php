<?php
include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("users/insertApplyLeave" , ['class'=> 'form-horizontal']);   ?>
<h3 class="display-3" style="text-align: center;">Apply Leave</h3><hr><br>
<?php  $username=$this->session->userData('username'); ?>
<?php  $email=$this->session->userData('email'); ?>
<h4>Welcome <?php echo $username; ?> </h4>
<hr>
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
        <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter Username',
        'value'=>set_value('username',$username)]); ?>
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
        <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter Email',
        'value'=>set_value('email',$email)]); ?>
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
    <label class="col-md-3 control-label">Leave Type</label>
    <select class="col-lg-9" name="leave_id">
      <option value="">Select Leave Type</option>
      <?php if(count($leaves)):  ?>
        <?php foreach($leaves as $leave):?>
      <option value=<?php echo $leave->id?>><?php echo $leave->leave_type?></option>
       <?php endforeach;?>
      <?php endif;?>
    </select>
</div>
	</div>
	<div class="col-md-6">
    <?php echo form_error('leave_id','<div class="text-danger">','</div>');?>
	</div>
</div><br>
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Leave Description</label>
  <?php $data_name= array(
                        'name'=>'leave_description',
                        'id'=>'lid',
                        'value'=>set_value('leave_description'),
                        'class'=>'form_control',
                        'placeholder'=>'Please Enter Description',
                        'rows'=>8,
                        'cols'=>80,
                        'required'=>'required'
                    );
                    echo form_textarea($data_name);
                    echo "<br>";
                    ?>
</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Leave From</label>
   <input type="date" class="form-control" name="leave_from" value="<?php echo date('Y-m-d H:i:s'); ?>">
</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Leave To</label>
   <input type="date" class="form-control" name="leave_to" value="<?php echo date('Y-m-d H:i:s'); ?>">
</div>
	</div>
</div><br>
<button type="submit" class="btn btn-primary">Apply</button>
<?php echo anchor("users/dashboard","BACK" , ['class'=> 'btn btn-primary']);   ?>
</div>
<?php echo form_close(); ?>
