<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'acc_nr'); ?>
		<?php echo $form->textField($model,'acc_nr',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isin'); ?>
		<?php echo $form->textField($model,'isin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curr_date'); ?>
		<?php echo $form->textField($model,'curr_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currentnav'); ?>
		<?php echo $form->textField($model,'currentnav',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paidamount'); ?>
		<?php echo $form->textField($model,'paidamount',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accuiredshares'); ?>
		<?php echo $form->textField($model,'accuiredshares',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reference_id'); ?>
		<?php echo $form->textField($model,'reference_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->