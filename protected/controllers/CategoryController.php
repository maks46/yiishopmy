<?php

class CategoryController extends Controller
{
	public function actionIndex()
	{
		$id=$_GET['id'];
        echo $id;



        //$dataProvider=new CActiveDataProvider('Product');
        $criteria = new CDbCriteria();
        //$criteria->addCondition('p_id=2');
        $criteria->addCondition('cms_category_c_id = :id');
		$criteria->params = array(':id' => $id);
        $count = Product::model()->count($criteria);
        $pages = new CPagination($count);
        // элементов на страницу
        $pages->pageSize = 9;
        $pages->applyLimit($criteria);

        $dataProvider = new CActiveDataProvider('product', array(
            'criteria' => $criteria,
            'pagination' => $pages,
            
                )
        );


        $models = Product::model()->findAll($criteria);

        $this->render('index', array(
            'models' => $models,
            'pages' => $pages,
            'dataProvider' => $dataProvider,
        ));
    
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}