<?php
/* @var $this FundController */
/* @var $data Fund */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('isin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->isin), array('view', 'id'=>$data->isin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funds_name')); ?>:</b>
	<?php echo CHtml::encode($data->funds_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funds_currency')); ?>:</b>
	<?php echo CHtml::encode($data->funds_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nav')); ?>:</b>
	<?php echo CHtml::encode($data->nav); ?>
	<br />


</div>