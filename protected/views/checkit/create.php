<?php


/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 01.03.14
 * Time: 22:37
 */
$this->breadcrumbs=array(
    'Accounts'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'List Account', 'url'=>array('index')),
    array('label'=>'Manage Account', 'url'=>array('admin')),
);
?>

    <h1>Create Person</h1>
<?php
/* @var $model1 Person */
/* @var $model2 Address */
$this->renderPartial('_form', array('model1'=>$model1, 'model2'=>$model2)); ?>