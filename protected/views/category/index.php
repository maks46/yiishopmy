 <div id="arriwals">
 <p id="arriwalsHead">New arrivals on FooseShoes</p>
              
<?php
Yii::app()->clientScript->registerScript('console', ' 
     $( document ).ready(function() {
  console.log(4)
});', CClientScript::POS_READY); 
 ?>


 <div class="clear">
     
                    
     <?php if(Yii::app()->user->hasFlash('CartAdded')){ 



 echo Yii::app()->user->getFlash('CartAdded');
     }
 ?>       
<?php

 $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    
    'sortableAttributes'=>array(
        'p_title',
        'p_price'=>'Цена',
    ),
     'enablePagination'=>false, 
     'ajaxUpdate'=>false,
     'summaryText' =>  'Всего товаров: '.$pages->itemCount,
   
)); 

 
 $this->widget('CLinkPager', array(
   
    'pages' => $pages, // модель пагинации переданная во View
));
 echo CHtml::link('В Корзину','ViewCart');

 ?>

  

</div>