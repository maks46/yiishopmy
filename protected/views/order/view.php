

<?php
echo $model->o_id;
?>
<br>
<?php
//var_dump($model);
//var_dump($model->orderItems[0]->cms_product_p_id1);
foreach($model->orderItems as $m)
{   
 
   echo CHtml::link('товар № '.$m->cms_product_p_id1,array('product/view','id'=>$m->cms_product_p_id1));

}
 	?>	