<?php
defined('DS')?null:define('DS',DIRECTORY_SEPARATOR);
defined('SITE_ROOT')?null:define('SITE_ROOT',DS . 'xampp'.DS.'htdocs'.DS.'phpRest');   
// defined('SITE_ROOT')?null:define('SITE_ROOT',DS . 'wamp64'.DS.'www'.DS.'phpRest');  
//=================================================================
// require_once(\wamp64\www\phpRest\includes\config.php): 
// Failed to open stream: No such file or directory in C:\xampp\htdocs\phpRest\core\initialise.php on line 10
// Fatal error: Uncaught Error: Failed opening required 
// '\wamp64\www\phpRest\includes\config.php' (include_path='C:\xampp\php\PEAR') 
// in C:\xampp\htdocs\phpRest\core\initialise.php:10 
// Stack trace: #0 {main} thrown in C:\xampp\htdocs\phpRest\core\initialise.php on line 10
defined('INC_PATH')?null:define('INC_PATH',SITE_ROOT.DS.'includes');
defined('CORE_PATH')?null:define('CORE_PATH',SITE_ROOT.DS.'core');

//load config file

require_once(INC_PATH.DS."config.php");
//core classes
require_once(CORE_PATH.DS."post.php");



?>