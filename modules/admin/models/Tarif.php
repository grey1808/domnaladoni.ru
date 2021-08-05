<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tarif".
 *
 * @property int $id
 * @property string $name
 * @property string|null $content
 * @property string|null $images
 * @property string|null $comment
 */
class Tarif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tarif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['content'], 'safe'],
            [['name',  'images', 'comment','price'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'content' => 'Текст',
            'price' => 'Цена',
            'images' => 'Картинка',
            'comment' => 'Комментарий',
        ];
    }
}
