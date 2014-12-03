<?php
/* @var $this CityController */

/* @var $data City */
?>
<?php /*
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->p_id), array('view', 'id'=>$data->p_id)); ?>
	<br />

	<b><?php 

	echo CHtml::encode($data->getAttributeLabel('p_title')); ?>:</b>
	<?php echo CHtml::encode($data->p_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_price')); ?>:</b>
	<?php echo CHtml::encode($data->p_price); ?>
	<br />

	<br />


</div>
*/?>
<?php

echo '<div class="arriwalsDiv" id="'.$data->p_id.'">'.CHtml::link('<img src="'.$data->p_img.'">',array('product/view','id'=>$data->p_id));
 echo '<p class="price">'.$data->p_price.'</p>';
 	echo '<p class="goodsName">'.$data->p_title.'</p><div class="buttondiv">';
 	//echo CHtml::link('',array('product/addToCart', 'id'=>$data->p_id),array('class'=>'shopbutton button1')); 		
  echo '<form method="POST" name="ToCart"><input id="quantity" name="quantity" type="number" min="1" max="100" value="1" maxlength="2">';
 		echo '<input name="id" type="hidden" class="shopbutton button1" value="'.$data->p_id.'"><input name="ToCart" type="submit" formaction="AddToCart">'; 
                        
                           echo CHtml::ajaxLink(
'добавить в корзину ajaxom',
Yii::app()->createUrl( 'Product/AddToCart' ), 
array(
    'datatype'=> 'text',
    'async'=>'true',
'type' => 'POST',// method
      'data'=>array(
          'id'=>$data->p_id,
          'quantity'=>'js:$("#quantity").val()',
          'update'=>TRUE
          ),
    'update'=> '#cart',

),
       array( //htmlOptions
    'href' => Yii::app()->createUrl( 'Product/AddToCart' ),
    'class'=>'addtocart'
    //'class' => $class
  )                             
                                   );
                        ?>
                       

</form></div></div>
                        
                        <?php
 	
                
                  //echo '</a><a class="shopbutton button2" href="#"></a><a class="shopbutton button3" href="#"></a></div></div>';
                 
          
 
?>
