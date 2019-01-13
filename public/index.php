<?php
define('WEBROOT', dirname(dirname(__FILE__)));
define('ROOT', WEBROOT);
define('DS', DIRECTORY_SEPARATOR);
define('CORE', ROOT.DS.'core');
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));

require(CORE.DS."includes.php");
new Dispatcher();
?>
