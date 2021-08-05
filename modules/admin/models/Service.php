<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property int|null $parent_id Родительская услуга
 * @property string|null $name Имя
 * @property string|null $content Контект
 * @property string|null $image_mini Иконка
 * @property string|null $image_header Изображение в услуге
 * @property int|null $sort Сортировка
 * @property string|null $keywords
 * @property string|null $description
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'sort'], 'integer'],
            [['content','url'], 'string'],
            [['name','comment', 'image_mini', 'image_header', 'keywords', 'description', 'alias'], 'string', 'max' => 255],
        ];
    }

    public function getParent()
    {
        return $this->hasOne(Service::className(),['id'=>'parent_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Родительская услуга',
            'name' => 'Наименование',
            'content' => 'Текст',
            'comment' => 'Очень краткое описание',
            'alias' => 'Алиас',
            'image_mini' => 'Иконка',
            'image_header' => 'Картинка',
            'url' => 'Ссылка',
            'sort' => 'Сортировка',
            'keywords' => 'Мета тег keywords',
            'description' => 'Мета тег description',
        ];
    }
}
