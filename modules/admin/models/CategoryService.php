<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category_service".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string|null $keywords
 * @property string|null $description
 */
class CategoryService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'required'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Родитель',
            'name' => 'Наименование',
            'keywords' => 'Мета тег keywords',
            'description' => 'Мета тег description',
        ];
    }
}
