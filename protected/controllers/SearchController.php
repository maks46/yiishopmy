<?php

class SearchController extends Controller
{
    /**
     * @var string index dir as alias path from <b>application.</b>  , default to <b>runtime.search</b>
     */
    private $_indexFiles = 'runtime.search';
    /**
     * (non-PHPdoc)
     * @see CController::init()
     */
    public function init(){
        Yii::import('application.vendor.*');
        require_once('Zend/Search/Lucene.php');
        parent::init(); 
    }

    /**
     * Search index creation
     */
    public function actionCreate()
    {
 header("Content-Type: text/html; charset=utf-8");
        setlocale(LC_CTYPE, 'ru_RU.UTF-8');
      Zend_Search_Lucene_Analysis_Analyzer::setDefault(
    new Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8_CaseInsensitive()
);
Zend_Search_Lucene_Search_QueryParser::setDefaultEncoding('utf-8'); 

        $index = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles), true);

        $posts = Product::model()->findAll();
        foreach($posts as $post){
            $doc = new Zend_Search_Lucene_Document();
            $doc->addField(Zend_Search_Lucene_Field::Text('title',
                                          CHtml::encode($post->p_title), 'UTF-8')
            );

         
            $doc->addField(Zend_Search_Lucene_Field::Text('link',
                                            "/product/".$post->p_id
                                                , 'UTF-8')
            );   
          

  $content = $this->clean_content($post->p_description);
            $doc->addField(Zend_Search_Lucene_Field::Text('content',
                                          $content
                                         , 'UTF-8')
            );

            $index->addDocument($doc);
        }
        $index->optimize();
        $index->commit();
        echo 'Lucene index создан успешно';
    }

    public function actionSearch()
    {
        header("Content-Type: text/html; charset=utf-8");
         setlocale(LC_CTYPE, 'ru_RU.UTF-8');
       
        Zend_Search_Lucene_Analysis_Analyzer::setDefault(
    new Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8_CaseInsensitive()
);
Zend_Search_Lucene_Search_QueryParser::setDefaultEncoding('utf-8');

        $this->layout='column2';
         if (($term = Yii::app()->getRequest()->getParam('q', null)) !== null) {
            $index = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles));
            Zend_Search_Lucene_Search_Query_Wildcard::setMinPrefixLength(0);
           // $results = $index->find('*'.$term.'*');
            $query = Zend_Search_Lucene_Search_QueryParser::parse('*'.$term.'*','UTF-8');   
            
        $results = new CArrayDataProvider($index->find($term), array(
                        'id' => 'search',
                        'pagination' => array(
                            'pageVar' => 'page',
                           'pageSize'=>1,
                        ),
                        'sort' => false,
                    ));
                    

            $this->render('search',  compact('results', 'term', 'query'
            ));
        }
    }
    
    // Function for returning a preview of the content:
// The preview is the first XXX characters.
private function preview_content($data, $limit = 400) {
   return substr($data, 0, $limit) . '...';
} // End of preview_content() function.
// Function for stripping junk out of content:
private function clean_content($data) {
   return strip_tags($data);
}
}