
<?php

mb_internal_encoding("UTF-8");
	$this->pageTitle='Результаты поиска -' .Yii::app()->name;
	$this->breadcrumbs=array(
	    'Результаты поиска по запросу: '. CHtml::encode($term),
	);
	?>
	 
	<h3>Результаты поиска по запросу: "<?php echo CHtml::encode($term); ?>"</h3>
	<?php if (!empty($results)): 
             
	                 foreach($results->data as $result): 
     
	?>                  
	                    <h2><?php echo CHtml::link($result->title, CHtml::encode($result->link)); ?></h2>
	                    <p><?php 
            
                            if(0!=$result->content)
                            {
                            echo $query->highlightMatches($result->content,'UTF-8'); 
                            }
                            ?></p>
	                    <hr/>
	                <?php endforeach; ?>
	 
	            <?php else: ?>
	                <p class="error">Поиск не дал результатов.</p>
	            <?php endif; 
                    
                   $this->widget('CLinkPager', array('pages' => $results->pagination));
            ?>
       