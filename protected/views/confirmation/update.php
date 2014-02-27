<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */

$this->breadcrumbs=array(
	'Confirmations'=>array('index'),
	$model->curr_date=>array('view','id'=>$model->curr_date),
	'Update',
);

$this->menu=array(
	array('label'=>'List Confirmation', 'url'=>array('index')),
	array('label'=>'Create Confirmation', 'url'=>array('create')),
	array('label'=>'View Confirmation', 'url'=>array('view', 'id'=>$model->curr_date)),
	array('label'=>'Manage Confirmation', 'url'=>array('admin')),
);
?>

<h1>Update Confirmation <?php echo $model->curr_date; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>