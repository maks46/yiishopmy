<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slider.css" media="screen, projection" />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div id="wrapper">

        <!-- ***** ЛОГО, ЛОГИН, ПОИСК ***** -->
        <div id="header">
            <p id="logo">FOOSESHOES</p>
            
  
           <!--  <p href="" id="search"></p>
            <form action='#' method='post'>
            	<? //php echo CHtml::textField('Text','',array('class'=>'search_form'));?>
		      </form>
           --> 

            <div id="login">
                <a href="<?php Yii::app()->request->baseUrl?>/user/login" class="logButton" id="log">LOGIN</a>
                <p>or</p>
                <a href="<?php Yii::app()->request->baseUrl?>/user/registration" class="logButton" id="reg">REGISTER</a>
  
            </div>
        </div>
      
				
  
        <!-- ***** НАВИГАЦИЯ ***** -->  
        <div id="nav">
                <div class="navDiv" id="first"><?php echo CHtml::link('Home',array('product/index'),array('class'=>'navButton'));?></div>
               
               <div class="navDiv" ><?php echo CHtml::link('Products',Yii::app()->createAbsoluteUrl('product/index'),array('class'=>'navButton'));?></div>
               <div class="navDiv" ><?php echo CHtml::link('About',Yii::app()->createAbsoluteUrl('product/index'),array('class'=>'navButton'));?></div>
               <div class="navDiv" ><?php echo CHtml::link('Pages',Yii::app()->createAbsoluteUrl('product/index'),array('class'=>'navButton'));?></div>
               <div class="navDiv" ><?php echo CHtml::link('Blog',Yii::app()->createAbsoluteUrl('product/index'),array('class'=>'navButton'));?></div>
        
        </div>
<div id='slider'>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg?>"  class='slide'>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg?>"  class='slide'>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg?>"  class='slide'>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg?>"  class='slide'>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg?>"  class='slide'>
</div>
   		<div id="specials">       
            <div id="sale"><a class="specialsButton" href="">ON SALE</a></div>
            <div id="offers"><a class="specialsButton" href="">SPECIAL OFFERS</a></div>
            <div id="mustHave"><a class="specialsButton" href="">MUST HAVE</a></div>
        </div>
<div class="container" id="page">

  <div id="goods">
      <?php
if(Yii::app()->user->hasFlash('global'))
{
   echo Yii::app()->user->getFlash('global');
}

//это сообщения от оплаты робокассой

?>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
            
               <div class="search">
  <?php
      
                          $this->widget('SearchBlock', array(
      )); 
    
?>
               </div>
           
	<?php echo $content; ?>
	

	<div id="info">
                <div class="infoDiv">
                    <h2></h2>
                    <p></p>
                </div>
                <div class="infoDiv">
                    <h2></h2>
                    <p></p>
                </div>
                <div class="infoDiv" id="blog">
                    <!-- ***BLOG*** -->
                </div>
            </div>

        </div>
</div>

	<div class="clear"></div>
	
	
        <!-- *********** PRE_FOOTER *********** -->
        <div id="pre_footer">
            <input type="text" id="newsseller">
            <a href="" id="send"></a>
            <a href="" class="social" id="facebook"></a>
            <a href="" class="social" id="twitter"></a>
        </div>

        <!-- *********** FOOTER *********** -->
        <div id="footer">
   
            <p id="copyright">Copyright © Fooseshoes 2013.<br>
            Designed by EnzoLiVolti.</p>
        </div>
    </div>


</div><!-- page -->


</div>

<?php
$baseUrl=Yii::app()->request->getBaseUrl();
$clientScript=Yii::app()->clientScript;
$clientScript->registerCoreScript('jquery');
$clientScript->registerScriptFile($baseUrl.'/js/jquery.js');
$clientScript->registerScriptFile($baseUrl.'/js/slider.js');
$clientScript->registerScriptFile($baseUrl.'/js/main.js');
?>

</body>
</html>
