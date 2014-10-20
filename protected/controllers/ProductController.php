<?php

class ProductController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'AddToCart', 'ClearCart','Category', 'AjaxCart', 'ViewCart'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'AjaxCart'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel(array('p_id' => $id)),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {

      
        $model = new Product;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Product'])) {
            $model->attributes = $_POST['Product'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->p_id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Product'])) {
            $model->attributes = $_POST['Product'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->p_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {





        //$dataProvider=new CActiveDataProvider('Product');
        $criteria = new CDbCriteria();
        //$criteria->addCondition('p_id=2');

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

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Product('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Product']))
            $model->attributes = $_GET['Product'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Product the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Product::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Product $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'product-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionAddToCart2() {



        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $item = $this->loadModel($id);
        } else {
            Yii::app()->request->redirect($_SERVER['HTTP_REFERER']);
        }
        if (isset($_POST['quantity']) && isset($id)) {
            Yii::app()->shoppingCart->put($item, $_POST['quantity']);
           // $this->render('AddToCart'  );
        } else {
            Yii::app()->request->redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function actionClearCart() {
        Yii::app()->shoppingCart->clear();
        $this->render('AddToCart');
    }

    public function actionAddToCart() {
        $quantity = Yii::app()->request->getPost('quantity');
            $id = Yii::app()->request->getPost('id');
        if($quantity!=NULL && $id!=NULL)
        {
        
        if (Yii::app()->request->isAjaxRequest) { //если ajaxом
            $quantity = Yii::app()->request->getPost('quantity');
            $id = Yii::app()->request->getPost('id');
            $item = $this->loadModel($id);
          
            Yii::app()->shoppingCart->put($item, $quantity);
            
            // Завершаем приложение
            Yii::app()->user->setFlash('CartAdded','Товар Успешно добавлен в корзину!');
            echo Yii::app()->user->getFlash('CartAdded');
           
              
            Yii::app()->end();
           
        }
        else //если нет ajaxa
        {
            $item = $this->loadModel($id);
            Yii::app()->shoppingCart->put($item, $quantity);
            
          
 Yii::app()->user->setFlash('CartAdded','Товар Успешно добавлен в корзину!');
          
          echo Yii::app()->request->redirect($_SERVER['HTTP_REFERER']);
         
        }
    }
 else {
    
           
        
           
          throw new CHttpException(324,'Данные не получены');    //если нет post[id ] или количества
     }
   
    
 
    }
    

    public function actionViewCart() {

        $positions = Yii::app()->shoppingCart->getPositions();

        $this->render('AddToCart', array(
            'models' => $positions
        ));
    }
    
}
