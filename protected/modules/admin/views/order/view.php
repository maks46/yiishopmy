<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->o_id,
);

$this->menu=array(
	array('label'=>'List Order', 'url'=>array('index')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'Update Order', 'url'=>array('update', 'id'=>$model->o_id)),
	array('label'=>'Delete Order', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->o_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Order', 'url'=>array('admin')),
);
?>

<h1>View Order #<?php echo $model->o_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'o_id',
		'o_create_time',
		'o_sum',
		'o_status',
		'cms_users_id',
		'paid_at',     
	),
));

foreach ($model->orderItems as $m)
{
    $item=  Product::model()->findByPk($m->cms_product_p_id1);
   echo CHtml::link($item->p_title,array('product/view','id'=>$m->cms_product_p_id1));
   echo 'количество:'.$m->oi_quantity;
   echo 'цена:'.$item->p_price;
   echo '<br>';
   unset($item);
    
}
    

?>
