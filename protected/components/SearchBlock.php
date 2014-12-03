<?php

Yii::import('zii.widgets.CPortlet');

class SearchBlock extends CPortlet
{
public $title='Поиск';

protected function renderContent()
  {
echo CHtml::beginForm(array('search/search'), 'get', array('style'=> 'inline')) .
      CHtml::textField('q', '', array('placeholder'=> 'Поиск...','style'=>'width:160px;')) .
      CHtml::submitButton('Найти!',array('style'=>'width:40px;')) .
      CHtml::endForm('');
  }
}