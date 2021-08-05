<?php


namespace app\components;
use app\modules\admin\models\Service;
use yii\base\Widget;
use yii\helpers\Html;

class WidgetService extends Widget
{
    public function run()
    {
        $service = Service::find()->orderBy(['sort'=>SORT_ASC])->all();
        return $this->render('index',compact('service'));
    }
}