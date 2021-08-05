<?php

namespace app\modules\admin\models;

use Yii;


class Reviews extends \yii\db\ActiveRecord
{
    public $reCaptcha;

    public static function tableName()
    {
        return 'reviews';
    }


    public function rules()
    {
        return [
            [['reCaptcha'], 'required'],
            [['date'], 'safe'],
            [['publish'], 'integer'],
            [['message'], 'string'],
            [['lastname', 'firstname','secondname', 'email'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата',
            'lastname' => 'Имя',
            'firstname' => 'Фамилия',
            'secondname' => 'Отчество',
            'message' => 'Отзыв',
            'email' => 'Email',
            'publish' => 'Опубликован',
            'reCaptcha' => 'Я не робот',
        ];
    }
}
