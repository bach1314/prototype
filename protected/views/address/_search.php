<?php
/* @var $this AddressController */
/* @var $model Address */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'address_id'); ?>
		<?php echo $form->textField($model,'address_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street'); ?>
		<?php echo $form->textField($model,'street'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'house_number'); ?>
		<?php echo $form->textField($model,'house_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_box'); ?>
		<?php echo $form->textField($model,'post_box'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'town'); ?>
		<?php echo $form->textField($model,'town'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_code'); ?>
		<?php echo $form->textField($model,'post_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_o'); ?>
		<?php echo $form->textField($model,'c_o'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->