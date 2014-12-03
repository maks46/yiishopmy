<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class='categoryBlock'>
<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
			
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>Category::menu(),
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
</div>
<div id="content">
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>