<?php
namespace app\controllers;

use YII;
USE yii\web\Controller;
USE yii\web\cookie;
USE app\models\Blog;
USE app\models\Category;
USE app\models\Tag;
USE yii\helpers\Url;
USE yii\web\HttpException;

class  BlogController extends Controller{
    /**
     *
     */
    public $layout='blog';
    public $enableCsrfValidation=false;
    public $time_cache_category=99999;

    function  actionIndex(){
        //页面缓存，依赖数据库blog表的总数量
        $data=[];
        $data['banner']='This is LUBlog, a free and fully responsive<br />
        personal blog';
        $id='';
        $blog = new Blog();
        $blog->getBlog($id);
        return $this->render('index',$data);
    }

    function actionList(){
        $data=[];
        $blog = new Blog();
        $data['blog']=$blog->getBlogs();

        if (!($data['blog'])) {
            throw new HttpException(404, Yii::t('yii', '没有列表数据，请先创建文章.'));
        }else{
            return $this->render('list',$data);
        }
        
    }

    function actionCreate(){

        $request = \YII::$app->REQUEST;
        $data['id'] = $request->get('id');
        $data['h1'] = '写文章';
        $data['p'] = '请用心记录你的文字';
        $data['h3'] = '写文章';
        $data['action']='save';
        
        $cache=YII::$app->cache;
        //$cache->flush();
        if ($cache->get('category')) {
            $data['category'] = $cache->get('category');
        }else{
            $category=new Category;
            $data['category'] = $category->getCategory();
            $dependency = new \yii\caching\DbDependency(
            ['sql'=>'SELECT count(*) from category']);
            $cache->set('category',$data['category'],$this->time_cache_category,$dependency);
        }
        $this->getView()->title='write article';
        return $this->render('create',$data);
    }

    public  function actionSave(){
        $request = YII::$app->request;
        $blog = new Blog();
        $blog->title=$request->post("title");
        $blog->category=$request->post("category");
        $blog->content=$request->post("content");
        $blog->publishtime=date('Y-m-d H:i:s');
        if ($blog->save()>0) {
            $url=Url::toRoute(['/blog/detail','id'=>$blog->id]);
            echo "<script>alert('提交成功！')</script>";
        }else{
            $url = Url::previous();
            echo "提交失败！";
        }
        return $this->redirect($url);
    }

    public  function actionDetail(){
        //详细界面
        $request = YII::$app->request;
        $id = $request->get('id');
        $blog = new Blog();

        $data=$blog->getBlog($id);
        if (!$data) {
            throw new HttpException(404, Yii::t('yii', 'Page not found.'));
        }else{
            return $this->render('generic',$data);
        }
        
    }

    public function actionDel(){
        $request = YII::$app->request;
        $id = $request->get('id');
        $blog = new Blog();
        $data=$blog->delBlog($id);
        if ($data) {
            $url=Url::toRoute(['/blog/list']);
            echo "删除成功！";
        }else{
            $url = Url::previous();
            echo "删除失败！";
        }
        return $this->redirect($url);
    }
    public function actionModify(){
        $request = YII::$app->request;
        $id=$request->get('id');
        $blog = new Blog();
        $data=$blog->getBlog($id);
        
        if (!$data) {
            throw new HttpException(404, Yii::t('yii', 'Page not found.'));
        }
        $data['category_id']=$data['category'];
        $data['id'] = $id;
        $data['h1'] = '修改文章';
        $data['p'] = '请用心记录你的文字';
        $data['h3'] = '写文章';
        $data['action']='../update';
        
        $cache=YII::$app->cache;
        //$cache->flush();
        if ($cache->get('category')) {
            $data['category'] = $cache->get('category');
        }else{
            $category=new Category;
            $data['category'] = $category->getCategory();
            $dependency = new \yii\caching\DbDependency(
            ['sql'=>'SELECT count(*) from category']);
            $cache->set('category',$data['category'],$this->time_cache_category,$dependency);
        }
        return $this->render('modify',$data);
    }

    public function actionUpdate(){
        $request = YII::$app->request;
        $id=$request->post("id");
        $title=$request->post("title");
        $category=$request->post("category");
        $content=$request->post("content");
        $blog = new Blog();
        $result = $blog->updateAll(['title'=>$title,'category'=>$category,'content'=>$content],['id'=>$id]);

        if ($result>0) {
            $url=Url::toRoute(['/blog/detail','id'=>$id]);
            echo "修改成功！";
        }else{
            $url = Url::previous();
            echo "修改失败！";
        }
        return $this->redirect($url);

    }
}




?>