<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->o_id=>array('view','id'=>$model->o_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Order', 'url'=>array('index')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'View Order', 'url'=>array('view', 'id'=>$model->o_id)),
	array('label'=>'Manage Order', 'url'=>array('admin')),
);
?>

<h1>Update Order <?php echo $model->o_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>