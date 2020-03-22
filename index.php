<?php
define("APPLICATION_PATH",  dirname(__FILE__));

$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap() //appel des méthodes bootstrap définies dans le fichier Bootstrap.php
 ->run();
?>