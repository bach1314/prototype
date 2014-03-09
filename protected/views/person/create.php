<?php
/* @var $this PersonController */
/* @var $model1 Person */
/* @var $model2 Address */

$this->breadcrumbs=array(
	'People'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>

<h1>Create Person</h1>

<?php $this->renderPartial('_form', array('model1'=>$model1, 'model2' => $model2)); ?>
