<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Товары'=>array('index'),
	$model->p_title,
);

$this->menu=array(
	array('label'=>'Список товаров', 'url'=>array('index')),
	array('label'=>'Создать позицию', 'url'=>array('create')),
	array('label'=>'Редактировать позицию', 'url'=>array('update', 'id'=>$model->p_id)),
	array('label'=>'Удалить позицию', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->p_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление товарами', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->p_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'p_id',
		'p_title',
		'p_description',
		'p_price',
		'p_img',
		'p_rating',
		'p_mark',
		'cms_category_c_id',
	),
     

)); ?>
