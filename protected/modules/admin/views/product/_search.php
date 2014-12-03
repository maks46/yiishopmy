<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'p_id'); ?>
		<?php echo $form->textField($model,'p_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_title'); ?>
		<?php echo $form->textField($model,'p_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_description'); ?>
		<?php echo $form->textArea($model,'p_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_price'); ?>
		<?php echo $form->textField($model,'p_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_img'); ?>
		<?php echo $form->textField($model,'p_img',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_rating'); ?>
		<?php echo $form->textField($model,'p_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_mark'); ?>
		<?php echo $form->textField($model,'p_mark'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cms_category_c_id'); ?>
		<?php echo $form->textField($model,'cms_category_c_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->