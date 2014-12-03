<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Товары',
);

$this->menu=array(
	array('label'=>'Создать позицию в товарах', 'url'=>array('create')),
	array('label'=>'Управление товарами', 'url'=>array('admin')),
);
?>

<h1>Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
