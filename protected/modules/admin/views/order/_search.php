<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'o_id'); ?>
		<?php echo $form->textField($model,'o_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'o_create_time'); ?>
		<?php echo $form->textField($model,'o_create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'o_sum'); ?>
		<?php echo $form->textField($model,'o_sum',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'o_status'); ?>
		<?php echo $form->textField($model,'o_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cms_users_id'); ?>
		<?php echo $form->textField($model,'cms_users_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paid_at'); ?>
		<?php echo $form->textField($model,'paid_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->