<?php
/* @var $this AddressController */
/* @var $data Address */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->address_id), array('view', 'id'=>$data->address_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street')); ?>:</b>
	<?php echo CHtml::encode($data->street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('house_number')); ?>:</b>
	<?php echo CHtml::encode($data->house_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_box')); ?>:</b>
	<?php echo CHtml::encode($data->post_box); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('town')); ?>:</b>
	<?php echo CHtml::encode($data->town); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_code')); ?>:</b>
	<?php echo CHtml::encode($data->post_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('c_o')); ?>:</b>
	<?php echo CHtml::encode($data->c_o); ?>
	<br />

	*/ ?>

</div>