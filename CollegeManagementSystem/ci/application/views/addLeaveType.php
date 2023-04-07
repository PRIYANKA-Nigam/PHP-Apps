<?php
include("inc/header.php"); ?>

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
                <th scope="col">Leave Type</th>
                <!-- <th scope="col">Action</th> -->
                </tr>
        </thead>
        <tbody>
            <?php if(count($leaves)): ?>
                <?php foreach($leaves as  $leave):
                     @$cnt++ ?>
            <tr class="table-active">
                <td><?php echo $cnt; ?></td>
                <td><?php echo $leave->leave_type; ?></td>
                <!-- <td width="35%">
                    <button class="btn btn-default btn-rounded btn-sm leave" id="l" data-toggle="tooltip"
                    title="Edit">Edit
                    <div class="modal" id="header" aria-hidden="true"></div>
                </button>
                <script src="https://code.jquery.com/jquery-3.6.4.slim.js" 
                integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
                    <script>
                        $(document).ready(function(){
                            $('.leave').click(function(e){
                                e.preventDefault();
                                
                                confirm =confirm("Are you sure you want to submit it ?");
                                if(confirm){
                                    var id =$(this).val();
                                    var type= $("#i").val();
                                    var types= $("#lt").val();
                                    

                                    //alert(id);
                                    $("#header").html(
                                        "<div class='modal-dialog'>"+ 
                                        "<div class='modal-content'>"+
                                       "<div class='model-header'>"+
                                        "<button type='' class='close' data-dismiss='modal' aria-hidden='true'>"+
                                        "<i class='icons-office-52'>Close</i></button>"+
                                        "<h4 class='modal-title'><strong>Leave Detail</strong></h4></div>"+
                                        "<form method='post' id='edit'>"+
                                       "<input type='text' name='ltype' id='lt' placeholder='enter Leave Type' required>"+
                                       
                                        "<button type='button' id='bt' class='btn btn-danger btn-embossed' data-dismiss='modal'>"+
                                        "Submit</button>"+
                                        "</form>"+
                                        "</div>"+"</div>"
                                     );
                                     $('#header').modal('show');
                                //    $.ajax({
                                //     type: "post",
                                //     url :"/admin/editLeaveType/{$leave->leave_type}"+id,
                                //     success:function(response){
                                //      alert("editted");
                                //      window.location.reload();
                                //     }

                                //    });
                                }
                            });
                        });
                       
                        </script> -->
                    <?php //echo anchor("admin/editLeaveType/{$leave->leave_type}","EDIT",['class'=>'btn btn-primary']);  ?></td>
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