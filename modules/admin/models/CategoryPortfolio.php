<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category_portfolio".
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property string $comment
 */
class CategoryPortfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'required'],
            [['name', 'comment', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Наименование',
            'images' => 'Первый слайд',
            'comment' => 'Комментарий',
        ];
    }
}
