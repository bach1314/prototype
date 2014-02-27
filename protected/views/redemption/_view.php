<?php
/* @var $this RedemptionController */
/* @var $data Redemption */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('curr_date')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->curr_date), array('view', 'id'=>$data->curr_date)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_nr')); ?>:</b>
	<?php echo CHtml::encode($data->acc_nr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isin')); ?>:</b>
	<?php echo CHtml::encode($data->isin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentnav')); ?>:</b>
	<?php echo CHtml::encode($data->currentnav); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paidamount')); ?>:</b>
	<?php echo CHtml::encode($data->paidamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('redeemed')); ?>:</b>
	<?php echo CHtml::encode($data->redeemed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference_id')); ?>:</b>
	<?php echo CHtml::encode($data->reference_id); ?>
	<br />


</div>