<?php
/* @var $this FundController */
/* @var $model Fund */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'isin'); ?>
		<?php echo $form->textField($model,'isin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funds_name'); ?>
		<?php echo $form->textField($model,'funds_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funds_currency'); ?>
		<?php echo $form->textField($model,'funds_currency'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nav'); ?>
		<?php echo $form->textField($model,'nav'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->