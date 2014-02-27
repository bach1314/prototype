<?php
/* @var $this FundController */
/* @var $model Fund */

$this->breadcrumbs=array(
	'Funds'=>array('index'),
	$model->isin=>array('view','id'=>$model->isin),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fund', 'url'=>array('index')),
	array('label'=>'Create Fund', 'url'=>array('create')),
	array('label'=>'View Fund', 'url'=>array('view', 'id'=>$model->isin)),
	array('label'=>'Manage Fund', 'url'=>array('admin')),
);
?>

<h1>Update Fund <?php echo $model->isin; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>