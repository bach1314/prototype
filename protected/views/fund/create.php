<?php
/* @var $this FundController */
/* @var $model Fund */

$this->breadcrumbs=array(
	'Funds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fund', 'url'=>array('index')),
	array('label'=>'Manage Fund', 'url'=>array('admin')),
);
?>

<h1>Create Fund</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>