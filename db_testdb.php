<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 27.02.14
 * Time: 13:29
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();

    echo "<p>WURST</p>";

try {
    echo 'Connecting...<br/>';
    $connection = Yii::app()->db;  // (*)
    echo ($connection ? 'Successful' : 'Failed');
}
catch(Exception $ex) {
    echo $ex->getMessage();
}

?>

<p>WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAS</p>