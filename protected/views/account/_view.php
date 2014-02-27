<?php
/* @var $this AccountController */
/* @var $data Account */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_number')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->account_number), array('view', 'id'=>$data->account_number)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_person')); ?>:</b>
	<?php echo CHtml::encode($data->id_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_company')); ?>:</b>
	<?php echo CHtml::encode($data->id_company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correspondence_language')); ?>:</b>
	<?php echo CHtml::encode($data->correspondence_language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correspondence_desired')); ?>:</b>
	<?php echo CHtml::encode($data->correspondence_desired); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correspondence_address')); ?>:</b>
	<?php echo CHtml::encode($data->correspondence_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correspondence_person')); ?>:</b>
	<?php echo CHtml::encode($data->correspondence_person); ?>
	<br />


</div>