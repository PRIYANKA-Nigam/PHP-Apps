<?php
include('simple_calculator.php');
// require_once('OOP_Calculator.php');   or
spl_autoload_register(function($class_n){
    include $class_n.'.php'; //class name must be same as file name for this function to work
});
$op=$_POST['operation'];
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$o=new OOP_Calculator($op,$n1,$n2);
echo "the $op of given numbers is ".$o->Calcu();


?>