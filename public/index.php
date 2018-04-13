<?php
//echo "string";
//diractor separator
define('DS',DIRECTORY_SEPARATOR);

define('WEBROOT',dirname(__FILE__));
define('Root',dirname(WEBROOT));
define('CORE',Root.DS.'core');
define('RacineUrl',dirname(dirname($_SERVER['SCRIPT_NAME'])));

require (CORE.DS.'include.php');

new Dispatcher();
//print_r($_SERVER);
//echo WEBROOT ."<br>";
//echo Root ."<br>";
//echo CORE ."<br>";
//echo RacineUrl ."<br>";
?>