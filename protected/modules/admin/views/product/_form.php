<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'p_title'); ?>
		<?php echo $form->textField($model,'p_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_description'); ?>
		<?php echo $form->textArea($model,'p_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_price'); ?>
		<?php echo $form->textField($model,'p_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'p_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_img'); ?>
		<?php echo $form->textField($model,'p_img',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_rating'); ?>
		<?php echo $form->textField($model,'p_rating'); ?>
		<?php echo $form->error($model,'p_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_mark'); ?>
		<?php echo $form->textField($model,'p_mark'); ?>
		<?php echo $form->error($model,'p_mark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cms_category_c_id'); ?>
		<?php echo $form->textField($model,'cms_category_c_id'); ?>
		<?php echo $form->error($model,'cms_category_c_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->