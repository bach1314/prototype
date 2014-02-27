<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'confirmation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'acc_nr'); ?>
		<?php echo $form->textField($model,'acc_nr',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'acc_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isin'); ?>
		<?php echo $form->textField($model,'isin'); ?>
		<?php echo $form->error($model,'isin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_date'); ?>
		<?php echo $form->textField($model,'curr_date'); ?>
		<?php echo $form->error($model,'curr_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentnav'); ?>
		<?php echo $form->textField($model,'currentnav',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'currentnav'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paidamount'); ?>
		<?php echo $form->textField($model,'paidamount',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'paidamount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accuiredshares'); ?>
		<?php echo $form->textField($model,'accuiredshares',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'accuiredshares'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference_id'); ?>
		<?php echo $form->textField($model,'reference_id'); ?>
		<?php echo $form->error($model,'reference_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->