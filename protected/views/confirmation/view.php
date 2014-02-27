<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */

$this->breadcrumbs=array(
	'Confirmations'=>array('index'),
	$model->curr_date,
);

$this->menu=array(
	array('label'=>'List Confirmation', 'url'=>array('index')),
	array('label'=>'Create Confirmation', 'url'=>array('create')),
	array('label'=>'Update Confirmation', 'url'=>array('update', 'id'=>$model->curr_date)),
	array('label'=>'Delete Confirmation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->curr_date),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Confirmation', 'url'=>array('admin')),
);
?>

<h1>View Confirmation #<?php echo $model->curr_date; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'acc_nr',
		'isin',
		'curr_date',
		'currentnav',
		'paidamount',
		'accuiredshares',
		'reference_id',
	),
)); ?>
