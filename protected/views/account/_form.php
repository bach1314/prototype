<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'account_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_person'); ?>
		<?php echo $form->textField($model,'id_person',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'id_person'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_company'); ?>
		<?php echo $form->textField($model,'id_company',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'id_company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correspondence_language'); ?>
		<?php echo $form->textField($model,'correspondence_language'); ?>
		<?php echo $form->error($model,'correspondence_language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correspondence_desired'); ?>
		<?php echo $form->textField($model,'correspondence_desired'); ?>
		<?php echo $form->error($model,'correspondence_desired'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correspondence_address'); ?>
		<?php echo $form->textField($model,'correspondence_address',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'correspondence_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correspondence_person'); ?>
		<?php echo $form->textField($model,'correspondence_person',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'correspondence_person'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->