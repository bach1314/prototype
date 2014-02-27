<?php
/* @var $this RedemptionController */
/* @var $model Redemption */

$this->breadcrumbs=array(
	'Redemptions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Redemption', 'url'=>array('index')),
	array('label'=>'Manage Redemption', 'url'=>array('admin')),
);
?>

<h1>Create Redemption</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>