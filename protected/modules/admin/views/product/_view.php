<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->p_id), array('view', 'id'=>$data->p_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_title')); ?>:</b>
	<?php echo CHtml::encode($data->p_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_description')); ?>:</b>
	<?php echo CHtml::encode($data->p_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_price')); ?>:</b>
	<?php echo CHtml::encode($data->p_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_img')); ?>:</b>
	<?php echo CHtml::encode($data->p_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_rating')); ?>:</b>
	<?php echo CHtml::encode($data->p_rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_mark')); ?>:</b>
	<?php echo CHtml::encode($data->p_mark); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cms_category_c_id')); ?>:</b>
	<?php echo CHtml::encode($data->cms_category_c_id); ?>
	<br />

	*/ ?>

</div>