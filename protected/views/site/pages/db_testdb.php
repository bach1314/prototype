<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 27.02.14
 * Time: 13:29
 */

try {
    echo 'Connecting...<br/>';
    $connection = Yii::app()->db;  // (*)
    echo ($connection ? 'Successful' : 'Failed');
}
catch(Exception $ex) {
    echo $ex->getMessage();
}

