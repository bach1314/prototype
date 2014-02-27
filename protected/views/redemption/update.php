<?php
/* @var $this RedemptionController */
/* @var $model Redemption */

$this->breadcrumbs=array(
	'Redemptions'=>array('index'),
	$model->curr_date=>array('view','id'=>$model->curr_date),
	'Update',
);

$this->menu=array(
	array('label'=>'List Redemption', 'url'=>array('index')),
	array('label'=>'Create Redemption', 'url'=>array('create')),
	array('label'=>'View Redemption', 'url'=>array('view', 'id'=>$model->curr_date)),
	array('label'=>'Manage Redemption', 'url'=>array('admin')),
);
?>

<h1>Update Redemption <?php echo $model->curr_date; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>