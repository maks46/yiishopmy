<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orders',
);
  $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'Сегодня', 'url' => array('Now')),
                        array('label' => 'За месяц', 'url' => array('week')),
                        array('label' => 'Все', 'url' => array('index')),
                       
                    ),
                ));
echo date("Y-m-d H:i:s");
$this->menu=array(
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'Manage Order', 'url'=>array('admin')),
   
);
?>

<h1>Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
