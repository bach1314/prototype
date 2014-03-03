<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 01.03.14
 * Time: 20:10
 */
/* @var $this AddAccountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Accounts',
);

$this->menu=array(
    array('label'=>'Create Account', 'url'=>array('create')),
    array('label'=>'Manage Account', 'url'=>array('admin')),
);
?>

    <h1>AddAccounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>