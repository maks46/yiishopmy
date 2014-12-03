<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Создание категории',
);

$this->menu=array(
	array('label'=>'Список Категорий', 'url'=>array('index')),
	array('label'=>'Управление категориями', 'url'=>array('admin')),
);
?>

<h1>Создание категории</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>