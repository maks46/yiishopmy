<?php
/* @var $this OrderController */

$this->breadcrumbs=array(
	'Order',
);
?>


<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>


<?php echo CHtml::beginForm(Yii::app()->createUrl('order/payment'),'post',array('name'=>'order')); ?>

<div >
           <input name="order_id" type="hidden" value="<?php echo $order_id ?>">
          
          <?php echo CHtml::submitButton('robo')  ?>
                  
</div>
<?php echo CHtml::endForm();  ?>
 
</form>
