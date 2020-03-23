<?php
namespace common\models;

use yii\db\ActiveRecord;

class MyList extends ActiveRecord
{
    public function rules(){
        return [
          [['title', 'description'], 'required'],
          ['title', 'unique', 'message' =>  'Такой товар уже есть'],
          [['title', 'alias', 'price', 'old_price', 'description'], 'trim']
        ];
    }

    public static function tableName(){
        return 'list';
    }

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'common\behaviors\Slug',
                'in_attribute' => 'title',
                'out_attribute' => 'alias',
                'translit' => true
            ]
        ];
    }
}