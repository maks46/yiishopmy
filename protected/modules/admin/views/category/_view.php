<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="view">

	<b>id категории:</b>
	<?php echo CHtml::link(CHtml::encode($data->c_id), array('view', 'id'=>$data->c_id)); ?>
	<br />

	<b>Название категории:</b>
	<?php echo CHtml::encode($data->c_title); ?>
	<br />


</div>