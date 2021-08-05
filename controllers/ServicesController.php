<?php


namespace app\controllers;


use app\modules\admin\models\Service;

class ServicesController extends AppController
{
    public function actionIndex()
    {
        $this->setMeta('Услуги','Услуги по монтаж видео наблюдения, контроль доступа' ,'Видеонаблюдение, системы контроля доступа');
        return $this->render('index');
    }

    public function actionView($id)
    {
        $service =  Service::find()->where(['alias' => $id])->one();
        $this->setMeta($service->name, $service->description, $service->keywords);


        return $this->render('page', compact('service'));

    }
}