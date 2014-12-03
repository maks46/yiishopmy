
<div>
	<br><table class='table'>

   <tr>
    <th>Наименование</th>
    <th>количество</th>
    <th>цена единицы</th>
    <th>всего</th>
   </tr>
    <?php 
    $positions = Yii::app()->shoppingCart->getPositions();
    $a=Yii::app()->shoppingCart->getCost();
    
	foreach($positions as $position) {
    ?>
   <tr><td><?php
	echo $position['p_title'];
	?></td><td><?php
	echo $position['quantity'];
    ?></td><td><?php
	echo $position['p_price'];
	?>
	</td><td><?php
	echo $position->getSumPrice();

	
	}?>

 </table>
 <br> Итого <?echo $a ?>
 <?echo CHtml::link('Очистить корзину',array('product/clearCart'));
 ?>
 <br>
 <?php
  echo CHtml::link('заказ',array('order/Complete'));
 ?>
</div>
	