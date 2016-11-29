<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $cid
 * @property string $title
 * @property integer $tree
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tree'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'title' => 'Title',
            'tree' => 'Tree',
        ];
    }

    public function getCategory($id=''){
        if (!empty($id)) {
            $sql="select title from category WHERE cid=:id";
            $result = self::findBySql($sql,[':id'=>$id])->asArray()->one();
            return $result['title'];
        }
        
        $sql="select cid,title from category WHERE tree=:id";
        $result = self::findBySql($sql,[':id'=>0])->asArray()->all();
        $category = [];
        foreach ($result as $key => $value) {
            $category[$value['cid']] = $value['title'];
        }
        return $category;
    }
}
