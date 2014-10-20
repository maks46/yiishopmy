<?php  echo CHtml::link('заказ',array('order/Complete')); ?>

<div>
	<br><table class='table'>

   <tr>
    <th>Наименование</th>
    <th>количество</th>
    <th>цена единицы</th>
    <th>всего</th>
   </tr>
    <?php 
	foreach($models as $model) {
    ?>
   <tr><td><?php
            
	echo $model['p_title'];
	?></td><td><?php
	echo $model['quantity'];
    ?></td><td><?php
	echo $model['p_price'];
	?>
	</td><td><?php
	echo $position->getSumPrice();

	
	};
        
        
        ?>

 </table>
 <br> Итого <?php echo $a ;
 echo CHtml::link('Очистить корзину',array('product/clearCart'));
  echo CHtml::link('заказ',array('order/Complete'));
 ?>
 
 
  
</div>
	
