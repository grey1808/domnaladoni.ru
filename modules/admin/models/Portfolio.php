<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $name
 * @property string|null $content
 * @property string|null $images
 * @property string|null $comment
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }


    public function getPortfolio ()
    {
        return $this->hasOne(CategoryPortfolio::className(),['id'=>'portfolio_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['portfolio_id'], 'integer'],
            [['name', 'content', 'images', 'comment'], 'string', 'max' => 255],
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
            'portfolio_id' => 'Портфолио',
            'content' => 'Текст',
            'images' => 'Картинка',
            'comment' => 'Коментарий',
        ];
    }
}
