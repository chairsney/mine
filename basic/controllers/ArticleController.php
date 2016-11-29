<?php
namespace app\controllers;

use YII;
USE yii\web\Controller;
USE yii\web\cookie;
USE app\models\Article;
USE app\models\Tag;

class  ArticleController extends Controller{
    /**
     *
     */
    public $layout='common';
    function behaviors(){
        return [
          'hello'=>[
              'class'=>'app\controllers\HelloFilter',
              'only'=>[
                  'about'
              ]
          ]

        ];
    }
    function  actionIndex(){
        $request=\yii::$app->request;
        $response =\yii::$app->response;
        $session = yii::$app->session;
        $cookie1=yii::$app->request->cookies;
        $cookie2=Yii::$app->response->cookies;
        $cookie_data=['name'=>'user','value'=>'cafe'];
        $cookie2->add(new cookie($cookie_data));
        //$cookie2->remove('user');
        $data['a']= $cookie1->getValue('user',20);
        $session->open();
        $session->set('user','lucas');
        $session->remove('user');
        echo  $session->get('user');
        $session["user"]='baby';
        unset($session['user']);

        $data['article']='article,<script>alert("123");</script>';
        //return $this->renderPartial('index',$data);
        $sql="select * from article WHERE id=:id";
        $result = Article::findBySql($sql,[':id'=>2])->all();
        $result2 = Article::find()->where(['id'=>'1'])->asArray()->all();
        var_dump($result);
        print_r($result2);
        //删除数据
//        $result = Article::find()->where(['id'=>1])->all();
//        $result[0]->delete();
        //增加数据
//        $article = new Article();
//        $article->id='2';
//        $article->title='cc';
//        $article->validate();
//        if ($article->hasErrors()){
//            echo 'data is error';
//            die;
//        }
//        $article->save();
        //修改数据
//        $result = Article::find()->where(['id'=>'1'])->one();
//        $result->title='dd';
//        $result->save();
        $tag=Article::find()->where(['id'=>1])->one();
        $result3=$tag->getTag()->all();
        var_dump($result3);
      return $this->render('index',$data);
    }
    function actionAbout(){
        $request = \YII::$app->REQUEST;
        echo 'about'.$request->get('id');
        var_dump($_SERVER['REQUEST_URI']);
        return 'habouth';
    }
}




?>