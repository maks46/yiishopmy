 <div id="arriwals">
 <p id="arriwalsHead">New arrivals on FooseShoes</p>
<?php

 $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    
    'sortableAttributes'=>array(
        'p_title'=>'Название',
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

