<?php
/* @var $this FundController */
/* @var $model Fund */

$this->breadcrumbs=array(
	'Funds'=>array('index'),
	$model->isin,
);

$this->menu=array(
	array('label'=>'List Fund', 'url'=>array('index')),
	array('label'=>'Create Fund', 'url'=>array('create')),
	array('label'=>'Update Fund', 'url'=>array('update', 'id'=>$model->isin)),
	array('label'=>'Delete Fund', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->isin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fund', 'url'=>array('admin')),
);
?>

<h1>View Fund #<?php echo $model->isin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'isin',
		'funds_name',
		'funds_currency',
		'nav',
	),
)); ?>
