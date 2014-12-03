<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b>ID товара:</b>
	<?php echo CHtml::link(CHtml::encode($data->p_id), array('view', 'id'=>$data->p_id)); ?>
	<br />

	<b>Название товара:</b>
	<?php echo CHtml::link(CHtml::encode($data->p_title), array('view', 'id'=>$data->p_id)); ?>
	<br />

	<b>Описание товара:</b>
	<?php echo CHtml::encode($data->p_description); ?>
	<br />

	<b>Цена:</b>
	<?php echo CHtml::encode($data->p_price); ?>
	<br />

	<b>Фото:</b>
	<?php echo CHtml::encode($data->p_img); ?>
	<br />

	<b>Рейтинг:</b>
	<?php echo CHtml::encode($data->p_rating); ?>
	<br />

	<b>Оценка:</b>
	<?php echo CHtml::encode($data->p_mark); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cms_category_c_id')); ?>:</b>
	<?php echo CHtml::encode($data->cms_category_c_id); ?>
	<br />

	*/ ?>

</div>