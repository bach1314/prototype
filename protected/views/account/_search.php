<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_person'); ?>
		<?php echo $form->textField($model,'id_person',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_company'); ?>
		<?php echo $form->textField($model,'id_company',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correspondence_language'); ?>
		<?php echo $form->textField($model,'correspondence_language'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correspondence_desired'); ?>
		<?php echo $form->textField($model,'correspondence_desired'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correspondence_address'); ?>
		<?php echo $form->textField($model,'correspondence_address',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correspondence_person'); ?>
		<?php echo $form->textField($model,'correspondence_person',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->