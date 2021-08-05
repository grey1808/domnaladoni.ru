<?php


namespace app\controllers;


class CompanyController extends AppController
{
    public function actionIndex()
    {
        $company = \app\modules\admin\models\Config::find()->where(['parameter'=>'o-company'])->one();
        $this->setMeta($company->name,$company->content ,'Видеонаблюдение, системы контроля доступа');
        return $this->render('index');
    }
}