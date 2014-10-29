<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('o_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->o_id), array('view', 'id'=>$data->o_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('o_create_time')); ?>:</b>
	<?php echo CHtml::encode($data->o_create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('o_sum')); ?>:</b>
	<?php echo CHtml::encode($data->o_sum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('o_status')); ?>:</b>
	<?php echo CHtml::encode($data->o_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cms_users_id')); ?>:</b>
	<?php echo CHtml::encode($data->cms_users_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paid_at')); ?>:</b>
	<?php echo CHtml::encode($data->paid_at); ?>
	<br />


</div>