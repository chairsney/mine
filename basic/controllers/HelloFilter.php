<?php
namespace app\controllers;
USE YII;
USE yii\base\Action;
USE yii\base\ActionFilter;
class HelloFilter extends  ActionFilter{
    function beforeAction($action){
        echo 'before<br>';
        return true;
    }
    function  afterAction($action,$result){
        return '--'.$result.'--';
    }
}
?>