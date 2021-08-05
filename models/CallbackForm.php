<?php


namespace app\models;


use yii\base\Model;

class CallbackForm extends Model
{
    public $callbackfio;
    public $callbacktel;
    public $callbackantispam;
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['callbackfio', 'callbacktel', 'callbackantispam'], 'required'],
            [['callbackfio', 'callbacktel'], 'string'],
            // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'callbackfio' => 'Parent ID',
            'callbacktel' => 'Наименование',
            'callbackantispam' => 'Согласен на обработку персональных данных',
            'verifyCode' => 'Я не робот',
        ];
    }
}