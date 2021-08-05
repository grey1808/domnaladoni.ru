<?php


namespace app\components;


use app\models\CallbackForm;
use yii\base\Widget;

class CallbackFormWidget extends Widget
{
    public function run ()
    {
        $form_model = new CallbackForm();
        return $this->render('callbackform',compact('form_model'));
    }
}