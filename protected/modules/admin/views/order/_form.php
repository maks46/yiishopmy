<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'o_create_time'); ?>
		<?php echo $form->textField($model,'o_create_time'); ?>
		<?php echo $form->error($model,'o_create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'o_sum'); ?>
		<?php echo $form->textField($model,'o_sum',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'o_sum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'o_status'); ?>
		<?php echo $form->textField($model,'o_status'); ?>
		<?php echo $form->error($model,'o_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cms_users_id'); ?>
		<?php echo $form->textField($model,'cms_users_id'); ?>
		<?php echo $form->error($model,'cms_users_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paid_at'); ?>
		<?php echo $form->textField($model,'paid_at'); ?>
		<?php echo $form->error($model,'paid_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->