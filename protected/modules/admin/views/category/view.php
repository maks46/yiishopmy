<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Категории'=>array('index'),
	$model->c_title,
);

$this->menu=array(
	array('label'=>'Список категорий', 'url'=>array('index')),
	array('label'=>'Создать новую категорию', 'url'=>array('create')),
	array('label'=>'Изменить категорию', 'url'=>array('update', 'id'=>$model->c_id)),
	array('label'=>'Удалить категорию', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->c_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление категориями', 'url'=>array('admin')),
);
?>

<h1>Категория :<?php echo $model->c_title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'c_id',
		'c_title',
	),
)); ?>
