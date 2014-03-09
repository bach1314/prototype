<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 06.03.14
 * Time: 13:19
 */

/* @var $this AccountManagementController */
/* @var $model Account */
/* @var $form CActiveForm */
?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableAjaxValidation'=>false,
));
?>

<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->hiddenField($model,'account_number',array('type'=>'hidden','size'=>12,'maxlength'=>12)); ?>
        <?php echo $form->error($model,'account_number'); ?>
    </div>

<!--    <div class="row">-->
<!--        --><?php //echo $form->labelEx($model,'id_person'); ?>
<!--        --><?php //echo $form->textField($model,'id_person',array('size'=>12,'maxlength'=>12)); ?>
<!--        --><?php //echo $form->error($model,'id_person'); ?>
<!--    </div>-->


    <div id="person">
        <?php
        $myValue = 1;
        $this->renderPartial('_personForm', array('myValue'=>$myValue)); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_person'); ?>
        <?php echo CHtml::ajaxButton("Add Person",CController::createURL('accountManagement/AddPerson'),
            array('update' => '#data'));?>


    </div>



<!--    <div class="row">-->
<!--        --><?php //echo $form->labelEx($model,'id_company'); ?>
<!--        --><?php //echo $form->textField($model,'id_company',array('size'=>12,'maxlength'=>12)); ?>
<!--        --><?php //echo $form->error($model,'id_company'); ?>
<!--    </div>-->
    <div class ="row">
        <?php echo $form->labelEx($model,'id_company'); ?>
        <?php echo CHtml::ajaxButton("Add Company",CController::createURL('accountManagement/AddCompany'));?>

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