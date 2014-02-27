<?php
/* @var $this FundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funds',
);

$this->menu=array(
	array('label'=>'Create Fund', 'url'=>array('create')),
	array('label'=>'Manage Fund', 'url'=>array('admin')),
);
?>

<h1>Funds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
