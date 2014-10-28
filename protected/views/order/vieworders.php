<div>
    
 <?php
 
 $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    
    'sortableAttributes'=>array(
        'o_sum'=>'Сумма заказа',
        'paid_at'=>'Когда оплачено',
    ),
     'enablePagination'=>false, 
     'ajaxUpdate'=>false,
     'summaryText' =>  'Всего заказов: '.$pages->itemCount,
   
)); 

 
 $this->widget('CLinkPager', array(
   
    'pages' => $pages, // модель пагинации переданная во View
));

 ?>
    
    
</div>

