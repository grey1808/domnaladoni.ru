<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $position
 * @property string|null $images
 * @property string|null $url
 * @property string|null $date
 * @property string|null $coment
 * @property int|null $publish
 * @property int $sort
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position', 'publish', 'sort'], 'integer'],
            [['date'], 'safe'],
            [['coment'], 'string'],
            [['name'], 'required'],
            [['name', 'images', 'url'], 'string', 'max' => 255],
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
            'position' => 'Позиция',
            'images' => 'Картинка',
            'url' => 'Url',
            'date' => 'Дата',
            'coment' => 'Подзаголовок',
            'publish' => 'НЕ публиковать',
            'sort' => 'Сотрировка',
        ];
    }
}
