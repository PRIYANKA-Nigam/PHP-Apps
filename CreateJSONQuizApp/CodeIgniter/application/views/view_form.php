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
                    // $data_name= array(
                    //     'name'=>'ques',
                    //     'id'=>'qid',
                    //     'class'=>'input_box',
                    //     'placeholder'=>'Please Enter Question',
                    //     'size'=>'2',
                    //     'style'=>'width:750px;height:250px',
                    //     'required'=>'required'
                    // );
                    $data_name= array(
                        'name'=>'ques',
                        'id'=>'qid',
                        'value'=>set_value('ques'),
                        'class'=>'form_control',
                        'placeholder'=>'Please Enter Question',
                        'rows'=>8,
                        'cols'=>80,
                        'required'=>'required'
                    );
                    // echo form_input($data_name);
                    
                    echo form_textarea($data_name);
                    echo "<br><br>";
                    echo form_label('Option' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                    $data_option= array(
                        'One'=>'One',
                        'Two'=>'Two',
                        'Three'=>'Three',
                        'Four'=>'Four'
                    );
                    echo form_dropdown('select',$data_option,'One',
                    'class="dropdown_box"'
            );
                    echo "<br><br>";
                    // echo form_input($data_option);
                    // echo "<br><br>";
                 ?>
                 <!-- <?php echo form_submit('submit','
                   Submit',"class='submit'"); ?> -->
                      
                   <?php
                    echo form_label('' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                       echo form_submit(array('value'=>'Submit'));
                   ?>
                
                </div>
                <?php echo form_close();  ?>
                <hr>
                <h2 id="form_head">Get JSON Questions from database</h2><br> 
                <?php 
                echo form_open(site_url('form/seeJson'),array('method'=>'post'));
                echo form_label('' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                echo form_submit(array('value'=>'get data'));
                echo form_close();
                ?> 
              
            </div>
           
        </div>
         
        <?php
              if(isset($result_msg)){
                echo "<div id='res_msg'>";
                echo $result_msg;
                echo "</div>";
              }
        ?>
        <div>
           
 <?php
            $str="";
            if(isset($result))
          {foreach($result as $key=>$value)
          {
             $str=$value['data'].";".$str;
          }
          $str = rtrim($str,";");
          $str=trim($str,"");
          $questions=array($str);
         // echo $str;
          $a = explode(";",$str);
          echo "<pre>";
       //   print_r($a);
          echo "<pre>";
        //  print_r(stripslashes(json_encode($a)));
          $s=stripslashes(json_encode($a,JSON_PRETTY_PRINT));
        //    $s=str_replace(array("\\"), "", $s);
          echo "<pre>$s</pre>";

        }
            ?>
            
        </div>
    
    </body>
</html>