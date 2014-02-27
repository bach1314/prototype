<?php
/* @var $this RedemptionController */
/* @var $model Redemption */

$this->breadcrumbs=array(
	'Redemptions'=>array('index'),
	$model->curr_date,
);

$this->menu=array(
	array('label'=>'List Redemption', 'url'=>array('index')),
	array('label'=>'Create Redemption', 'url'=>array('create')),
	array('label'=>'Update Redemption', 'url'=>array('update', 'id'=>$model->curr_date)),
	array('label'=>'Delete Redemption', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->curr_date),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Redemption', 'url'=>array('admin')),
);
?>

<h1>View Redemption #<?php echo $model->curr_date; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'acc_nr',
		'isin',
		'curr_date',
		'currentnav',
		'paidamount',
		'redeemed',
		'reference_id',
	),
)); ?>
