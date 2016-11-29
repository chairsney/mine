<?php
namespace app\models;
use yii\db\ActiveRecord;
class Article extends ActiveRecord {

    public function rules(){
        return[
            ['id','integer'],
            ['title','string']
            ];
    }

    public  function  getTag(){
        $tag = $this->hasMany(Tag::className(),['aid'=>'id'])->asArray();
        return $tag;
    }
}
?>