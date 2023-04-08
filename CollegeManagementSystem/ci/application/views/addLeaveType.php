<?php
include("inc/header.php"); 
$data ='';
?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Leave Type</strong><small> Form</small></div>
                        <div class="card-body card-block">
                        <div class="container">
    <?php echo form_open("admin/createLeaveType" , ['class'=> 'form-horizontal']);   ?>
<h3 class="display-3" style="text-align: center;">Add Leave Type</h3><hr><br>
<?php  if($msg= $this->session->flashdata('message')):  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
    </div>
    <?php endif;  ?>

<!-- call to undefined function form_open() is coming to remove this add 'form' inside helper in autoload.php -->
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Leave</label>
    <div class="col-md-9">
        <?php echo form_input(['name'=>'leave_type','id'=>'i', 'class'=>'form-control','placeholder'=>'Enter Leave Type','value'=>set_value('leave_type')]); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
	<?php echo form_error('leave_type','<div class="text-danger">','</div>');?>
	</div>
</div>


<button type="submit" class="btn btn-primary">ADD</button>
<?php echo anchor("admin/dashboard","BACK" , ['class'=> 'btn btn-primary']);   ?>
</div>
<?php echo form_close(); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
    <table class="table table-hover" style="margin-left: 128px;width:80%">
        <thead>
            <tr>
                <th scope="col">S.No.</th>
                <th scope="col">Id</th>
                <th scope="col">Leave Type</th>
                <th scope="col" colspan="2">Action</th>
                </tr>
        </thead>
        <tbody>
            <?php if(count($leaves)): ?>
                <?php foreach($leaves as  $leave):
                    @$cnt++ ?>
            <tr class="table-active">
                <td><?php echo $cnt; ?></td>
                <td><?php echo $leave->id ;?></td>
                <td><?php echo $leave->leave_type; ?></td>
                <td width="10%">
                <button id="b1" class="btn btn-primary leave" onclick="openDialog(<?php echo $leave->id ;?>)">Edit</button>
                <p id="msg" data-id="" ></p>
                <div id="my_dialog" title="Leave Type"><form id=f1>
                  <p>Leave<input type=text id=t1 name=t1><br>
                  </form></p>
    </div>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    var clicked_id=0;
   $(document).ready(function() {
var pos = { my: "center center", at: "center top+150", of: window };
/////////
$(function() {
    $( "#my_dialog" ).dialog({
autoOpen: false,
position:pos,
 buttons: {
     "Close ": function() {
      $( this ).dialog( "close" );
      },
     "Submit ": function(){
  $data = $("#t1").val();
  callApi($data);
     $( this ).dialog( "close" );


     }
   }
		});
});

$(".leave").click(function(){
  //  var id =$(this).val();
$( "#my_dialog" ).dialog( "open" );
})
})
function openDialog(id){
    console.log('id..'+id);
    clicked_id = id;
}
//////
function callApi(data){
    console.log('calling..');
    $.get("http://[::1]/CollegeManagementSystem/ci/index.php/admin/editLeaveType?id="+clicked_id+"&type="+data,
     function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
    window.location.reload();
  });
}
</script> 
</td>
<td width="10%">  <?php echo anchor("admin/deleteLeaveType/{$leave->id}","Delete" , ['class'=> 'btn delete btn-danger']);   ?> </td>
                </tr>
            <?php endforeach;?>
            <?php else:?>
                <tr>
                    <td>No Record Found</td>
                </tr>
                <?php endif;?>
        </tbody>
    </table>
         </div>       