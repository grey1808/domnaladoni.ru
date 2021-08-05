<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property int $id
 * @property string $parameter Параметр, для типа настройки
 * @property string $name
 * @property string|null $content
 * @property string|null $images
 * @property string|null $comment
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['content'], 'string'],
            [['parameter', 'name', 'images', 'comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parameter' => 'Тип настройки',
            'name' => 'Наименование',
            'content' => 'Текст',
            'images' => 'Картинка',
            'comment' => 'Коментарий',
        ];
    }
}
