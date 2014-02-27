<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 27.02.14
 * Time: 15:27
 */


$this->pageTitle=Yii::app()->name . ' - Test Eingabe-Formular ';
$this->breadcrumbs=array(
    'TestForm',
);

?>

<p>This is a Testsite</p>
<p>The following content will be representing a View to enter Data into a Model which then will be saved into Data (PGSQL</p>

<div class="form">
    <?php echo CHtml::beginForm(); ?>

    <?php echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'username'); ?>
        <?php echo CHtml::activeTextField($model,'username') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'password'); ?>
        <?php echo CHtml::activePasswordField($model,'password') ?>
    </div>

    <div class="row rememberMe">
        <?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
        <?php echo CHtml::activeLabel($model,'rememberMe'); ?>
    </div>

    <div class="row submit">
        <?php echo CHtml::submitButton('Einfuegen'); ?>
    </div>

    <?php echo CHtml::endForm(); ?>
</div><!-- form -->