<?php
/* @var $this RedemptionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Redemptions',
);

$this->menu=array(
	array('label'=>'Create Redemption', 'url'=>array('create')),
	array('label'=>'Manage Redemption', 'url'=>array('admin')),
);
?>

<h1>Redemptions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
