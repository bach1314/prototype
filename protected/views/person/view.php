<?php
/* @var $this PersonController */
/* @var $model1 Person */
/* @var $model2 Address */

$this->breadcrumbs=array(
	'People'=>array('index'),
	$model1->title,
);

$this->menu=array(
	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'Create Person', 'url'=>array('create')),
	array('label'=>'Update Person', 'url'=>array('update', 'id'=>$model1->id_person)),
	array('label'=>'Delete Person', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model1->id_person),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>

<h1>View Person #<?php echo $model1->id_person; ?></h1>

<?php

    //CVarDumper::dump($model1);
    //echo "<br>";echo "<br>";
    //echo "<br>";
    //CVarDumper::dump($model1->address);
    $addressKeeper = Address::model()->findByPk($model1->address);
    //echo "<br>";echo "<br>";
    //echo "<br>";
    //CVarDumper::dump($addressKeeper->address_id);
    //echo "<br>";echo "<br>";echo "<br>";
    //CVarDumper::dump($addressKeeper);

    $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model1,
	'attributes'=>array(
		'id_person',
		'title',
		'family_name',
		'surname',
		'phone',
		'email',
		'fax',
		'address',

    array(
        'label' => 'address_id',
        'value' => $addressKeeper->address_id,
    ),
    array(
        'label' => 'street',
        'value' => $addressKeeper->street,
    ),
    array(
        'label' => 'house_number',
        'value' => $addressKeeper->house_number,
    ),
    array(
        'label' => 'post_box',
        'value' => $addressKeeper->post_box,
    ),
    array(
        'label' => 'town',
        'value' => $addressKeeper->town,
    ),
    array(
        'label' => 'post_code',
        'value' => $addressKeeper->post_code,
    ),
    array(
        'label' => 'country',
        'value' => $addressKeeper->country,
    ),
    array(
        'label' => 'c_o',
        'value' => $addressKeeper->c_o,
    )
    ),

)); ?>

<?php
//
//    CVarDumper::dump($model2);
//    echo "<br>";
//
//    $this->widget('zii.widgets.CDetailView', array(
//    'data'=>$model2,
//    'attributes'=>array(
//        'address_id',
//        'street',
//        'house_number',
//        'post_box',
//        'town',
//        'post_code',
//        'country',
//        'c_o',
//    ),
//
//
//)); ?>
