<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 01.03.14
 * Time: 22:37
 */

/* @var $form CActiveForm */
/* @var $model1 Person*/
/* @var $model2 Address */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'checkit-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model1); ?>

    <div class="row">
        <?php echo $form->labelEx($model1,'id_person'); ?>
        <?php echo $form->textField($model1,'id_person',array('size'=>12,'maxlength'=>12)); ?>
        <?php echo $form->error($model1,'id_person'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model1,'title'); ?>
        <?php echo $form->textField($model1,'title'); ?>
        <?php echo $form->error($model1,'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model1,'family_name'); ?>
        <?php echo $form->textField($model1,'family_name'); ?>
        <?php echo $form->error($model1,'family_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model1,'surname'); ?>
        <?php echo $form->textField($model1,'surname'); ?>
        <?php echo $form->error($model1,'surname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model1,'phone'); ?>
        <?php echo $form->textField($model1,'phone',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model1,'phone'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model1,'email'); ?>
        <?php echo $form->textField($model1,'email'); ?>
        <?php echo $form->error($model1,'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model1,'fax'); ?>
        <?php echo $form->textField($model1,'fax',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model1,'fax'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model1,'address'); ?>
        <?php echo $form->textField($model1,'address',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model1,'address'); ?>
    </div>



    <div class="row">
        <?php echo $form->labelEx($model2,'address_id'); ?>
        <?php echo $form->textField($model2,'address_id',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model2,'address_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model2,'street'); ?>
        <?php echo $form->textField($model2,'street'); ?>
        <?php echo $form->error($model2,'street'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model2,'house_number'); ?>
        <?php echo $form->textField($model2,'house_number'); ?>
        <?php echo $form->error($model2,'house_number'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model2,'post_box'); ?>
        <?php echo $form->textField($model2,'post_box'); ?>
        <?php echo $form->error($model2,'post_box'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model2,'town'); ?>
        <?php echo $form->textField($model2,'town'); ?>
        <?php echo $form->error($model2,'town'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model2,'post_code'); ?>
        <?php echo $form->textField($model2,'post_code'); ?>
        <?php echo $form->error($model2,'post_code'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model2,'country'); ?>
        <?php echo $form->textField($model2,'country'); ?>
        <?php echo $form->error($model2,'country'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model2,'c_o'); ?>
        <?php echo $form->textField($model2,'c_o'); ?>
        <?php echo $form->error($model2,'c_o'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model1->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->