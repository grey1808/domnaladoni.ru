<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string|null $content
 * @property string|null $images
 * @property string|null $keywords
 * @property string|null $description
 * @property int|null $publish
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['publish'], 'integer'],
            [['name', 'images', 'keywords', 'description'], 'string', 'max' => 255],
            [['create_datetime', 'content'], 'safe'],
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
            'images' => 'Картинка',
            'create_datetime' => 'Дата',
            'keywords' => 'Мета тег keywords',
            'description' => 'Мета тег description',
            'publish' => 'Состояние',
        ];
    }
}
