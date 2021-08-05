<?php


namespace app\controllers;


class CatalogController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}