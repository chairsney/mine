<?php

namespace app\models;

use Yii;
use app\models\Category;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $title
 * @property integer $writerid
 * @property integer $category
 * @property string $content
 * @property string $publishtime
 * @property integer $readtimes
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['writerid', 'category', 'readtimes'], 'integer'],
            [['content'], 'string'],
            [['publishtime'], 'safe'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'writerid' => 'Writerid',
            'category' => 'Category',
            'content' => 'Content',
            'publishtime' => 'Publishtime',
            'readtimes' => 'Readtimes',
        ];
    }
    //查询单个文章
    public function getBlog($id){
        $sql="select * from blog where id=:id";
        $result=self::findBySql($sql,[':id'=>$id])->asArray()->one();
        if (!empty($result)) {
            $category=new Category;
            $category_title=$category->getCategory($result['category']);
            $result['category_title']=$category_title;

            if ($result['writerid']=='0') {
                $result['writer']='admin';
            }
        }
       
        return $result;
    }
    //按条件查找文章，可多个
    public function getBlogs(){
        $result=self::find()->orderBy('id desc')->asArray()->all();
        return $result;
    }

    public function delBlog($id){
        $result=self::deleteAll('id=:id',[':id'=>$id]);
        if ($result>0) {
            return true;
        }else{
            return false;
        }
        
    }
}
