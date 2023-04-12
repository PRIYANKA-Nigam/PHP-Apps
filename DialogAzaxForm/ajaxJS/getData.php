<?php
$val= $_GET['list'];
$frame1=array('Laravel','Symfony','Codeigniter','CakePHP','Phalcon');
$frame2=array('Spring','JPA','JSP','JDBC');
$frame3=array('Django','Cubicweb','TurboGears','Web2py','Pyramid');
$frame4=array('React','Vue','Angular','Node','Ember','Backbone');

switch($val){
    case 'PHP': foreach($frame1 as $phpval){
        echo " <option>$phpval</option>";
    } break;
    case 'Java': foreach($frame2 as $phpval){
        echo " <option>$phpval</option>";
    } break;
    case 'Python': foreach($frame3 as $phpval){
        echo " <option>$phpval</option>";
    } break;
    case 'Javascript': foreach($frame4 as $phpval){
        echo " <option>$phpval</option>";
    } break;
     default :
      echo "no data has been selected";break;
}



?>