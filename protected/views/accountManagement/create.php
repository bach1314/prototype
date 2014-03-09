<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 06.03.14
 * Time: 13:19
 */

/* @var $this AccountManagementController */
/* @var $model Account */

$this->breadcrumbs=array(
    'createAccount'=>array('index'),
    'Create',
); ?>


    <?php $this->renderPartial('_form', array('model'=>$model)); ?>