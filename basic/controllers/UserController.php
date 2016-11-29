<?php
namespace app\controllers;
USE YII;
USE yii\web\Controller;
USE app\models\User;
class UserController extends Controller {
    public $enableCsrfValidation = false;
    public  function actionCreate(){
        //创建及修改界面
        echo "创建用户成功！";
        $data['title']="创建用户";
        $data['action']='save';
        return $this->render('index',$data);
    }
    public  function actionSave(){
        $request = YII::$app->request;
        $loginname = $request->post("loginname");
        $password = $request->post("password");
        $nickname = $request->post("nickname");
        var_dump($loginname);
        var_dump($password);
        var_dump($nickname);
        $user = new User();
        $user->loginname=$loginname;
        $user->password=$password;
        $user->nickname=$nickname;
        $user->save();
        echo "保存用户成功！";
    }
    public  function actionDetail(){
        //详细界面
        echo "详情！";
        $request = YII::$app->request;
        $id = $request->get('id');
        echo "$id";
    }
}
?>