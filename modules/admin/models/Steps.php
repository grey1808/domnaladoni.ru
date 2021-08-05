<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "steps".
 *
 * @property int $id
 * @property string $name
 * @property string|null $content
 * @property string|null $images
 * @property string|null $sort
 * @property string|null $comment
 */
class Steps extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'steps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['sort'], 'integer'],
            [['content'], 'string'],
            [['name', 'images', 'comment'], 'string', 'max' => 255],
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
            'images' => 'Картитнка',
            'sort' => 'Порядок',
            'comment' => 'Коментарий',
        ];
    }
}
