<html>
    <head>
        <title>Codeigniter JSON</title>
    </head>
    <body>
        <div class="main">
            <div id="content">
                <h2 id="form_head">Convert Query to JSON and insert into database</h2><br>
                <hr>
                <div id="form_input">
                    <?php
                    echo form_open('form/data_submitted');
                    echo form_label('Question' .'&nbsp;&nbsp;&nbsp;');
                    $data_name= array(
                        'name'=>'ques',
                        'id'=>'qid',
                        'class'=>'input_box',
                        'placeholder'=>'Please Enter Question',
                        'required'=>'required'
                    );
                    echo form_input($data_name);
                    echo "<br><br>";
                    echo form_label('Option' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                    $data_option= array(
                        'One'=>'One',
                        'Two'=>'Two',
                        'Three'=>'Three'
                    );
                    echo form_dropdown('select',$data_option,'One',
                    'class="dropdown_box"');
                    echo "<br><br>";
                    // echo form_input($data_option);
                    // echo "<br><br>";
                 ?>
                 <?php echo form_submit('submit','
                   Submit',"class='submit'"); ?>
                </div>
                <?php echo form_close();  ?>
            </div>
        </div>
        <?php
              if(isset($result_msg)){
                echo "<div id='res_msg'>";
                echo $result_msg;
                echo "</div>";
              }
        ?>
        <div id="formget_ad">
            <a href="#"><img id="fugo" src="<?php echo base_url(); ?>images/demo.png" width="350" height="550">
            </a>
        </div>
    </body>
</html>