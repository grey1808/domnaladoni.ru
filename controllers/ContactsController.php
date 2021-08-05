<?php


namespace app\controllers;


class ContactsController extends AppController
{
    public function actionIndex()
    {
        $this->setMeta('Контакты','Услуги по монтажу видео наблюдения, контроль доступа' ,'Видеонаблюдение, системы контроля доступа');
        return $this->render('index');
    }
}