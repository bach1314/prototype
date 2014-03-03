<?php
/* @var $this CheckitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Checkit',
);

$this->menu=array(
    array('label'=>'Create Address', 'url'=>array('create')),
    array('label'=>'Manage Address', 'url'=>array('admin')),
);

?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
