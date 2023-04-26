<?php
$val= $_GET['list'];
$frame1=array('Laravel','Symfony','Codeigniter','CakePHP','Phalcon');
$frame2=array('Spring','Hibernate','Struts','Google web toolkit [GWT]','JavaServer Faces [JSF]','Grails',
'Vaadin','Blade','Dropwizard','Play');
$frame3=array('Django','Cubicweb','TurboGears','Web2py','Pyramid','Flask');
$frame4=array('React','Vue','Angular','Node','Ember','Backbone','Express');
$frame5=array('VB.NET','ASP.NET');
$frame6=array('JQueryUI','Kendo UI','Zino UI','JQuery Easy UI','Twitter Bootstrap',
'JQ Widgets','PrimeUI');
$frame7=array('Sinatra','Camping','Ramaze','Goliath','Hanami','Padrino','Cuba',
'Grape','Scorched','Roda','Volt');
$frame8=array('Gorilla','Gin/Gin-Gonic','Echo','Kit','Fiber','Iris','Go-zero','Kratos',
'Fast HTTP');
$frame9=array('WSGI framework');
$frame10=array('beakr','plumber','ambiorix','fiery','Shiny');

switch($val){
    case 'PHP': foreach($frame1 as $phpval){
        echo $phpval.",";
    } break;
    case 'Java': foreach($frame2 as $phpval){
        echo $phpval.",";
    } break;
    case 'Python': foreach($frame3 as $phpval){
        echo $phpval.",";
    } break;
    case 'Javascript': foreach($frame4 as $phpval){
        echo  $phpval.",";
    } break;
    case '.Net': foreach($frame5 as $phpval){
        echo  $phpval.",";
    } break;
    case 'jQuery': foreach($frame6 as $phpval){
        echo $phpval.",";
    } break;
    case 'Ruby': foreach($frame7 as $phpval){
        echo $phpval.",";
    } break;
    case 'Golang': foreach($frame8 as $phpval){
        echo $phpval.",";
    } break;
    case 'Flask': foreach($frame9 as $phpval){
        echo $phpval.",";
    } break;
    case 'R': foreach($frame10 as $phpval){
        echo $phpval.",";
    } break;
     default :
      echo "No Such Language";break;
}



?>